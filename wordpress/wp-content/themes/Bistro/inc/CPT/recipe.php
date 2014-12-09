<?php

// Register Custom Post type

$recipes = new CPT('recipe', array(
    'supports' => array('title', 'editor', 'thumbnail','comments'),
     'has_archive'         => true,
     'publicly_queryable'  => true,
     'capability_type'     => 'post'
));

// define the columns to appear on the admin edit screen

$recipes->columns(array(
    'cb' 	  => '<input type="checkbox" />',
    'title'   => __('Заголовок'),
    'icon' 	  => __('Фото'),
    'type'    => __('Рубрика'),
    'cuisine' => __('Кухня'),
    'date' 	  => __('Дата')
));

// Set post type Dashicon

$recipes->menu_icon("dashicons-carrot");

// Register Taxonomy

$recipes->register_taxonomy(array(
    'taxonomy_name' => 'type',
    'singular' 		=> 'Рубрику',
    'plural' 		=> 'Рубрики',
    'query_var'     => true,
    'rewrite'       => array( 'slug' => 'type' ),
));

$recipes->register_taxonomy(array(
    'taxonomy_name' => 'cuisine',
    'singular' 		=> 'Кухню',
    'plural' 		=> 'Кухни',
     'query_var'    => true,
    'rewrite'       => array( 'slug' => 'cuisines' ),
));


require_once dirname( __FILE__ ) . '/custom-thumbnail.php';

new Featured_Image_Metabox_Customizer(array(
	'post_type'     => 'recipe',
	'metabox_title' => __( 'Блюдо фото', 'fabthemes' ),
	'set_text'      => __( 'Установите фото для Блюда', 'fabthemesg' ),
	'remove_text'   => __( 'Удалить фото', 'fabthemes' )
));