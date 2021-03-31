<?php

function santo_work_shortcode($atts){	
	extract(shortcode_atts(array(	
	'count'=>'5',	
	'projectbtn_text'=>'See More',	
	'project_menu_pos'=>'center',	
	'work_column'=>'',	
	'work_masonry'=> 1,	
	'work_menu'=> 1,	
	'work_pagination'=> 1,	
	),$atts));
	
	if(empty($work_column)){
		$def_column ="col-lg-4 col-md-6 col-xs-12";
	}else{
		$def_column =' ';
	}
	
	if($work_masonry == 1){
		$work_masonry ="total-projects-masnry";
	}else{
		$work_masonry =' ';
	}
	
	$rand_num = rand(124534,235698);		
	$santo_work_markup='
		<script type="text/javascript">		
			jQuery(document).ready(function($){
				jQuery(".work-items-list li").on( "click",function() {			  
				  jQuery(".work-items-list li").removeClass("selected");
				  jQuery(this).addClass("selected");
				  var filterValue = $(this).attr("data-filter");
				  jQuery(".project-items-wrapper-'.$rand_num.'").isotope({ filter: filterValue });
				});
			});
			jQuery(window).on("load",function($){	
				jQuery(".project-items-wrapper-'.$rand_num.'").isotope({
					itemSelector: ".single-work-item",
					percentPosition: true,
					masonry: {
						columnWidth:1
					  }
				});			
			});
		</script>';
	$santo_work_markup.='
		<div class="projects-wrapper">';
		if($work_menu == 1){
			$santo_work_markup.='
			  <div class="project-menu-list-wrapper">
				<ul style=" text-align:'.$project_menu_pos.'" class="work-items-list list-unstyled inline-block">
					<li class="selected" data-filter="*"> All</li>';
					$list_item_cat_list = get_terms("work_category");				
					foreach($list_item_cat_list as $cat_list){
						$santo_work_markup.='<li data-filter=".'.$cat_list->slug.'">'.$cat_list->name.'</li>';
					}
					$santo_work_markup.='			
				</ul>
			  </div>';				
		}else{
			$work_menu =' ';
		}
		$santo_work_markup.='		
		  
			<div class="project-items-wrapper-'.$rand_num.' '.$work_masonry.' show-project-'.$count.'">';
			
				if( $work_pagination == 1){
					 $project_query  = new WP_Query(array(
						'posts_per_page'=>$count,
						'post_type'=>'work',
						'paged' =>get_query_var('paged'),
					));	
				}else{
					$project_query  = new WP_Query(array(
						'posts_per_page'=>$count,
						'post_type'=>'work',
					));	
				}
				
					$project_count =0;
					while($project_query->have_posts()) : $project_query->the_post();
					$project_count++;
					
					$post_cat_list_item = get_the_terms(get_the_ID(), 'work_category' );		
					if($post_cat_list_item && !is_wp_error($post_cat_list_item)){
						$work_cat_links = array();
						 foreach($post_cat_list_item as $cat_list_item){
							$work_cat_links[]= $cat_list_item->slug;
						 }
						 $work_category_list = join(" , ", $work_cat_links);
					  
					}
						$santo_work_markup.='
						
							<div style="background-image:url('.get_the_post_thumbnail_url(get_the_ID(),'large').')" class="'.$def_column. ' ' .$work_column. ' single-work-item ' .$work_category_list. ' project-' .$project_count. '">
							 <div class="work-content-wrapper">
								   <h3>'.get_the_title().'</h3>
								   '.wpautop(get_the_excerpt()).'
								   <a class="readMore-btn" href="'.get_the_permalink().'">'.$projectbtn_text.'</a>
								</div>
							</div>';		  				
					endwhile;
					wp_reset_query();
					$santo_work_markup.='
			</div>			
			<div class="work-pagination-wrapper">
			 <div class="container">
			 <div class="row">
			 	<div class="col-md-12">';
				if( $work_pagination == 1){
					$total   = $project_query->max_num_pages;				
					$big = 999999999; // need an unlikely integer			
					if($total > 1){
					$current = max( 1, get_query_var('paged') );
					$santo_work_markup.= paginate_links( array(
							'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format'  => '?paged=%#%',				
							'prev_text' => '<i class ="fa fa-long-arrow-left"></i>',
							'next_text' => '<i class ="fa fa-long-arrow-right"></i>',
							'current' => $current,
							'total'   => $total
						) );
					}				
				}else{
					
				}
			$santo_work_markup.='			
			</div>
			</div>
			</div>
			 </div>';
			$santo_work_markup.='
		</div>
	</div>';	
return $santo_work_markup;		
}
add_shortcode('santo_work','santo_work_shortcode');