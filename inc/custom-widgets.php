<?php 
/**
 * Lastest Posts Widgets ----------------------------------------------------
 */
class Latest_Posts extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'latest_Posts', // Base ID
			esc_html__( 'SumonCV Latest Posts', 'sumoncv' ), // Name
			array( 'description' => esc_html__( 'A Widget For Recent Posts', 'sumoncv' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Latest Posts', 'sumoncv' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title:', 'sumoncv' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function result() { ?>
			<ul class="widget-tabs">
                <!-- Single News Area -->
                                            
				<?php
				$recent_posts = wp_get_recent_posts(array(
					'numberposts' => 4, // Number of recent posts thumbnails to display
					'post_status' => 'publish' // Show only the published posts
				));
				foreach($recent_posts as $post) : ?>
					<li>
						<div class="widget-content">
							<div class="widget-thumb">
								<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo get_the_post_thumbnail($post['ID']); ?></a>
							</div>

							<div class="widget-text">
								<h5><a href="<?php echo get_permalink($post['ID']) ?>"><?php echo get_the_title($post['ID']); ?> </a></h5>
								<span><?php echo get_the_time('j F Y'); ?></span>
							</div>
							<div class="clearfix"></div>
						</div>
					</li>
				<?php endforeach; wp_reset_query(); ?>
				<!-- single-news-area -->
			</ul> <!-- Latest News content -->
		<?php };
		echo result();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget( 'Latest_Posts' );
});


/**
 * Popular Posts Widgets ----------------------------------------------------
 */
class Popular_Posts extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'popular_posts', // Base ID
			esc_html__( 'SumonCV Popular Posts', 'sumoncv' ), // Name
			array( 'description' => esc_html__( 'A Widget For Popular Posts', 'sumoncv' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Popular Posts', 'sumoncv' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Widget Title:', 'sumoncv' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		} 

		/*--- Widget Content in html format --- */
		function result_popular() { ?>
			<ul class="widget-tabs">

				<!-- Single News Area -->
				
				<?php // setPostViews(get_the_ID()); // You should add this code if you don't add this in your singe.php your should call this function anywhere for one time ?> 
				<?php
					// query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=3');
					query_posts(array(
						'meta_key' => 'post_views_count',
						'orderby' => 'meta_value_num',
						'order' => 'DESC',
						'posts_per_page' => '3',
					));
									
					if (have_posts()) : while (have_posts()) : the_post();
					?>
						<li>
							<div class="widget-content">
								<div class="widget-thumb">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								</div>

								<div class="widget-text">
									<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h5>
									<span><?php echo get_the_date('j F Y'); ?></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					<?php
					endwhile; endif;
					wp_reset_query();
				?>
				<!-- single-news-area -->
			</ul> <!-- popular-news-content -->
		<?php };
		echo result_popular();
		echo $args['after_widget'];
	}


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

add_action( 'widgets_init', function(){
    register_widget('Popular_Posts');
});

