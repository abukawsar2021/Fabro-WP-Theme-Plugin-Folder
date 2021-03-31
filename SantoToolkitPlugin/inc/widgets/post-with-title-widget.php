<?php
 
class santo_post_with_title_widget extends WP_Widget {
 
    function __construct() {
 
        parent::__construct( 'santo-post-with-title', esc_html__('Santo : Posts With Title','santo' ),array(
		 'description'=> esc_html__('Santo Post With Title Widget','santo'),
		));
		
	}	

    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['post_title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['post_title'] ) . $args['after_title'];
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
 
        $title = ! empty( $instance['post_title'] ) ? $instance['post_title'] : esc_html__( 'Lagest Post', 'santo' );
        $count = ! empty( $instance['count'] ) ? $instance['count'] : 3 ;
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'post_title' ) ); ?>"><?php echo esc_html__( 'Title Name:', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'post_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'post_title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php echo esc_html__( 'Post Number:', 'santo' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" type="number" min="30" rows="10" value="<?php echo esc_attr( $count ); ?>">
        </p>
        <?php
 
    }
 
}

 add_action( 'widgets_init', 'santo_post_with_title');
 

function santo_post_with_title(){
	register_widget( 'santo_post_with_title_widget' );
}




?>