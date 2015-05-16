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
        'taxonomies' => array('category'), 
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

    $is_free= array(
        'id' => "is_free",
        'name' => 'Бесплатная?'
    );
    $mb_old_price = new Talan_Metabox($old_price, array(SERVICE_POSTTYPE));
    $mb_new_price = new Talan_Metabox($new_price, array(SERVICE_POSTTYPE));
    $mb_is_additional = new Talan_Metabox_Boolean($is_additional, array(SERVICE_POSTTYPE));
    $mb_is_free = new Talan_Metabox_Boolean($is_free, array(SERVICE_POSTTYPE));
}

add_action('init', 'create_taxonomy');
function create_taxonomy(){
	// заголовки
	$labels = array(
		'name'              => 'Категории',
		'singular_name'     => 'Категория',
		
	); 
	// параметры
	$args = array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => $labels,
		'public'                => true,
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'hierarchical'          => true,
		
	);
	register_taxonomy('service_tax', array('service'), $args );
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
        'name' => 'Ссылка на видео(youtube/vimeo и т.д.)'
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

function get_non_additional_service_content($id) {
    $service = get_post($id);
    $srv_content = $service->post_content;
    $service_cont_array = split(",", $srv_content);
    $srv_formatted = "<ul class='pseudo-table'>";
    foreach ($service_cont_array as $str) {
        $srv_formatted .= "<li>" . trim($str) . "</li>";
    }
    $srv_formatted .= "</ul>";
    return $srv_formatted;
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

            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="Сохранить" />
            </p>

        </form>
    </div>
<?php } ?>