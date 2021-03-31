<?php
vc_map( array(
  "name" => __( "Santo About", "santo" ),
  "base" => "santo_about",
  "category" => __( "SANTO", "santo"),
  "params" => array(
   array(
	  "type" => "dropdown",
	  "heading" => __( "Select tab item", "santo" ),
	   "param_name" => "count",
	  "std" => __( "3", "santo" ),
	   'value' => array(	
	    __( 'All Items',    "santo"  ) => '10',
		__( '03 Items',   "santo"  ) => '3',
		__( '04 Items',   "santo"  ) => '4',
		__( '05 Items',   "santo"  ) => '5',
		__( '06 Items',   "santo"  ) => '6',
		__( '07 Items',   "santo"  ) => '7',
		__( '08 Items',   "santo"  ) => '8',
		__( '09 Items',   "santo"  ) => '9',
		
	  ),
	  "description" => __( "Select Tab Item", "santo" ),
	 ),

  ),
 ) );
