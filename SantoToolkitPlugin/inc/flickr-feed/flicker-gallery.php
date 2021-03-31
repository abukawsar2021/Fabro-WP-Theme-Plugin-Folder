<?php


 // create custom plugin settings menu
add_action( 'admin_menu', 'santo_flickr_menu' );

/**
 * Register a custom menu page.
 */
function santo_flickr_menu() {
	//create new top-level menu
  add_menu_page( 'Flickr Gallery', 'Flickr Gallery', 'administrator',__FILE__, 'santo_flickr_page' ,plugins_url('/flicker.png', __FILE__ ));
  
  
  //call register settings function
  add_action( 'admin_init',    'register_santo_flickr_feed' );
}

function register_santo_flickr_feed() {
	//register our settings
	register_setting( 'santo-flick-gallery-settings-group', 'santo_flickr_id' );
	register_setting( 'santo-flick-gallery-settings-group', 'santo_flickr_img');
}


function plugin_options_validate($input) {
$newinput['text_string'] = trim($input['text_string']);
if(!preg_match('/^[a-z0-9]{32}$/i', $newinput['text_string'])) {
$newinput['text_string'] = '';
}
return $newinput;
}



function santo_flickr_page() {

?>
<div class="flickr-page-wrap">
<h2>Flickr Gallery Setting</h2>

<form method="post" action="options.php">

 <?php   settings_fields( 'santo-flick-gallery-settings-group' );?>
<?php do_settings_sections( 'santo-flick-gallery-settings-group' ); ?>


    <ul class="form-table">
        <li>
             <strong> 1. Flickr ID </strong><br/> <small> eg: 66956608@N06 </small>
              <td><input type="text" name="santo_flickr_id" value="<?php echo get_option('santo_flickr_id'); ?>" /> </td>
        </li>
         
        <li>  <strong>2. Show Flickr Images. </strong> <br/> <small>(default value 89)</small></th>
             <td><input type="text" name="santo_flickr_img" value="<?php echo get_option('santo_flickr_img'); ?>" /></td>
       </li>
    </ul>
    
    <?php submit_button(); ?>

</form>
		<h4>Explanation:</h4>
		<ul>
        	<li><p>You can check your Flickr ID <a href="http://idgettr.com/" target="_blank">here</a></p></li> 
        	<li><p>You can decide how many images will be displayed. Default value is 9 </p></li>
            <li><p>After you finish set it up, you can use the shortcode to display the flickr feed in post/text widget.
            <br />The shortcode is <b>[santo_flickr_feed]</b>.
            </p></li>
        </ul>
</div>
<?php }


//load all script for flickr feed
function santo_flickr_scripting() {
	wp_enqueue_script( 'flickr-feed' , plugins_url('assets/js/jflickrfeed.min.js',__FILE__), array(),'',true);
	wp_register_style('flickr-feed-style' , plugins_url('assets/css/flicker.css',__FILE__), array(),'1','all');
	wp_enqueue_style('flickr-feed-style');
} 

//only load script if flickr feed shortcode exist
function santo_flickr_gallery_shortcode_exist() {
		add_action( 'wp_footer', 'santo_flickr_js',100 );
		add_action( 'wp_enqueue_scripts', 'santo_flickr_scripting' );
}
add_action( 'init', 'santo_flickr_gallery_shortcode_exist' );


function santo_flickr_js (){?>
	<script type="text/javascript">
	(function($) {
    "use strict"; 
	 $('.flickr-gallery').jflickrfeed({
		 limit: <?php if(get_option('santo_flickr_img') != '') {echo get_option('santo_flickr_img');}else{
			 echo "8";}?>,
		 qstrings: {
	     id: '<?php if(get_option('santo_flickr_id') != '') {echo get_option('santo_flickr_id');}else { echo "52617155@N08"; } ?>'
		 },
		 itemTemplate: '<li>' +'<a data-fancybox="gallery" href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +'</li>'
     });	 		
})(jQuery);						
	</script>
	
	
<?php }


	 


