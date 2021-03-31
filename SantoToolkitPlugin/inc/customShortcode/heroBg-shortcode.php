<?php

function santo_hero_bg_shortcode($atts){
extract(shortcode_atts(array(
	 'hero_bg_img'=>'',
	 'herobg_title'=>'',
	 'herobg_content'=>'',
	 'height'=>'800',
	 'content_align'=>'left',
	 'title_align'=>'left',
	 'dot_align'=>'center',
	 'sep_width'=>'1140',
	 'sep_align'=>'center',	 
	 'bg_attach_position'=>'',

),$atts));

$heroBg_image = wp_get_attachment_image_src($hero_bg_img,'large');
$santo_hero_bg_markup='
<div id="heroBg" class="heroBg-wrapper">
	<div style="background-image:url('.$heroBg_image[0].'); height:'.$height.'px;"; class="single-hegoBG-item">
	<h1>'.$herobg_title.'</h1>
	'.wpautop($herobg_content).'
	</div>';	
'</div>';

return $santo_hero_bg_markup;
}
add_shortcode('santo_hero_bg','santo_hero_bg_shortcode');