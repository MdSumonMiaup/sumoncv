<?php 

/**
 * Author Widget ----------------------------------------------------
 */

class Author_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'author_widget', // Base ID
			esc_html__( 'SumonCV Author', 'sumoncv' ), // Name
			array( 'description' => esc_html__( 'A Widget For Author Details', 'sumoncv' ), ) // Args
		);
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */

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

		/*--- Widget Content in html format --- */
		function result_author() { ?>
			<div class="author-widget">
				<div class="author-image">
					<img src="" alt="">
					<?php get_avatar(); ?>
				</div>
				<h4 class="author-name"><?php the_author_posts_link(); ?></h4>
				<div class="widget-content">
					<p>There will be about</p>
				</div>
			</div>
		<?php };
		echo result_author();
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
    register_widget('Author_widget');
});
