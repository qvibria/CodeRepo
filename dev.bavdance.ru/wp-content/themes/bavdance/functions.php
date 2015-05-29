<?php
require_once 'inc/class-talan-metabox-boolean.php';
require_once 'inc/class-talan-metabox.php';

define("SERVICE_POSTTYPE", "service");

class IM_Enqueue {

    private $style_folder;
    private $scripts_folder;

    function __construct() {
        $this->style_folder = get_bloginfo("template_url") . "/css/";
        $this->scripts_folder = get_bloginfo("template_url") . "/js/";
        add_action("wp_enqueue_scripts", array($this, "enqueue_styles_and_scripts"));
    }

    public function enqueue_styles_and_scripts() {
        $scripts_dir = get_template_directory() . "/js/";
        $styles_dir = get_template_directory() . "/css/";
        $scripts = scandir($scripts_dir);
        $styles = scandir($styles_dir);
        foreach ($scripts as $script) {
            wp_enqueue_script("script_$script", $this->scripts_folder . $script);
        }
        foreach ($styles as $style) {
            wp_enqueue_style("style_$style", $this->style_folder . $style);
        }
    }

}

$enq = new IM_Enqueue();

function get_img_href($img) {
    return get_bloginfo("template_url") . "/images/$img";
}

add_action('init', 'create_service_post_type');
add_action('init', 'create_video_post_type');
add_action('init', 'create_recall_post_type');

function create_service_post_type() {
    register_post_type('service', array(
        'labels' => array(
            'name' => "Услуги",
            'singular_name' => "Услуга"
        ),
        'public' => true,
        'has_archive' => true,
            )
    );
    $old_price = array(
        'id' => "old_price",
        'name' => 'Старая цена'
    );

    $new_price = array(
        'id' => "new_price",
        'name' => 'Новая цена'
    );

    $is_additional = array(
        'id' => "is_additional",
        'name' => 'Дополнительная?'
    );

    $is_free = array(
        'id' => "is_free",
        'name' => 'Бесплатная?'
    );
    $mb_old_price = new Talan_Metabox($old_price, array(SERVICE_POSTTYPE));
    $mb_new_price = new Talan_Metabox($new_price, array(SERVICE_POSTTYPE));
    $mb_is_additional = new Talan_Metabox_Boolean($is_additional, array(SERVICE_POSTTYPE));
    $mb_is_free = new Talan_Metabox_Boolean($is_free, array(SERVICE_POSTTYPE));
}

add_action('init', 'create_taxonomy');

function create_taxonomy() {
    // заголовки
    $labels = array(
        'name' => 'Категории',
        'singular_name' => 'Категория',
    );
    // параметры
    $args = array(
        'label' => '', // определяется параметром $labels->name
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
        'show_tagcloud' => true, // равен аргументу show_ui
        'hierarchical' => true,
    );
    register_taxonomy('service_tax', array('service'), $args);
}

function create_video_post_type() {
    register_post_type('pf_video', array(
        'labels' => array(
            'name' => "Видео",
            'singular_name' => "Видео"
        ),
        'public' => true,
        'has_archive' => true,
            )
    );
    $video_link = array(
        'id' => "video_link",
        'name' => 'Ссылка на видео(youtube)'
    );
    $pf_video_link_meta = new Talan_Metabox($video_link, array('pf_video'));
}

function create_recall_post_type() {
    register_post_type('recall', array(
        'labels' => array(
            'name' => "Отзывы",
            'singular_name' => "Отзыв"
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
            )
    );
}

add_theme_support('post-thumbnails');


// create custom plugin settings menu
add_action('admin_menu', 'baw_create_menu');

function baw_create_menu() {

    //create new top-level menu
    add_menu_page('Опции', 'Опции', 'administrator', __FILE__, 'baw_settings_page');

    //call register settings function
    add_action('admin_init', 'register_mysettings');
}

function register_mysettings() {
    //register our settings
    register_setting('baw-settings-group', 'vk_link');
    register_setting('baw-settings-group', 'insta_link');
    register_setting('baw-settings-group', 'youtube_link');
    register_setting('baw-settings-group', 'main_video');
    register_setting('baw-settings-group', 'site_email');
    register_setting('baw-settings-group', 'site_phone');
}

function baw_settings_page() {
    ?>
    <div class="wrap">
        <h2>Опции</h2>

        <form method="post" action="options.php">
            <?php settings_fields('baw-settings-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Ссылка Вконтакте</th>
                    <td><input type="text" name="vk_link" value="<?php echo get_option('vk_link'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Ссылка Instagram</th>
                    <td><input type="text" name="insta_link" value="<?php echo get_option('insta_link'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Ссылка youtube</th>
                    <td><input type="text" name="youtube_link" value="<?php echo get_option('youtube_link'); ?>" /></td>
                </tr>

                </tr>
                <tr valign="top">
                    <th scope="row">Ссылка на видео на главной странице</th>
                    <td><input type="text" name="main_video" value="<?php echo get_option('main_video'); ?>" /></td>
                </tr>

                <tr valign="top">
                    <th scope="row">Почта</th>
                    <td><input type="email" name="site_email" value="<?php echo get_option('site_email'); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Телефон</th>
                    <td><input type="phone" name="site_phone" value="<?php echo get_option('site_phone'); ?>" /></td>
                </tr>

            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="Сохранить" />
            </p>

        </form>
    </div>
    <?php
}

function register_album_tax() {
    // заголовки
    $labels = array(
        'name' => 'Альбомы',
        'singular_name' => 'Альбом',
    );
    // параметры
    $args = array(
        'label' => '', // определяется параметром $labels->name
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
        'show_tagcloud' => true, // равен аргументу show_ui
        'hierarchical' => true,
    );
    register_taxonomy('albums', array('attachment'), $args);
}

add_action('init', 'register_album_tax');



add_action('after_setup_theme', 'baw_theme_setup');

function baw_theme_setup() {

    add_image_size('bav_size', 365, 180, true); // (cropped)
}
