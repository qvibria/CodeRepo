<?php
$thisis_file = str_replace( '\\', '/', __FILE__ );
$thisis_file = explode( 'wp-content', $thisis_file );
$thisis_file = $thisis_file[ 0 ];

// required for making tables easier
require_once( $thisis_file . 'wp-config.php' );
require_once( $thisis_file . '/wp-includes/pluggable.php');
require_once( ABSPATH . 'wp-admin/includes/file.php' );
require_once( ABSPATH . 'wp-admin/includes/image.php' );

global $wpdb;

class Talan_Script_And_Style_Register{

	private $plugin_url;
	private $plugin_dir = '/talan-portfolio';
	private $js_dir = '/js/';
	private $style_dir = '/css/';

	private $scripts = array();
	private $styles = array();

	public function __construct(){
		$this->plugin_url = plugins_url( );
	}

	public function register(){
		$scripts = false;
		$styles = false;
		if( !empty($this->scripts) ){
			foreach ($this->scripts as $script => $scope) {
				wp_register_script( $script, $this->plugin_url.$this->plugin_dir.$this->js_dir.$script.".js" );
			}
			$scripts=true;
		}
		if( !empty($this->styles) ){
			foreach ($this->styles as $style => $scope) {
				wp_register_style( $style, $this->plugin_url.$this->style_dir.$style.".css" );
			}
			$styles = true;
		}

		return ($styles || $scripts);
	}

	public function enqueue_admin(){
		if( $this->register() ){
			if( !empty($this->scripts) ){
				foreach ($this->scripts as $script => $scope) {
					if( "admin" == $scope )
						wp_enqueue_script( $script );
				}
			}
			if( !empty($this->styles) ){
				foreach ($this->styles as $style => $scope) {
					if( "admin" == $scope)
						wp_enqueue_style( $style );
				}
			}
		} 
	}

	public function enqueue_wp(){
		if( $this->register() ){
			if( !empty($this->scripts) ){
				foreach ($this->scripts as $script => $scope) {
					if( "wp" == $scope )
						wp_enqueue_script( $script );
				}
			}
			if( !empty($this->styles) ){
				foreach ($this->styles as $style => $scope) {
					if( "wp" == $scope)
						wp_enqueue_style( $style );
				}
			}
		}
	}

	public function add_scripts( $file_names ) {
		$this->scripts = $file_names['scripts'];
		$this->styles = $file_names['styles'];	

		add_action('wp_enqueue_scripts', array($this, 'enqueue_wp'));
		add_action('admin_enqueue_scripts', array($this, 'enqueue_admin'));
	}
	
}