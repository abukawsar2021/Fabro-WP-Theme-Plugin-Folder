<?php
vc_map( array(
  "name" => __( "Santo Service", "santo" ),
  "base" => "santo_service",
  "category" => __( "SANTO", "santo"),
	  "params" => array(
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
		  "value" => __( "2", "my-text-domain" ),
		  "description" => __( "Select Slider For Tablet", "santo" ),
		),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Mobile count", "santo" ),
		  "param_name" => "mobile_count",
		  "value" => __( "1", "my-text-domain" ),
		  "description" => __( "Select Slider For Mobile", "santo" ),
		),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Service Loop", "santo" ),
	  "param_name" => "loop",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ), 
	  "description" => __( "Select Service Loop", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Service Dots", "santo" ),
	  "param_name" => "dots",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ),  
	  "description" => __( "Select Service Dots", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Service Autoplay", "santo" ),
	  "param_name" => "autoplay",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ),  
	  "description" => __( "Select Service Autoplay", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Service Nav", "santo" ),
	  "param_name" => "nav",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ), 
	  "description" => __( "Select Service Nav", "santo" )
	 ),

  ),
 ) );