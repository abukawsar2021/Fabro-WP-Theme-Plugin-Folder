<?php

if( ! defined('ABSPATH') ){
	exit;
}

 	// Class started
 	Class Santo_VCExtend_Addon_Class{
 		function __construct(){
 			// we safely integrate with VC with this hook
 			add_action('init', array( $this, 'Santo_Integrate_WithVC'));
 		}

 		public function Santo_Integrate_WithVC() {
			
 			if( ! defined( 'WPB_VC_VERSION' ) ){
				
 				add_action('admin_notices', array( $this, 'Santo_ShowVc_Version_Notice' ));
 				return;
 			}
			
			
 			// visual composer addons			
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/slider-addon.php');	
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/testimonial-addon.php');	
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/work-addon.php');	
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/team-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/brand-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/title-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/service-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/bgWithBtn-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/bgSlideTicker-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/about-addon.php');
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/recentPost-addon.php');	
			require_once( SANTO_PLUGIN_PATH . 'inc/customAddon/heroBg-addon.php');	
 			}


 		// show visual composer version
 		public function Santo_ShowVc_Version_Notice(){
 			$theme_data = wp_get_theme();
 			echo '
	 			<div class="notice notice-warning">
				    <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
				</div>
 			';
 		}
		
		
		
		
		
 	}

// Finally initialize code
new Santo_VCExtend_Addon_Class();






