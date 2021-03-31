<?php
vc_map( array(
  "name" => __( "Santo Title", "santo" ),
  "base" => "santo_title",
  "category" => __( "SANTO", "santo"),
  "params" => array(
    array(
	  "type" => "textfield",
	  "heading" => __( "Type Title Name", "santo" ),
	   "param_name" => "title",
	  "value" => __( " ", "santo" ),
	  "description" => __( "Type title name", "santo" ),
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Type Sub Title Name", "santo" ),
	   "param_name" => "sub_title",
	  "value" => __( " ", "santo" ),
	  "description" => __( "Type sub title name", "santo" ),
	 ),
    array(
	  "type" => "textarea",
	  "heading" => __( "Type description name", "santo" ),
	   "param_name" => "desc",
	  "value" => __( " ", "santo" ),
	  "description" => __( "Type description", "santo" ),
	 ),
   array(
	  "type" => "textfield",
	  "heading" => __( "Type border width", "santo" ),
	   "param_name" => "sec_border",
	  "value" => __( " ", "santo" ),
	  "description" => __( "Type border width", "santo" ),
	 ),	
    array(
	  "type" => "dropdown",
	  "heading" => __( "Type border position", "santo" ),
	  "param_name" => "border_bottom",
	  'value' => array(
			__( 'Yes', 'santo' ) => 1,
			__( 'No', 'santo' ) => 2,
        ),		
	  "description" => __( "Type border position", "santo" ),
	 ),	 		 
  ),
 ));

