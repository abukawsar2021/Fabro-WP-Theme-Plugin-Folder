<?php
vc_map( array(
  "name" => __( "Santo Recent Post", "santo" ),
  "base" => "santo_recent_post",
  "category" => __( "SANTO", "santo"),
	  "params" => array(
   array(
	  "type" => "dropdown",
	  "heading" => __( "Select post item", "santo" ),
	   "param_name" => "count",
	  "std" => __( "3", "santo" ),
	   'value' => array(	
	    __( 'All Posts',  "santo"  ) => '10',
		__( '03 Posts',   "santo"  ) => '3',
		__( '04 Posts',   "santo"  ) => '4',
		__( '05 Posts',   "santo"  ) => '5',
		__( '06 Posts',   "santo"  ) => '6',
		__( '07 Posts',   "santo"  ) => '7',
		__( '08 Posts',   "santo"  ) => '8',
		__( '09 Posts',   "santo"  ) => '9',
		
	  ),
	  "description" => __( "Select Post Item", "santo" ),
	 ),

  ),
 ) );