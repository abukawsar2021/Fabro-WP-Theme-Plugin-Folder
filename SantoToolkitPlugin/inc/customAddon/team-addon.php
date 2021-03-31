<?php
vc_map( array(
  "name" => __( "Santo Team", "santo" ),
  "base" => "santo_team",
  "category" => __( "SANTO", "santo"),
  "params" => array(
   array(
	  "type" => "dropdown",
	  "heading" => __( "Select team number", "santo" ),
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
	  "description" => __( "Select Work Item", "santo" ),
	 ),
	  array(
		  "type" => "textfield",
		  "heading" => __( "All team members url", "santo" ),
		  "param_name" => "all_members_url",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "All team members url", "santo" ),
	),
	 array(
		  "type" => "textfield",
		  "heading" => __( "All team members url text", "santo" ),
		  "param_name" => "all_members_link_text",
		  "value" => __( "All Team Members", "my-text-domain" ),
		  "description" => __( "All team members url text", "santo" ),
		),
  ),
 ) );
