<?php
vc_map( array(
  "name" => __( "Santo Testimonial", "santo" ),
  "base" => "santo_testimonial",
  "category" => __( "SANTO", "santo"),
  "params" => array(
  array(
	  "type" => "textfield",
	  "heading" => __( "Type testimonial number", "santo" ),
	   "param_name" => "count",
	  "value" => __( "2", "santo" ),
	  "description" => __( "Select Testimonial Item", "santo" )
	 ),	 
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Select testimonial you want to show", "santo" ),
	  "param_name" => "testimonial_id",
	  "value" => santo_testimonial_list(),
	   "description" => __( "Select slider", "stock" ),
	   "dependency" => array(
	    "element"=>"count",
	    "value"=> array("1"),
	  ), 
	 ),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Testimonial Loop", "santo" ),
	  "param_name" => "loop",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ), 
	   "dependency" => array(
	    "element"=>"count",
	    "value"=> array("2","3","4","5","6"),
	  ), 
	  "description" => __( "Choose text color", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Testimonial Dots", "santo" ),
	  "param_name" => "dots",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ), 
	   "dependency" => array(
	    "element"=>"count",
	    "value"=> array("2","3","4","5","6"),
	  ), 
	  "description" => __( "Select Testimonial Dots", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Testimonial Autoplay", "santo" ),
	  "param_name" => "autoplay",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ), 
	   "dependency" => array(
	    "element"=>"count",
	    "value"=> array("2","3","4","5","6"),
	  ), 
	  "description" => __( "Select Testimonial Autoplay", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Testimonial Nav", "santo" ),
	  "param_name" => "nav",
	  "std" => __( "true", "santo" ),
	  "value" => array(
	    'Yes'=>'true',
	    'No'=>'false',
	  ), 
	   "dependency" => array(
	    "element"=>"count",
	    "value"=> array("2","3","4","5","6"),
	  ), 
	  "description" => __( "Select Testimonial Nav", "santo" )
	 ),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Testimonial autoplaytimeout", "santo" ),
	  "param_name" => "autoplaytimeout",
	  "std" => __( "5000", "santo" ),
	  "value" => array(
	    '15 Second / 15000 milisecond'=> '15000',
	    '10 Second / 10000 milisecond'=> '10000',
	    '5 Second / 5000 milisecond'=> '5000',
	    '4 Second / 4000 milisecond '=> '4000',
	    '3 Second / 3000 milisecond'=> '3000',
	    '2 Second / 2000 milisecond'=> '2000',
	    '1 Second / 1000 milisecond'=> '1000',	    
	  ), 
	   "dependency" => array(
	    "element"=>"count",
	    "value"=> array("2","3","4","5","6"),
	  ), 
	  "description" => __( "Select Testimonial Nav", "santo" )
	 ),
	 array(
		'type' => 'dropdown',
		'heading' => __( 'Title position', 'santo' ),
		'param_name' => 'title_align',
		'value' => array(
			__( 'Center', 'stock' ) => 'center',
			__( 'Left', 'stock' ) => 'left',
			__( 'Right', 'stock' ) => 'right',
		),
		'description' => __( 'Select title position', 'santo' ),
		'std' => 'center',
		),	 				


  )
 ) );
