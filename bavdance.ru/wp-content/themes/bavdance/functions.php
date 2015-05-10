<?php

class IM_Enqueue{
    private $style_folder;
    private $scripts_folder;
    
    function __construct() {
         $this->style_folder = get_bloginfo("template_url")."/css/";
         $this->scripts_folder = get_bloginfo("template_url")."/js/";
         add_action("wp_enqueue_scripts",array($this, "enqueue_styles_and_scripts"));
    }
    
    public function enqueue_styles_and_scripts(){
        $scripts_dir = get_template_directory()."/js/";
        $styles_dir = get_template_directory()."/css/";
        $scripts = scandir($scripts_dir);
        $styles = scandir($styles_dir);
        foreach ($scripts as $script){
            wp_enqueue_script("script_$script", $this->scripts_folder.$script);
        }
         foreach ($styles as $style){
             wp_enqueue_style("style_$style", $this->style_folder.$style);
        }
    }
}

$enq = new IM_Enqueue();


function get_img_href( $img ){
    return get_bloginfo("template_url")."/images/$img";
}


