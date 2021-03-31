<?php

function santo_bg_with_btn_shortcode($atts){
extract(shortcode_atts(array(
    'bg_img'=>'',    
    'height'=>'',
    'title'=>'',
    'desc'=>'',
	'btn_text'=>'read more',
	'btn_url'=>'',

),$atts));

$bg_image = wp_get_attachment_image_src($bg_img,'large');

$santo_bg_with_btn_markup='
<div style="background-image:url('.$bg_image[0].'); height:'.$height.'px" class="bg-image-with-btn">
 <div class="bg-content-wrapper table">
	 <div class="bg-content-wrapper table-cell">
	 <h2>'.$title.'</h2>
	 '.wpautop($desc).'
	   <a class="scroll" href="#'.$btn_url.'">'.$btn_text.'</a>
	 </div>
 </div>
</div>';
return $santo_bg_with_btn_markup;	
}
add_shortcode('santo_bg_with_btn','santo_bg_with_btn_shortcode');