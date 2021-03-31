<?php
function santo_testimonial_shortcode($atts){
extract(shortcode_atts(array(
         'count'=> 2,
         'loop'=>'true',
         'autoplay'=>'true',
		 'autoplaytimeout'=> 10000,
         'nav'=>'true',
         'dots'=>'true',
         'testimonial_id'=>'true',
),$atts));
	
if($count == 1){
	$testimonial_query = new WP_Query( array('post_type'=>'testimonial','posts_per_page'=> $count,'p'=> $testimonial_id ) );	
}else{
	$testimonial_query = new WP_Query( array('post_type'=>'testimonial','posts_per_page'=> $count ) );	
}

if($count == 1){	
$santo_testimonial_markup='';
}else{	
$santo_testimonial_markup='
<script type="text/javascript">
	jQuery(window).on("load",function(){
		var SantoTestimonial = jQuery(".testimonial-wrapper");
		SantoTestimonial.owlCarousel({
			items:1,
			loop:'.$loop.',
			autoplay:'.$autoplay.',
			autoplaytimeout:'.$autoplaytimeout.',
			nav:'.$nav.',
			dots:'.$dots.',
			nexText:["<i class=\'zmdi zmdi-chevron-left\'></i>","<i class=\'zmdi zmdi-chevron-right\'></i>"],
		});	
	});			
</script>';
}
$santo_testimonial_markup.='
<div id="SantoTestimonial" class="testimonial-wrapper">  
     <div class="row">';
	while($testimonial_query ->have_posts()):$testimonial_query ->the_post();
	$id = get_the_ID();
	$title = get_the_title();
	$content = get_the_content();
	$santo_testimonial_markup.='	
		<div class="single-testimonial-item">
			<div class="content-outer-table">
				<div class="content-inner-table-cell">			
					   <img class="avatar-img" src="'.get_the_post_thumbnail_url($id).'" alt="" />
					   <div class="conten-wrapper">
						<h2>'.$title.'</h2>
						'.wpautop($content).'
					</div>			
				 </div>	
			</div>			
		</div>
	</div>';	
	endwhile;	
$santo_testimonial_markup.='</div>';
wp_reset_query();
return $santo_testimonial_markup;
}
add_shortcode('santo_testimonial','santo_testimonial_shortcode');