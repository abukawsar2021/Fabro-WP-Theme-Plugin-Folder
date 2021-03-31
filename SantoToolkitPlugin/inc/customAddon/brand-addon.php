<?php
vc_map( array(
  "name" => __( "Santo Brand", "santo" ),
  "base" => "santo_brand",
  "category" => __( "SANTO", "santo"),
	  "params" => array(
		array(
		  "type" => "attach_images",
		  "param_name" => "brand_logos",
		  "heading" => __( "Add brand images", "santo" ),		 
		  "description" => __( "Upload Logo Images", "santo" ),	  
		 ),	
		 array(
		  "type" => "textfield",
		  "heading" => __( "Desktop count", "santo" ),
		  "param_name" => "desktop_count",
		  "value" => __( "5", "my-text-domain" ),
		  "description" => __( "Select Logo Slider For Desktop", "santo" ),
		),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Tablet count", "santo" ),
		  "param_name" => "tablet_count",
		  "value" => __( "3", "my-text-domain" ),
		  "description" => __( "Select Logo Slider For Tablet", "santo" ),
		),
		array(
		  "type" => "textfield",
		  "heading" => __( "Mobile count", "santo" ),
		  "param_name" => "mobile_count",
		  "value" => __( "2", "my-text-domain" ),
		  "description" => __( "Select Logo Slider For Mobile", "santo" ),
		),
		array(
		  "type" => "dropdown",
		  "heading" => __( "Enable Loop?", "santo" ),
		  "param_name" => "loop",
		  "std" => __( "true", "santo" ),
		  "value" => array(
			  "Yes" => "true",
			  "No" => "false",
		  ),
		  "description" => __( "Select Loop", "santo" ),
		),
		array(
		  "type" => "dropdown",
		  "heading" => __( "Enable Autoplay?", "santo" ),
		  "param_name" => "autoplay",
		  "std" => __( "true", "santo" ),
		  "value" => array(
			  "Yes" => "true",
			  "No" => "false",
		  ),
		  "description" => __( "Select Autoplay", "santo" ),
		),
		array(
		  "type" => "dropdown",
		  "heading" => __( "Enable Nav?", "santo" ),
		  "param_name" => "nav",
		  "std" => __( "true", "santo" ),
		  "value" => array(
			  "Yes" => "true",
			  "No" => "false",
		  ),
		  "description" => __( "Select Nav", "santo" ),
		),
		array(
		  "type" => "dropdown",
		  "heading" => __( "Enable Dots?", "santo" ),
		  "param_name" => "dots",
		  "std" => __( "true", "santo" ),
		  "value" => array(
			  "Yes" => "true",
			  "No" => "false",
		  ),
		  "description" => __( "Select Dots", "santo" ),
		),
	  ),
 ) );