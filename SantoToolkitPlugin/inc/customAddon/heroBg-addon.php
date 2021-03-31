<?php
vc_map( array(
  "name" => __( "Santo Hero Bg", "santo" ),
  "base" => "santo_hero_bg",
  "category" => __( "SANTO", "santo"),
  "params" => array(
  array(
	  "type" => "attach_image",
	  "heading" => __( "Attach hero Image", "santo" ),
	   "param_name" => "hero_bg_img",
	  "value" => __( "", "santo" ),
	  "description" => __( "Hero Background Image", "santo" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Type hero Title", "santo" ),
	   "param_name" => "herobg_title",
	  "value" => __( "", "santo" ),
	  "description" => __( "Hero Background Title", "santo" )
	 ),
	  array(
	  "type" => "textarea",
	  "heading" => __( "Attach hero Image", "santo" ),
	   "param_name" => "herobg_content",
	  "value" => __( "", "santo" ),
	  "description" => __( "Hero Background Content", "santo" )
	 ),	 	
	array(
	  "type" => "dropdown",
	  "heading" => __( "Background Attachment Position", "santo" ),
	  "param_name" => "bg_attach_position", 
	   "std" => __( "fixed", "santo" ),
	  'value' => array(
		__( 'Fixed', 'santo' ) => 'fixed',
		__( 'Relative', 'santo' ) => 'relative',
	  ), 
	  "description" => __( "Select Hero Image Bg Position", "santo" )
	),	 
	array(
	  "type" => "textfield",
	  "heading" => __( "Type slider height", "santo" ),
	   "param_name" => "height",
	  "value" => __( "800", "santo" ),
	  "description" => __( "Select Slider Height", "santo" )
	 ),
	array(
	  "type" => "textfield",
	  "heading" => __( "Type slider border width", "santo" ),
	   "param_name" => "sep_width",
	  "value" => __( "1140", "santo" ),
	  "description" => __( "Select Slider Border Width", "santo" )
	 ),
  )
 ) );
