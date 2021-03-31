<?php 

//flickr feed shortcode
function santo_flickr_feed_shortcode() {

	return '<ul id="flickr-gallery" class="flickr-gallery flickr-feed clearfix"></ul>' ;
}
add_shortcode("santo_flickr_feed","santo_flickr_feed_shortcode");