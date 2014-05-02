<?php

register_nav_menus(array('top' => 'Верхнее меню', 'footer-menu-0' => __('Footer Menu', 'talan_clear'), 'footer-menu-1' => __('Footer Menu', 'talan_clear'), 'sidebar' => __('sidebar Menu', 'talan_clear')));

function my_wp_nav_menu_args($args = '') {
    $args['container'] = '';
    return $args;
}


add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args');

add_action('wp_enqueue_scripts', 'enqueue_scripts');
function enqueue_scripts() {
    /** REGISTER HTML5 Shim * */
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array('jquery'), '1', false);
    wp_enqueue_script('html5-shim');
}


add_action('widgets_init', 'my_register_sidebars');

function my_register_sidebars() {

    /* Регистрация сайдбара  'primary'  */
    register_sidebar(
            array(
                'id' => 'primary',
                'name' => __('Primary'),
                'description' => '',
                //'before_widget' => '<div id="%1$s" class="widget %2$s">',
                //'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
            )
    );

}



/* ----------------------------------------------------------------------------------- */
/* 	Constants
  /*----------------------------------------------------------------------------------- */
define('LOCALITY_WIDGETS', get_template_directory() . '/inc/');


/* ----------------------------------------------------------------------------------- */
/* 	Custom Widgets
  /*----------------------------------------------------------------------------------- */

require_once (LOCALITY_WIDGETS . 'contact-widget.php');

add_action('widgets_init', 'theme_load_widgets');

function theme_load_widgets() {
    register_widget('Contact_Widget');
}

$filters = array('pre_term_description');

foreach ($filters as $filter) {
    remove_filter($filter, 'wp_filter_kses');
}

foreach (array('term_description') as $filter) {
    remove_filter($filter, 'wp_kses_data');
}


// Класс кастомайзер
class TU_Customizer{
    public function customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'header_color' , array(
            'default'     => '#000000',
            'transport'   => 'postMessage',
        ) );

        $wp_customize->add_section( 'tu_customizer_section' , array(
            'title'      => __( 'TU  Кастомизация', 'theme-unleashed' ),
            'priority'   => 30,
        ) );

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
            'label'      => __( 'Header Color', 'mytheme' ),
            'section'    => 'mytheme_new_section_name',
            'settings'   => 'header_color',
        ) ) );



        $wp_customize->add_setting( 'columns_count' , array(
            'default'     => '1',
            'transport'   => 'postMessage',
        ) );

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'columns_count', array(
            'label'   => __('Количество колонок','theme-unleashed'),
            'section' => __('tu_customizer_section','theme-unleashed'),
            'settings' => __('columns_count','theme-unleashed'),
            'type' =>'text',

        )));


    }

    public function render_columns(){
        $columns_count = get_theme_mod('columns_count');

        ?>
        <table class='content'>
            <tr>
                <? for($i = 0; $i < $columns_count; $i++) { ?>
                    <td> column <? echo $i; ?> </td>
                <? } ?>
            </tr>
        </table>

        <?php
    }

    public function render_settings(){
        ?>
        <style type='text/css'>

        </style>

        <?php
    }

    public static function generate_css($selector,$property,$value){
        return $selector." { ".$property.": ".$value.";";
    }
}
$tu_customizer = new TU_Customizer();

add_action( 'customize_register',array($tu_customizer,'customize_register'));
add_action( 'wp_head', array( $tu_customizer, 'generate_css'));

add_action( 'content', array($tu_customizer, 'render_columns'));

?>


