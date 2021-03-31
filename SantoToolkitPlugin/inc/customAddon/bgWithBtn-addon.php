<?php
vc_map( array(
  "name" => __( "Santo Bg With Btn", "santo" ),
  "base" => "santo_bg_with_btn",
  "category" => __( "SANTO", "santo"),
	  "params" => array(
		array(
		  "type" => "attach_image",
		  "param_name" => "bg_img",
		  "heading" => __( "Add service image", "santo" ),		 
		  "description" => __( "Add service image", "santo" ),	  
		 ),	
		 array(
		  "type" => "textfield",
		  "heading" => __( "Type Btn Text", "santo" ),
		  "param_name" => "btn_text",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Type btn text", "santo" ),
		),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Type Btn Link Url", "santo" ),
		  "param_name" => "btn_url",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Type btn link url", "santo" ),
		),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Type background height in px", "santo" ),
		  "param_name" => "height",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Type background height in px", "santo" ),
		),
		array(
		  "type" => "textfield",
		  "heading" => __( "Type background title", "santo" ),
		  "param_name" => "title",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Type background title", "santo" ),
		),
		array(
		  "type" => "textarea",
		  "heading" => __( "Type background description", "santo" ),
		  "param_name" => "desc",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Type background description", "santo" ),
		),


	  ),
 ) );