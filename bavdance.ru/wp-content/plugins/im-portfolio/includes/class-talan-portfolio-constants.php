<?php
/* Constants */
class Talan_Portfolio_Constants{
	public static $metaboxes = array(
			array(
				'id'=>"tl_common_square", 
				'name'=>'Общая площадь'
			),
			array(
				'id'=>"tl_flourness", 
				'name'=>'Этажность'
			),
			array(
				'id'=>"tl_building_stage", 
				'name'=>'Этап строительства'
			),
			array(
				'id'=>"price", 
				'name'=>'Цена',
				'forbidden' => true
			),
			array(
				'id'=>"address", 
				'name'=>'Адрес'
			),
			array(
				'id'=>"tl_bonus", 
				'name'=>'Акция'
			),
			array(
				'id'=>"tl_note", 
				'name'=>'Примечание',
				'forbidden' => true
			),
			array(
				'id' => 'uploader',
				'name' => "Загрузка планов"
				)
		);

	public static $styles_scripts = array(
		'scripts' => array(
			'portfolio-single-slider' => 'wp',
			'portfolio-uploader-script' =>'admin'),

		'styles' => array(),
		); 
}