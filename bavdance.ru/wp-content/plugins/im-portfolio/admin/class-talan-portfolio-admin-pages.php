<?php
class Talan_Portfolio_Admin_Pages{
	public function  add_options_page(){
		add_options_page( 'ТНастройки Талан Портфолио', 'Талан портфолио', 'manage_options', 'talan-portfolio-unique-identifier', 'render_options_page' );
	}

	public function render_options_page(){
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo '<div class="wrap">';
		echo '<p>Here is where the form would go if I actually had options.</p>';
		echo '</div>';
	}

	public function __counstruct(){
		add_action('admin_menu', array($this, 'add_options_page'));
	}
}