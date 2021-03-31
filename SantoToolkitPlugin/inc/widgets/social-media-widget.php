<?php
 
class santo_about_widget extends WP_Widget {
	
	function __construct() {
 
        parent::__construct(
				'santo_about_widget', // Base ID
				'Santo About Widget', // Name
				array( 'description' => __( 'Santo About Widget', 'santo' ), ) // Args
			);
    }

 
    public function widget( $args, $instance ){
        echo $args['before_widget'];
		
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }

		if ( ! empty( $instance['footer_logo_url'] ) ) {?>
            
			<a href="<?php echo esc_url(home_url(' / '));?>">
			    <img src="<?php echo esc_url($instance['footer_logo_url'])?>" alt="footer-logo" />
			</a>

        <?php }
		
		if ( ! empty( $instance['footer_desc'] ) ) {?>
            
			<div class="footer-desc">
			
			  <?php echo wpautop(esc_html($instance['footer_desc']));?>
			
			</div>

        <?php }
		
       if ( ! empty( $instance['social'] ) ) {?>
            
			<div class="footer-desc">
			
			  <?php echo wpautop(esc_html($instance['footer_desc']));?>
			
			</div>
        <?php }
		if ( ! empty( $instance['social_heading'] ) ) {?>
            
			<p class="social-heading">
			
			  <?php echo esc_html($instance['social_heading']);?>
			
			</p>
        <?php } ?>
	   
	   <ul class="social-icon-lists list-unstyled">
			<?php if(!empty($instance['facebook'])){ ?>
				<li><a  class="facebook" href="<?php echo esc_url($instance['facebook'])?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
			<?php } ?>
			  <?php if(!empty($instance['twitter'])){ ?>
				<li><a  class="tw" href="<?php echo esc_url($instance['twitter'])?>" target="_blank"> <i class="fa fa-twitter"></i> </a></li>
			<?php } ?>
			  <?php if(!empty($instance['gplus'])){ ?>
				<li><a  class="gplus" href="<?php echo esc_url($instance['gplus'])?>" target="_blank"><i class="fa fa-google-plus"></i>  </a></li>
			<?php } ?>
			 <?php if(!empty($instance['ytube'])){ ?>
				<li><a  class="ytube" href="<?php echo esc_url($instance['ytube'])?>" target="_blank"> <i class="fa fa-youtube"></i> </a></li>
			<?php } ?>
			 <?php if(!empty($instance['linkedIn'])){ ?>
				<li><a  class="linkedin" href="<?php echo esc_url($instance['linkedIn'])?>" target="_blank">linkedIn</a></li>
			<?php } ?>
			 <?php if(!empty($instance['pinta'])){ ?>
				<li><a  class="pinta" href="<?php echo esc_url($instance['pinta'])?>" target="_blank">Pintarest</a></li>
			<?php } ?>
			 <?php if(!empty($instance['dribbble'])){ ?>
				<li><a  class="dribble" href="<?php echo esc_url($instance['dribbble'])?>" target="_blank">Dribble</a></li>
			<?php } ?>
			 <?php if(!empty($instance['behance'])){ ?>
				<li><a  class="behance" href="<?php echo esc_url($instance['behance'])?>" target="_blank"> Behance </a></li>
			<?php } ?>
			 <?php if(!empty($instance['vimeo'])){ ?>
				<li><a  class="vimeo" href="<?php echo esc_url($instance['vimeo'])?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
			<?php } ?>
	   </ul>
  
	<?php    
      echo $args['after_widget'];
    }
	 
 
    public function form( $instance ) {
 
        $title 			= ! empty( $instance['title'] ) ? $instance['title'] : '';
        $logo_url 		= ! empty( $instance['footer_logo_url'] ) ? $instance['footer_logo_url'] : '';
        $f_desc 		= ! empty( $instance['footer_desc'] ) ? $instance['footer_desc'] : '';
        $s_heading 		= ! empty( $instance['social_heading'] ) ? $instance['social_heading'] : '';
        $facebook_url 	= ! empty( $instance['facebook'] ) ? $instance['facebook'] : '';
        $twitter_url 	= ! empty( $instance['twitter'] ) ? $instance['twitter'] : '';
        $gplus_url 		= ! empty( $instance['gplus'] ) ? $instance['gplus'] : '';
        $linkedn_url 		= ! empty( $instance['behance'] ) ? $instance['behance'] : '';
        $linkedn_url 		= ! empty( $instance['linkedIn'] ) ? $instance['linkedIn'] : '';
        $ytube_url 		= ! empty( $instance['ytube'] ) ? $instance['ytube'] : '';
        $drible_url 		= ! empty( $instance['dribbble'] ) ? $instance['dribbble'] : '';
        $vim_url 		= ! empty( $instance['vimeo'] ) ? $instance['vimeo'] : '';
		
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'footer_logo_url' ) ); ?>"><?php echo esc_html__( 'Logo Image URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'footer_logo_url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'footer_logo_url' ) ); ?>" type="text" value="<?php echo esc_attr( $logo_url ); ?>">
        </p>
		
		 <p>
           <label for="<?php echo esc_attr( $this->get_field_id( 'footer_desc' ) ); ?>"><?php echo esc_html__( 'Short Description', 'santo' ); ?></label>
           <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'footer_desc' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'footer_desc' ) ); ?>" type="text" value=""><?php echo esc_attr( $f_desc ); ?></textarea>
        </p>
		
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'social_heading' ) ); ?>"><?php echo esc_html__( 'Social Icon Heading', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'social_heading' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'social_heading' ) ); ?>" type="text" value="<?php echo esc_attr( $s_heading ); ?>">
        </p>
		 <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php echo esc_html__( 'Facebook URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_url( $facebook_url ); ?>">
        </p>
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>"><?php echo esc_html__( 'Twitter URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'twitter' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'twitter' ) ); ?>" type="text" value="<?php echo esc_url( $twitter_url ); ?>">
        </p>
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'gplus' ) ); ?>"><?php echo esc_html__( 'Googel  URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'gplus' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'gplus' ) ); ?>" type="text" value="<?php echo esc_url( $gplus_url ); ?>">
        </p>
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'linkedIn' ) ); ?>"><?php echo esc_html__( 'LinkedIn   URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'linkedIn' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'linkedIn' ) ); ?>" type="text" value="<?php echo esc_url( $linkedn_url ); ?>">
        </p>
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'ytube' ) ); ?>"><?php echo esc_html__( 'Youtube  URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'ytube' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'ytube' ) ); ?>" type="text" value="<?php echo esc_url( $ytube_url ); ?>">
        </p>
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>"><?php echo esc_html__( 'Dribble  URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'dribbble' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'dribbble' ) ); ?>" type="text" value="<?php echo esc_url( $drible_url ); ?>">
        </p>
		<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>"><?php echo esc_html__( 'Vimeo  URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'vimeo' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'vimeo' ) ); ?>" type="text" value="<?php echo esc_url( $vim_url ); ?>">
        </p>
			<p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>"><?php echo esc_html__( 'Behance  URL', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'behance' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'behance' ) ); ?>" type="text" value="<?php echo esc_url( $vim_url ); ?>">
        </p>
		
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = $old_instance;
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['footer_logo_url'] = ( !empty( $new_instance['footer_logo_url'] ) ) ? $new_instance['footer_logo_url'] : '';
        $instance['footer_desc'] = ( !empty( $new_instance['footer_desc'] ) ) ? $new_instance['footer_desc'] : '';
        $instance['social_heading'] = ( !empty( $new_instance['social_heading'] ) ) ? $new_instance['social_heading'] : '';
        $instance['facebook'] = ( !empty( $new_instance['facebook'] ) ) ? $new_instance['facebook'] : '';
        $instance['twitter'] = ( !empty( $new_instance['twitter'] ) ) ? $new_instance['twitter'] : '';
        $instance['gplus'] = ( !empty( $new_instance['gplus'] ) ) ? $new_instance['gplus'] : '';
        $instance['linkedIn'] = ( !empty( $new_instance['linkedIn'] ) ) ? $new_instance['linkedIn'] : '';
		$instance['ytube'] = ( !empty( $new_instance['ytube'] ) ) ? $new_instance['ytube'] : '';     
        $instance['dribbble'] = ( !empty( $new_instance['dribbble'] ) ) ? $new_instance['dribbble'] : '';
        $instance['vimeo'] = ( !empty( $new_instance['vimeo'] ) ) ? $new_instance['vimeo'] : '';
        $instance['behance'] = ( !empty( $new_instance['behance'] ) ) ? $new_instance['behance'] : '';
 
        return $instance;
   }
 
}
 add_action( 'widgets_init', 'santo_about_widget_init' );

 function santo_about_widget_init() {
       register_widget( 'santo_about_widget' );
};




?>