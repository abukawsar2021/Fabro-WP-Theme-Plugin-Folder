<?php

function santo_slider_shortcode($atts){
extract(shortcode_atts(array(
	 'count'=> 2,
	 'single_bg_img_attach'=> '',	 
	 'hero_bg_title'=> 'Hello we are',	 
	 'hero_bg_content'=> 'Creative',	 
	 'hero_bg_btn_color'=> '#000000',	 
	 'hero_bg_button_url'=> '#',	 
	 'hero_bg_button_url_text'=> 'news',	 
	 'hero_bg_overlay'=> 'yes',	 
	 'hero_bg_overlay_opacity'=> '.5',	 
	 'hero_bg_overlay_opacity_color'=> '#ff00ee',	 
	 'hero_bg_title_content_align'=> 'center',	 
	 'hero_bg_title_align'=> 'left',	 
	 'hero_bg_content_align'=> 'left',	 
	 'height'=>'800',
	 'slider_id'=>'',
	 'loop'=>'true',
	 'autoplay'=>'true',
	 'autoplaytimeout'=> 5000,
	 'nav'=>'true',
	 'dots'=>'true',
	 'content_align'=>'left',
	 'title_align'=>'left',
	 'dot_align'=>'center',
	 'sep_width'=>'1140',
	 'sep_align'=>'center',
	 'bg_attach_position'=>'relative',

),$atts));



if($count == 1){
	$slider_query = new WP_Query(array('post_type'=>'slider','posts_per_page'=> $count, 'p'=> $slider_id));	
}else{
	$slider_query = new WP_Query(array('post_type'=>'slider','posts_per_page'=> $count));
}
if($count == 1){
	$santo_slider_markup = '';
}else{
$santo_slider_markup ='
<script type="text/javascript">
	jQuery(window).on("load",function(){
		var SantoHeroSlider = jQuery("#heroSlider");
		SantoHeroSlider.owlCarousel({
			items:1,
			loop:'.$loop.',
			autoplay:'.$autoplay.',
			autoplaytimeout:'.$autoplaytimeout.',
			nav:'.$nav.',
			dots:'.$dots.',
			nexText:["<i class=\'fa fa-chevron-left\'></i>","<i class=\'fa fa-chevron-right\'></i>"],
		});	
	});';	
$santo_slider_markup.='
var SantoHeroSlider = jQuery("#heroSlider");
	SantoHeroSlider.on("translate.owl.carousel", function(){
			var layer = jQuery("[data-animation]");
			layer.each(function() {
				var anim_name = jQuery(this).data("animation");
				jQuery(this).removeClass("animated " + anim_name).css("opacity", "0");
			});
		});

		jQuery("[data-delay]").each(function () {
			var anim_del = jQuery(this).data("delay");
			jQuery(this).css("animation-delay", anim_del);
		});

		jQuery("[data-duration]").each(function () {
			var anim_dur = jQuery(this).data("duration");
			jQuery(this).css("animation-duration", anim_dur);
		});

		SantoHeroSlider.on("translated.owl.carousel", function () {
			var layer = SantoHeroSlider.find(".owl-item.active").find("[data-animation]");
			layer.each(function () {
				var anim_name = jQuery(this).data("animation");
				jQuery(this).addClass("animated " + anim_name).css("opacity", "1");
			});
		});				
</script>';
}
$santo_slider_markup.='

<div id="heroSlider" class="slider-wrapper">';
while($slider_query ->have_posts()):$slider_query ->the_post();

if($count == 1){
$heroSingle = wp_get_attachment_image_src($single_bg_img_attach,'large');	
$santo_slider_markup.='<div style="background-image:url('.$heroSingle[0].');height:'.$height.'px;"; class="single-hero-item  '.$bg_attach_position.'">';

	if($hero_bg_overlay == 'yes'){
		$santo_slider_markup.='<div style="background-color:'.$hero_bg_overlay_opacity_color.';opacity:'.$hero_bg_overlay_opacity.'" class="herobg-overlay"></div>';
	}
	$santo_slider_markup.='
	<div class="content-outer-table">
		<div class="content-inner-table-cell text-'.$hero_bg_title_content_align.'">
			<div class="container">
				<div class="row">
						<div class="col-md-12">
							 <h2 class="single-bg-title  text-'.$hero_bg_title_align.'">'.$hero_bg_title.'</h2>';
						    $santo_slider_markup.='<div class="single-bg-para text-'.$hero_bg_content_align.'"><h1>'.$hero_bg_content.'</h1></div>
						    <div class="signle-bg-button">';					
								  $santo_slider_markup.='<a href="'.$hero_bg_button_url.''.$hero_bg_button_url_text.'" class="down-arrow-btn" style="background-color:'.$hero_bg_btn_color.'"><i class="fa fa-chevron-down"></i></a>';							
						    $santo_slider_markup.='
						 </div>
						</div>
					</div>
				</div>
			</div>			
		</div>';
}else{
	$santo_slider_markup.='
	<div style="background-image:url('.get_the_post_thumbnail_url().'); height:'.$height.'px;"; class="single-slider-item">';
	$title = get_the_title();
    $content = get_the_content();
	$slider_meta_info = get_post_meta(get_the_ID(),'santo_slider_info',true);
	if(array_key_exists('slider_overlay',$slider_meta_info)){
		$slider_overlay = $slider_meta_info['slider_overlay'];
	}
	if(array_key_exists('overlay_opacity',$slider_meta_info)){
		$overlay_opacity = $slider_meta_info['overlay_opacity'];
	}	
	if(array_key_exists('overlay_opacity_color',$slider_meta_info)){
		$overlay_opacity_color = $slider_meta_info['overlay_opacity_color'];
	}
	if(array_key_exists('title_border',$slider_meta_info)){
		$title_border = $slider_meta_info['title_border'];
	}
	if($slider_overlay == true){
		$santo_slider_markup.='<div style="background-color:'.$overlay_opacity_color.';opacity:'.$overlay_opacity.'" class="slider-overlay"></div>';
	}
	$santo_slider_markup.='
	<div class="content-outer-table">
		<div class="content-inner-table-cell">
			<div class="container">
				<div class="row">
						<div class="col-md-12">
							 <h2 class="slider-title  text-'.$title_align.'" data-animation="fadeOut" data-duration=".5s">'.$title.'</h2>';
							 if($title_border == true){
								 $santo_slider_markup.='<span style="width:'.$sep_width.'px" class="sep"></span>';
							 }
						    $santo_slider_markup.='<div class="slider-para" data-animation="fadeOut" data-duration=".9s">'.$content.'</div>
						<div class="slider-button-group">';					
							if( $slider_meta_info['buttons'] ){
								foreach ( $slider_meta_info['buttons'] as $button ){
									if($button['button_type'] == 'page'){
										 $btn_link = get_page_link($button['btn_page_link']);
									}else{
										$btn_link = $button['btn_ext_link'];
									}
								  $btn_text = $button['btn_text'];
								  $santo_slider_markup.='<a href="'.$btn_link.'" class="down-arrow-btn">'.$btn_text.'</a>';
								}
						    }							
						 $santo_slider_markup.='
						 </div>
					</div>
				</div>
			</div>
		</div>			
	</div>';
   }
$santo_slider_markup.='</div>';		
endwhile;	
$santo_slider_markup.='</div>';
wp_reset_query();
return $santo_slider_markup;
}
add_shortcode('santo_slider','santo_slider_shortcode');