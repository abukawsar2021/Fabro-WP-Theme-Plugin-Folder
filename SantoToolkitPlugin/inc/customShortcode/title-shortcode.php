<?php
function santo_title_shortcode($atts){
	extract(shortcode_atts(array(
	 'title'=> '',
	 'sub_title'=> '',
	 'desc'=> '',	
	 'border_bottom'=> 'true',	
	),$atts));
	$santo_title_markup='
		 <div class="section-title-wrapper"> 
		    <div  class="section-title">
				<h1 class="section-heading">'.$title.'</h1>
				<hr class="divider">						
				'.wpautop($desc).'
				<hr class="divider">
				<h4 class="section-sub-heading">'.$sub_title.'</h4>				
			</div>						
		  </div>
	</div>';			
return 	$santo_title_markup;
}
add_shortcode('santo_title','santo_title_shortcode');