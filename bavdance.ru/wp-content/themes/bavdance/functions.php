<?php

require_once 'inc/class-talan-metabox.php';
require_once 'inc/class-talan-metabox_boolean.php';
class BavInculder {
    private $scripts_folder;
    private $styles_script;
    
    function __construct() {
        $theme_folder = get_template_directory();
        $this->scripts_folder = $theme_folder."/js/";
        $this->styles_script = $theme_folder."/css/";
    }
    
    function include_styles(){
        $styles = scandir($this->styles_script);
        $url = get_bloginfo("template_url")."/css/";
        foreach ($styles as $style){
            wp_enqueue_style("name_$style", $url.$style);
        }
    }
    
    function include_scripts(){
        $scripts = scandir($this->scripts_folder);
        $url = get_bloginfo("template_url")."/js/";
        foreach ($scripts as $script){
            wp_enqueue_script("name_$script", $url.$script);
        }
    }
    
    function include_all(){
        $this->include_scripts();
        $this->include_styles();
    }

}

$in = new BavInculder();

add_action("wp_enqueue_scripts", array($in,"include_all"));

function get_image($name){
    return get_bloginfo("template_url")."/images/$name";
}

add_action( 'init', 'create_service_post_type' );
function create_service_post_type() {
  register_post_type( 'service',
    array(
      'labels' => array(
        'name' => "Услуги",
        'singular_name' => "Услуга"
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
  
  $old_price = new Talan_Metabox(array('id' => "old_price",'name' => "Старая цена"),array('service'));
  $new_price = new Talan_Metabox(array('id' => "new_price",'name' => "Новая цена"),array('service'));
  $is_additional = new Talan_Metabox_Boolean(array('id' => "bav_additional",'name' => "Дополнительная"),array('service'));
}

