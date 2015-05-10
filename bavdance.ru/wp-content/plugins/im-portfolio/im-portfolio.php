<?php

/*
 * Plugin Name:       Talan Portfolio
 * Plugin URI:        http://talan-online.ru
 * Description:       Плагин портифолио
 * Version:           1.0.0
 * Author:            Игорь Милиенко
 * Author URI:        
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       talan-portfolio
 * Domain Path:       /languages
 */
include 'includes/class-talan-metabox.php';
include 'includes/class-talan-portfolio-constants.php';
include 'includes/class-talan-script-and-style-register.php';
include 'admin/class-talan-portfolio-admin-pages.php';
class Talan_Portfolio {
	public function __construct(){
		add_action("init", array($this, "_register_post_type_projects") );
		add_action("init", array($this, "_register_taxonomy_projects_cat") );

	}

	public  function _register_post_type_projects(){
		$labels = array(
			'name'               => 'Проекты',
			'singular_name'      => 'Проект',
			'menu_name'          => 'Проекты',
			'name_admin_bar'     => 'Проекты', 
			'add_new'            => 'Добавить новый ', 
			'add_new_item'       => 'Добавить новый проект', 
			'new_item'           => 'Новый Проект', 
			'edit_item'          => 'Редактировать проект',
			'view_item'          => 'Просмотреть проект', 
			'all_items'          => 'Все проекты', 
			'search_items'       => 'Искать проекты', 
			'parent_item_colon'  => 'Родительские проекты:', 
			'not_found'          => 'Проекты не найдены', 
			'not_found_in_trash' => 'Проекты не найдены в Мусорке', 
			);
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);
		register_post_type( 'project', $args );
	}

	public function _register_taxonomy_projects_cat(){
		$labels = array(
			'name' 			=> "Категории проектов",
			'singular_name' => 'Категория проектов',
			'all_items' 	=> "Все категории",
			'edit_item' 	=> "Редактировать категорию",
			'view_item' 	=> "Просмотреть категорию",
			'update_item'	=> "Обновить категорию",
			'add_new_item' 	=> "Добавить новую категорию",
			'new_item_name' => "Имя новой категории",
			'parent_item' 	=> "Родительская категория",
			'parent_item_colon' =>"Родительская категория: ",
			'search_items' 	=> "Поиск категорий",
			'popular_items' => null,
			'separate_items_with_commas' => null,
			'add_or_remove_items' => "Добавить или удалить категории",
			'choose_from_most_used' => null,
			'not_found' => "Категории не найдены",
			);

		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => true,
			);

		register_taxonomy("projects_cat", "project", $args);
		
		
	}

	public function render_little_repost(){
		global $post;
		$ch = curl_init();
		echo "<div class='little-repost-buttons'>";
		?>
		<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
			<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir"></div> 
		<?php
		echo "</div>";
	}

	/*
		metaboxes = array(
			array("id"=>"<id>","name"=>"<name>"),
			...
		)
	*/
	public function add_metaboxes( $metaboxes ){
		$metaboxes = Talan_Portfolio_Constants::$metaboxes;
		foreach($metaboxes as $metabox){
				$metabox_instance = new Talan_Metabox( $metabox, array('project') );
		}
	}
}
global $talan;
$talan = new Talan_Portfolio();

$talan->add_metaboxes( $metaboxes );


function tl_resize($url, $width, $height){
	$size = getimagesize($url);
	$actual_width = $size[0];
	$actual_height = $size[1];

	if( ($actual_width / $actual_height) == ( $width / $height) ){
		return "style='width: ".$width."px;height: ".$height."px;'";
	}
	else if(($actual_width / $actual_height) > ( $width / $height) ){
		return "style='height: ".$height."px;'";
	}
	else {
		return  "style='width: ".$width."px;'";
	}
}