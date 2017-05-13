<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

// BEGIN LOCATIONS
add_action( 'init', 'create_post_type' );
add_action( 'init', 'register_locations' );
function create_post_type() {
  register_post_type( 'project_location',
    array(
    'label' => 'Locations',
    'public' => true,
  )
 );
}
function register_locations() {
  if(function_exists("register_field_group"))
  {
  	register_field_group(array (
  		'id' => 'acf_locations',
  		'title' => 'Locations',
  		'fields' => array (
  			array (
  				'key' => 'field_5917163d9d3bf',
  				'label' => 'Name',
  				'name' => 'name',
  				'type' => 'text',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'formatting' => 'html',
  				'maxlength' => '',
  			),
  			array (
  				'key' => 'field_5917165a9d3c0',
  				'label' => 'Latitude',
  				'name' => 'latitude',
  				'type' => 'number',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'min' => '-90',
  				'max' => 90,
  				'step' => '',
  			),
  			array (
  				'key' => 'field_591716d29d3c1',
  				'label' => 'Longitude',
  				'name' => 'longitude',
  				'type' => 'number',
  				'required' => 1,
  				'default_value' => '',
  				'placeholder' => '',
  				'prepend' => '',
  				'append' => '',
  				'min' => '-180',
  				'max' => 180,
  				'step' => '',
  			),
  		),
  		'location' => array (
  			array (
  				array (
  					'param' => 'post_type',
  					'operator' => '==',
  					'value' => 'project_location',
  					'order_no' => 0,
  					'group_no' => 0,
  				),
  			),
  		),
  		'options' => array (
  			'position' => 'normal',
  			'layout' => 'no_box',
  			'hide_on_screen' => array (
  				0 => 'permalink',
  				1 => 'the_content',
  				2 => 'excerpt',
  				3 => 'discussion',
  				4 => 'comments',
  				5 => 'revisions',
  				6 => 'slug',
  				7 => 'author',
  				8 => 'format',
  				9 => 'featured_image',
  				10 => 'categories',
  				11 => 'tags',
  				12 => 'send-trackbacks',
  			),
  		),
  		'menu_order' => 0,
  	));
  }
}
// END LOCATIONS
