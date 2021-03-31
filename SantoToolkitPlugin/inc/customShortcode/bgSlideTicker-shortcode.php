<?php

function santo_slide_ticker_shortcode($atts){
extract(shortcode_atts(array(
    'slide_ticker_img'=>'',    
    'slide_ticker_lists'=>'',
    'height'=>'',
    'title'=>'',
    'btn_link'=>'',
    'btn_link_text'=>'',
),$atts));

$bg_slideticker = wp_get_attachment_image_src($slide_ticker_img,'large');
$slide_ticker_lists = vc_param_group_parse_atts( $atts['slide_ticker_lists'] ); 

$santo_bg_with_btn_markup='
<div style="background-image:url('.$bg_slideticker[0].');  height:'.$height.'px" class="bg-slide-ticker">
	<div class="row">
		<div style="height:'.$height.'px" class="bg-content-wrapper table">
			<div class="bg-content-wrapper table-cell">
				 <ul class="single-slide-ticker list-unstyled">';
				   if(!empty($slide_ticker_lists)){
						 foreach($slide_ticker_lists as $slide_ticker){
							  $santo_bg_with_btn_markup.='<li><h1>'.$slide_ticker['title'].'</h1></li>';
						 }
					 }					 
					 $santo_bg_with_btn_markup.='
				 </ul>
			</div>
		</div>
	</div>
</div>';
return $santo_bg_with_btn_markup;	
}
add_shortcode('santo_slide_ticker','santo_slide_ticker_shortcode');
