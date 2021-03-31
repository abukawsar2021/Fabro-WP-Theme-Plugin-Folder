<?php
vc_map( array(
  "name" => __( "Santo Work", "santo" ),
  "base" => "santo_work",
  "category" => __( "SANTO", "santo"),
  "params" => array(
    array(
	  "type" => "dropdown",
	  "heading" => __( "Select work number", "santo" ),
	   "param_name" => "count",
	  "std" => __( "5", "santo" ),
	   'value' => array(	
	    __( 'All Items',    "santo"  ) => '10',
		__( '06 Items',   "santo"  ) => '6',
		__( '07 Items',   "santo"  ) => '7',
		__( '08 Items',   "santo"  ) => '8',
		__( '09 Items',   "santo"  ) => '9',
		
	  ),
	  "description" => __( "Select Work Item", "santo" ),
	 ),	
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable Masonry", "santo" ),
	   "param_name" => "work_masonry",
	  "std" => __( 1, "santo" ),
	  "value" => array(
			__( 'Yes', "santo" ) => 1,
			__( 'No', "santo" ) => 2,	 
		),		
	  "description" => __( "Enable Masonry", "santo" ),
	 ),	 	 
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Select work column", "santo" ),
	   "param_name" => "work_column",
	  "std" => __( "", "santo" ),
	  "value" => array(
			__( '2 Columns', "santo" ) => 'col-lg-6 col-md-6',
			__( '3 Columns', "santo" ) => 'col-lg-4 col-md-6',
			__( '4 Columns', "santo" ) => 'col-lg-3 col-md-6',		 
		),			 
	  "description" => __( "Select Work Item", "santo" ),
	   "dependency"=> array(
			 "element"=>"work_masonry",
			 "value"=> array("2"),		  
		),
	 ),	
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable Work Menu", "santo" ),
	   "param_name" => "work_menu",
	  "std" => __( 1, "santo" ),
	  "value" => array(
			__( 'Yes', "santo" ) => 1,
			__( 'No', "santo" ) => 2,	 
		),		
	  "description" => __( "Enable Work Menu", "santo" ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable Work Pagination", "santo" ),
	   "param_name" => "work_pagination",
	  "std" => __( 1, "santo" ),
	  "value" => array(
			__( 'Yes', "santo" ) => 1,
			__( 'No', "santo" ) => 2,	 
		),		
	  "description" => __( "Enable Work Pagination", "santo" ),
	 ),	 	 
	array(
	  "type" => "textfield",
	  "heading" => __( "Type Read More Btn Text", "santo" ),
	   "param_name" => "projectbtn_text",
	  "value" => __( "See More ", "santo" ),
	  "description" => __( "Type Read More Btn Text", "santo" ),
	 ),		 
	 array(
	  'type' => 'dropdown',
	  'heading' => __( 'Work Menu Position',  "santo" ),
	  'param_name' => 'project_menu_pos',
	  'value' => array(
		__( 'Left',    "santo"  ) => 'left',
		__( 'Center',  "santo"  ) => 'center',
		__( 'Right',   "santo"  ) => 'right',
	  ),
	  "std" => __( "center", "santo" ),
	  "description" => __( "Select Work Menu Position", "santo" )
	 ),	
  ),
 ));
