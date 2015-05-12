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

add_action('init', 'create_post_type');

function create_post_type() {
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
    $mb_old_price = new Talan_Metabox($old_price, array(SERVICE_POSTTYPE));
    $mb_new_price = new Talan_Metabox($new_price, array(SERVICE_POSTTYPE));
    $mb_is_additional = new Talan_Metabox_Boolean($is_additional, array(SERVICE_POSTTYPE));
}


function get_non_additional_service_content($id){
    $service = get_post($id);
    $srv_content = $service->post_content;
    $service_cont_array = split(",", $srv_content);
    $srv_formatted = "<ul class='pseudo-table'>";
    foreach ($service_cont_array as $str){
        $srv_formatted .= "<li>".  trim($str)."</li>";
    }
    $srv_formatted .= "</ul>";
    return $srv_formatted;
}