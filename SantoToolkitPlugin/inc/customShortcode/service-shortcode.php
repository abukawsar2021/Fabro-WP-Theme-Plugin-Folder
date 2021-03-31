<?php

function santo_service_shortcode($atts){
	extract(shortcode_atts(array(
	'desktop_count'=>'5',
	'tablet_count'=>'3',
	'mobile_count'=>'2',
	'loop'=> 'true',
	'autoplay'=>'true',
	'nav'=>'true',
	'dots'=>'true',	
	'readmorebtn_text'=>'See More',
	),$atts));	
		
	
	
$santo_service_markup='	
<script type="text/javascript">
jQuery(window).on("load",function(){
	var serviceCaroSlider = jQuery(".serviceSlider");
	serviceCaroSlider.owlCarousel({
		items:3,
		loop:'.$loop.',
		autoplay:'.$autoplay.',
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
		},		
		nexText:["<i class=\'zmdi zmdi-chevron-left\'></i>","<i class=\'zmdi zmdi-chevron-right\'></i>"],
	});	
});
</script>';
$santo_service_markup.='
	<div class="row serviceSlider">';
	$service_query = new WP_Query(array(
	    'post_type'=>'service',
	    'posts_per_page'=> $count	   
	));		
	while($service_query->have_posts()): $service_query->the_post();

	$santo_service_markup.='		
			<div  class="single-service-wrapper">
				<div class="service-img" style="background-image:url('.get_the_post_thumbnail_url(get_the_ID(),'large').');">
					<div class="service-content-outer table">
						<div class="service-content-inner table-cell">
						 <h2>'.get_the_title().'</h2>
						 '.wpautop(get_the_excerpt()).'
						  <a class="readMore-btn" href="'.get_permalink().'">'.$readmorebtn_text.'</a>	 
						 </div>
					 </div>
			
		</div>
	</div>';
	$santo_service_markup.='';	
		endwhile;
		wp_reset_query();		
    '</div>';
return $santo_service_markup;	
}
add_shortcode('santo_service','santo_service_shortcode');