<?php
vc_map( array(
  "name" => __( "Santo Slider and Hero Image", "santo" ),
  "base" => "santo_slider",
  "category" => __( "SANTO", "santo"),
  "params" => array(
  array(
	  "type" => "textfield",
	  "heading" => __( "Type slider number or Type One(1) for Hero Image", "santo" ),
	   "param_name" => "count",
	  "value" => __( "2", "santo" ),
	  "description" => __( "Select Slider Item", "santo" )
	 ),	 
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Select Single Hero you want to show", "stock" ),
	  "param_name" => "slider_id",
	  "value" => santo_hero_slider_list(),
	  "description" => __( "Select Single Hero", "stock" ),
	  "dependency" =>array(
	     "element"=>"count",
	     "value"=> array("1"),
	  ),
	 ),
	array(
		  "type" => "attach_image",
		  "heading" => __( "Attch Background Image", "santo" ),
		  "param_name" => "single_bg_img_attach", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Attch Single Hero Bg Image", "santo" )
	   ),
	   
	  array(
		  "type" => "dropdown",
		  "heading" => __( "Hero Background Overlay", "santo" ),
		  "param_name" => "hero_bg_overlay",
		  'value' => array(
			__( 'Yes', 'stock' ) => 'yes',
			__( 'No', 'stock' ) => 'no',
		   ),
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Hero Background Overlay", "santo" )
	   ),
		array(
		  "type" => "textfield",
		  "heading" => __( "Hero Background Overlay Opacity", "santo" ),
		  "param_name" => "hero_bg_overlay_opacity", 
		  "std" => "", 
		   "dependency" => array(
			"element"=>"hero_bg_overlay",
			"value"=> array("yes"),
		  ), 
		  "description" => __( "Hero Background Overlay Opacity", "santo" )
	   ), 
	   array(
		  "type" => "colorpicker",
		  "heading" => __( "Hero Background Overlay Opacity Color", "santo" ),
		  "param_name" => "hero_bg_overlay_opacity_color", 
		   "std" => "", 
		   "dependency" => array(
			"element"=>"hero_bg_overlay",
			"value"=> array("yes"),
		  ), 
		  "description" => __( "Hero Background Overlay Opacity Color", "santo" )
	   ), 	   
	 array(
		  "type" => "textfield",
		  "heading" => __( "Type Hero Background Title", "santo" ),
		  "param_name" => "hero_bg_title", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Type Hero Background Title", "santo" )
	   ),
	    array(
		  "type" => "textarea",
		  "heading" => __( "Type Hero Background Content", "santo" ),
		  "param_name" => "hero_bg_content", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Type Hero Background Content", "santo" )
	   ),
	    array(
		  "type" => "textfield",
		  "heading" => __( "Type Hero Background Button Text", "santo" ),
		  "param_name" => "hero_bg_btn_text", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Type Hero Background Button Text", "santo" )
	   ),
	    array(
		  "type" => "textfield",
		  "heading" => __( "Type Hero Background Button Url", "santo" ),
		  "param_name" => "hero_bg_btn_url", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Type Hero Background Button Url", "santo" )
	   ),
	    array(
		  "type" => "textfield",
		  "heading" => __( "Type Hero Background Button Url Text", "santo" ),
		  "param_name" => "hero_bg_btn_url_text", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Type Hero Background Button Url Text", "santo" )
	   ),
	    array(
		  "type" => "colorpicker",
		  "heading" => __( "Hero Btn Color", "santo" ),
		  "param_name" => "hero_bg_btn_color", 
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Hero Btn Color", "santo" )
	   ),
	   array(
		  "type" => "dropdown",
		  "heading" => __( "Title position", "santo" ),
		  "param_name" => "hero_bg_title_align", 
		  "std" => "left", 
		  'value' => array(
			__( 'Center', 'stock' ) => 'center',
			__( 'Left', 'stock' ) => 'left',
			__( 'Right', 'stock' ) => 'right',
		   ),
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Hero Bg Title Position", "santo" )
	   ),
	   array(
		  "type" => "dropdown",
		  "heading" => __( "Content position", "santo" ),
		  "param_name" => "hero_bg_content_align", 
		  "std" => "left", 
		  'value' => array(
			__( 'Center', 'stock' ) => 'center',
			__( 'Left', 'stock' ) => 'left',
			__( 'Right', 'stock' ) => 'right',
		   ),
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Hero Bg Content Position", "santo" )
	   ),
		
	 array(
		  "type" => "dropdown",
		  "heading" => __( "Background Attachment Position", "santo" ),
		  "param_name" => "bg_attach_position", 
		   "std" => __( "relative", "santo" ),
		  'value' => array(
			__( 'Fixed', 'santo' ) => 'fixed',
			__( 'Relative', 'santo' ) => 'relative',
		  ),
		   "dependency" => array(
			"element"=>"count",
			"value"=> array("1"),
		  ), 
		  "description" => __( "Select Hero Image Bg Position", "santo" )
		),	 
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Slider Loop", "santo" ),
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
	  "heading" => __( "Slider Dots", "santo" ),
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
	  "description" => __( "Select Slider Dots", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Slider Autoplay", "santo" ),
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
	  "description" => __( "Select Slider Autoplay", "santo" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Slider Nav", "santo" ),
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
	  "description" => __( "Select Slider Nav", "santo" )
	 ),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Slider autoplaytimeout", "santo" ),
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
	  "description" => __( "Select Slider Nav", "santo" )
	 ),
	 array(
		'type' => 'dropdown',
		'heading' => __( 'Title position', 'stock' ),
		'param_name' => 'title_align',
		'value' => array(
			__( 'Center', 'stock' ) => 'center',
			__( 'Left', 'stock' ) => 'left',
			__( 'Right', 'stock' ) => 'right',
		),
		 "dependency" => array(
	    "element"=>"count",
	    "value"=> array("2","3","4","5","6"),
	  ), 
		'description' => __( 'Select title position', 'santo' ),
		'std' => 'center',
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
