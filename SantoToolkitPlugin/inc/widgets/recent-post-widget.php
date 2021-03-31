<?php
 
class santo_recent_post_widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct( 'santo-latest-post', esc_html__('Santo : Latest Posts With Image','santo' ),array(
		 'description'=> esc_html__('Santo Latest Post Widget','santo'),
		));
		
	}	
	
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['recent_post_title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['recent_post_title'] ) . $args['after_title'];
        }
?>
        <ul class="recent-post-widget  list-unstyled">
		 
			<?php
			    $count = ! empty( $instance['count'] ) ? $instance['count'] : 5;
				$santo_recent_post = new WP_Query(array(
				  'post_type'=>'post',
				  'posts_per_page'=> $count,
				'ignore_sticky_posts' => 1,	  
				));
				while($santo_recent_post->have_posts()) : $santo_recent_post->the_post();
					$id = get_the_ID();
					?>
					<li class="recent-post-list-wrapper">									  
					   <a href=<?php the_permalink();?>><?php echo get_the_post_thumbnail(get_the_ID(),'img-full');?></a>	
						<div class="rpcontent">
							<h5><a href=<?php the_permalink();?>><?php the_title();?></a></h5>
							<p class="post-date"><?php echo get_the_date('F,j,Y');?></p>
						</div>
					</li>			
					<?php endwhile;	?>
				
		   </ul>
		 <?php echo ($args['after_widget']);?>  

     <?php }
 
    public function form( $instance ) {
 
        $recent_post_title = ! empty( $instance['recent_post_title'] ) ? $instance['recent_post_title'] : esc_html__( 'Recent Post', 'santo' );
        $count = ! empty( $instance['count'] ) ? $instance['count'] : 3 ;
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>"><?php echo esc_html__( 'Title Name:', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'recent_post_title' ) ); ?>" type="text" value="<?php echo esc_attr( $recent_post_title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php echo esc_html__( 'Recent Post Number:', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" type="number" min="30" rows="10" value="<?php echo esc_attr( $count ); ?>">
        </p>
        <?php
 
    }
 
/*     public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 
        return $instance;
    }	 */
}

 add_action( 'widgets_init', 'santo_latest_post');
 

function santo_latest_post(){
	register_widget( 'santo_recent_post_widget' );
}




?>