<?php
function santo_brand_shortcode($atts){
	extract(shortcode_atts(array(	
		'brand_logos'=>'',
		'desktop_count'=>'5',
		'tablet_count'=>'3',
		'mobile_count'=>'2',
		'loop'=>'true',
		'autoplay'=>'true',
		'autoplaytimeout'=>'true',
		'nav'=>'true',
		'dots'=>'true',
	),$atts));
$logo_images = explode( ',', $brand_logos );
$santo_brand_slider_markup='
<script type="text/javascript">
jQuery(window).on("load",function($){
	jQuery(".logoSliderWrapper").owlCarousel({
		items:5,
		margin:15,
		loop:'.$loop.',
		autoplay:'.$autoplay.',
		autoplaytimeout:'.$autoplaytimeout.',
		nav:'.$nav.',
		dots:'.$dots.',
		responsive:{
			0:{
				items:'.$mobile_count.',
			},
			600:{
				items:'.$tablet_count.',
			},
			1000:{
				items:'.$desktop_count.',
			}
		}		
	});	
});
</script>';
	$santo_brand_slider_markup.='
	<div class="logoSliderWrapper">';
		foreach($logo_images as $logo_image){
			$single_logo = wp_get_attachment_image_src($logo_image,'large');
			$santo_brand_slider_markup.='
				<div class="single-logo-table">
					<div class="single-logo-table-cell">			
					  <img src="'.$single_logo[0].'" alt="" />			
					</div>
				</div>';
		 }	 
	$santo_brand_slider_markup.='
	</div>';	
return $santo_brand_slider_markup;	
}
add_shortcode('santo_brand','santo_brand_shortcode');