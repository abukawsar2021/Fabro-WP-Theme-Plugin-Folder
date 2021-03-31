<?php
function santo_team_shortcode($atts){
extract(shortcode_atts(array(      
		 'count'=>'3',
		 'readmorebtn_text'=>'See More',
		 'all_members_url'=>'',
		 'all_members_link_text'=>'All Team Members',
),$atts));
/* $single_team_bg = wp_get_attachment_image_src($team_image,'large');	 */

$santo_team = new WP_Query(array(
 'post_type'=>'team',
 'posts_per_page'=> $count,

));
$santo_team_markup='
<div class="row">';	
		while($santo_team->have_posts()): $santo_team->the_post();
		$santo_team_markup.='						
	    <div class="col-lg-4 col-md-6 col-sm-12">			
			<div class="single-team-item-wrapper">			
				<div class="team-img" style="background-image:url('.get_the_post_thumbnail_url(get_the_ID(),'large').');">					   
				   <div class="team-content-outer table">
					   <div class="team-content-inner table-cell">
						<h2>'.get_the_title().'</h2>
						'.wpautop(get_the_excerpt()).'
						 <a class="readMore-btn" href="'.get_permalink().'">'.$readmorebtn_text.'</a>	
						</div>	
				</div>	
			</div>	
		</div>		
	</div>';					
endwhile;
wp_reset_query();	
if(!empty($all_members_link_text)){
	$santo_team_markup.='<a class="readMore-btn team-members-btn" href="'.$all_members_url.'">'.$all_members_link_text.'</a>';
} 
  '</div>';	
return $santo_team_markup;
}
add_shortcode('santo_team','santo_team_shortcode');

