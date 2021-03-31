<?php
vc_map( array(
  "name" => __( "Santo Slide Ticker", "santo" ),
  "base" => "santo_slide_ticker",
  "category" => __( "SANTO", "santo"),
	  "params" => array(
	  array(
		  "type" => "attach_image",
		  "param_name" => "slide_ticker_img",
		  "heading" => __( "Add ticker image", "santo" ),		 
		  "description" => __( "Add ticker image", "santo" ),	  
		 ),	
		 array(
			'type' => 'param_group',
			'param_name' => 'slide_ticker_lists',
			'params' => array(
				array(
				  "type" => "textfield",
				  "heading" => __( "Type slide ticker title", "santo" ),
				  "param_name" => "title",
				  "value" => __( "", "my-text-domain" ),
				  "description" => __( "Type slide ticker title", "santo" ),
				),
			)
		),
		 array(
		  "type" => "textfield",
		  "heading" => __( "Type background height in px", "santo" ),
		  "param_name" => "height",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Type background height in px", "santo" ),
	    ),
	  ),
  ));