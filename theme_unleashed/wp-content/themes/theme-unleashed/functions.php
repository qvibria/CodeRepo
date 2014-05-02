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
        $wp_customize->add_setting( 'header_textcolor' , array(
            'default'     => '#000000',
            'transport'   => 'refresh',
        ) );

        $wp_customize->add_section( 'mytheme_new_section_name' , array(
            'title'      => __( 'Visible Section Name', 'mytheme' ),
            'priority'   => 30,
        ) );

    }
}
//$tu_customizer = new TU_Customizer();
function my_customize_register( $wp_customize ) {
        $wp_customize->add_setting( 'header_textcolor' , array(
            'default'     => '#000000',
            'transport'   => 'refresh',
        ) );

        $wp_customize->add_section( 'mytheme_new_section_name' , array(
            'title'      => __( 'Visible Section Name', 'mytheme' ),
            'priority'   => 30,
        ) );

}

add_action('customize_register','my_customize_register');




