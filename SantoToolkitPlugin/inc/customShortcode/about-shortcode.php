<?php
function santo_about_tab_shortcode($atts){
 extract(shortcode_atts(array(
 	'count'=>'3',
	
 ),$atts));
 
  $rand_num = rand(25416 , 258632);

  $santo_about_tab_markup='
<div class="about-tab-wrapper">
         <div class="container">
                <div class="row">
                    <div class="col-lg-12">                       
                        <div class="tab-content" id="pills-tabContent">';
						$tab_counter = 0;
						$about_tab_list = get_terms("about_category");
						foreach($about_tab_list as $tab_list):
						$tab_counter++;
							if($tab_counter == 1){
								$tab_counter = "active";
							}
						$santo_about_tab_markup.='	
                            <div class="tab-pane fade show '.$tab_counter.'" id="pills-'.$tab_list->slug.'" role="tabpanel" aria-labelledby="pills-'.$tab_list->slug.'-tab">';
                                
								$about_tab_query  = new WP_Query(array(
								 'post_type'=>'about',
								 'posts_per_page'=>$count,								 								 
								  'tax_query'=>array(
								    array(									 
									   'taxonomy'=>'about_category',
									   'field'=>'slug',
									   'terms'=>$tab_list->slug,									 
									),								  
								  ),
								));
							$post_count = 0;
							while($about_tab_query->have_posts()): $about_tab_query->the_post();	
							$post_count++;;
								$santo_about_tab_markup.='
								<div class="content-outer-wrapper table">
                                    <div class="content-inner-wrapper table-cell">
                                    <div class="row">
										<div class="about-left-content col-lg-6 col-xs-12">									
											<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
											'.wpautop(get_the_content()).'
											<a class="readMore-btn abt-rmbtn" href="'.get_permalink().'"> Read More </a>
										</div>	
										<div class="col-lg-6 col-xs-12 ' .$tab_list->slug.'-'. $rand_num.' ">';
									
										$tab_meta_info = get_post_meta(get_the_ID(),'santo_about_tabs_info',true);
										
										 if(array_key_exists('single_abt_image',$tab_meta_info)){
											 $single_abt_image =  $tab_meta_info['single_abt_image'];
										 }
										 if(array_key_exists('single_abt_slider',$tab_meta_info)){
											 $single_abt_slider =  $tab_meta_info['single_abt_slider'];
										 }
										 if(array_key_exists('single_abt_video',$tab_meta_info)){
											 $single_abt_video =  $tab_meta_info['single_abt_video'];
										 }
										  if(array_key_exists('single_abt_fb_img',$tab_meta_info)){
											 $single_abt_fb_img =  $tab_meta_info['single_abt_fb_img'];
										 }

										 if(get_post_type( get_the_ID() ) == 'about'  && get_post_format() == "image"){
											 
											  if( !empty($single_abt_image)){
												  if($single_abt_image_attach = wp_get_attachment_image_src( $single_abt_image, 'full' )){
													  $single_abt_slider_img_attach_url = wp_get_attachment_image_src( $single_abt_image, 'full' );
													  $santo_about_tab_markup.='<a id="aboutSingleImage" data-fancybox data-width="1170" data-height="800" href="'.$single_abt_slider_img_attach_url[0].'"><img src="'.$single_abt_image_attach[0].'"alt="'.get_the_title().'"></a>';
												 }
											  }

											  elseif(has_post_thumbnail()){
													 $santo_about_tab_markup.='<img src="'.get_the_post_thumbnail_url(get_the_ID(),'large').'"alt="'.get_the_title().'">';
												   }
										}								
										elseif(get_post_type( get_the_ID() ) == 'about' && get_post_format() == "gallery"){
												  $santo_about_tab_markup.='<div class="abtSingleSlider d-none d-sm-block d-md-block d-lg-block' .$tab_list->slug.'-'. $rand_num.'">';
											 
													if( ! empty( $single_abt_slider ) ) {

													  $single_abt_slider_img_ids = explode( ',', $single_abt_slider );

													  foreach ( $single_abt_slider_img_ids as $single_abt_slider_img_id ) {
														$single_abt_slider_img_attach = wp_get_attachment_image_src( $single_abt_slider_img_id, 'full' );	
														 $single_abt_slider_img_attach_url = wp_get_attachment_image_src( $single_abt_slider_img_id, 'full' );
														$santo_about_tab_markup.='
														<div class="single-slide">														
														      <a class="gallery_slider" data-fancybox="gallery" href="'.$single_abt_slider_img_attach_url[0].'"><img src="'.$single_abt_slider_img_attach[0].'" alt="'.get_the_title().'" /></a>
														</div>';
													  }
													}																						 
												  $santo_about_tab_markup.='</div>';												
										}												
										elseif(get_post_type( get_the_ID() ) == 'about' && get_post_format() == "video"){
											 if( !empty($single_abt_video)){	
												$santo_about_tab_markup.='<div class="row">												
													<div class="col-md-12 embed-responsive embed-responsive-16by9">
														<div class="video-wrapper">															
															<a data-fancybox href="'.$single_abt_video.'"><iframe data-fancybox="video" width="560" height="315" src="'.$single_abt_video.'"  allowfullscreen></iframe>
															<span class="videoBtn"><i class="fa fa-play"></i></span></a>

														</div>														
													 </div>
												 </div>';
										}		}								
										$santo_about_tab_markup.='</div>';
										
										$santo_about_tab_markup.='
										</div>									
                                    </div>
                                </div>'; 								
							endwhile;
							wp_reset_query();							
						$santo_about_tab_markup.='	
                            </div>';
							
							endforeach;	

                         $santo_about_tab_markup.='	
                        </div>
						<ul class="nav site-tab-nav" id="pills-tab" role="tablist">';
							$tab_counter = 0;
							$about_tab_list = get_terms("about_category");
							foreach($about_tab_list as $tab_list):
							$tab_counter++;
							if($tab_counter == 1){
								$tab_counter = "active";
							}
							 $santo_about_tab_markup.='						 
								<li class="nav-item">
									<a class="nav-link '.$tab_counter.'" id="pills-'.$tab_list->slug.'-tab" data-toggle="pill"
									   href="#pills-'.$tab_list->slug.'" role="tab" aria-controls="pills-'.$tab_list->slug.'"
									   aria-selected="true">'.$tab_list->name.'</a>
								</li>';
							endforeach;	
								
								
								$santo_about_tab_markup.='							
                        </ul>
						
                    </div>
                </div>
             </div>
           </div>'; 
$santo_about_tab_markup.='';
		
return $santo_about_tab_markup;			
}	
add_shortcode('santo_about','santo_about_tab_shortcode');
