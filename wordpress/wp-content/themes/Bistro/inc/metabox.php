<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_recipe_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_recipe_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$meta_boxes['recipe_metabox'] = array(
		'id'         => 'recipe_metabox',
		'title'      => __( 'Рецепт детали', 'cmb' ),
		'pages'      => array( 'recipe', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(

			array(
				'name'  => __( 'Время', 'cmb' ),
				'desc'  => __( 'Время для приготовления.', 'cmb' ),
				'id'    => $prefix . 'recipe_time',
				 'type' => 'duration'
			),
			array(
				'name'  => __( 'Recipe Serving', 'cmb' ),
				'desc'  => __( 'Number of serving', 'cmb' ),
				'id'    => $prefix . 'recipe_serving',
				'type'  => 'text_small',
			),
			array(
				'name'  => __( 'Рецепт Видео', 'cmb' ),
				'desc'  => __( 'Введите ссылку на видео рецепта', 'cmb' ),
				'id'    => $prefix . 'recipe_video',
				'type'  => 'oembed',
			),

			array(
				'name'    => __( 'Ингредиенты', 'cmb' ),
				'desc'    => __( 'Добавить ингредиенты в виде списка', 'cmb' ),
				'id'      => $prefix . 'recipe_list',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),

			array(
				'name'    => __( 'Описание приготовления', 'cmb' ),
				'desc'    => __( 'Введите инструкцию по приготовлению.', 'cmb' ),
				'id'      => $prefix . 'recipe_step',
				'type'    => 'wysiwyg',
				'options' => array( 'textarea_rows' => 5, ),
			),


		)
	);

	// Add other metaboxes as needed

	return $meta_boxes;
}

