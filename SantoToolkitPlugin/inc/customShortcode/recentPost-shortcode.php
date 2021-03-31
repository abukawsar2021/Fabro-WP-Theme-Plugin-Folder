<?php

function santo_recent_post_shortcode($atts){
	
	extract(shortcode_atts(array(
	 'count'=>'3',
	
	
	),$atts));
	
	$santo_recent_post = new WP_Query(array(
	  'post_type'=>'post',
	  'posts_per_page'=> $count,
    'ignore_sticky_posts' => 1,	  
	));
	
	$santo_recent_post_markup='';
    while($santo_recent_post->have_posts()) : $santo_recent_post->the_post();
	$id = get_the_ID();	
	$santo_recent_post_markup.='								  								  
		     <div class="col-lg-4 col-md-6 col-sm-12 recent-post-list-wrapper">								  
				 <a href="'.get_permalink().'">'.get_the_post_thumbnail(get_the_ID(),'img-full').'</a>
				 
				 <h5><a href="'.get_permalink().'">'.get_the_title().'</a></h5>
				 <ul class="recent-post-header list-unstyled inline-block">
					<li>
					   <span class="post-admin">'.get_the_author_posts_link($id).'</span>
					   <span class="post-date">'.get_the_date('F,j,Y').'</span>
					   <span class="post-comments">'.get_comments_number().'</span>
					</li>	
			    </ul>				 
				 <ul class="recent-post-bottom list-unstyled inline-block">
				 '.wpautop(wp_trim_words( get_the_content(), 35)).'
					<li class="post-readmore-btn text-left"><a class="readMore-btn abt-rmbtn" href="'.get_the_permalink($id).'">'.esc_html__('Read More','stock').'</a></li>
								
			   </ul>			   			
			</div>';				
	endwhile;		
	wp_reset_query();		
	return $santo_recent_post_markup;
}
add_shortcode('santo_recent_post','santo_recent_post_shortcode');