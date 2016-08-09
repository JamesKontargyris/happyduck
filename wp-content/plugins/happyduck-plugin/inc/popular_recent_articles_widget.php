<?php

/**
 * Widget to display popular posts
 *
 */
class Popular_Recent_Articles_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_options = array(
			'classname' => 'popular_recent_articles_widget',
			'description' => 'Display popular or recent articles.',
		);
		parent::__construct( 'popular_recent_articles', 'Popular / Recent Articles', $widget_options );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		if($instance['count'] >= 1) {

			echo $args['before_widget'];
			if ( ! empty( $instance['title'] ) ) {
				echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
			}

			$articles = ($instance['show'] == 'popular') ? get_popular_articles( $instance['count'] ) : get_recent_articles( $instance['count'] );

			foreach (  $articles as $article ) { ?>

				<div class="article-extract article-extract--inline">
					<a href="<?php echo get_the_permalink($article->ID); ?>">
						<?php if(has_post_thumbnail($article->ID) && $instance['thumbsize'] != 'none') : ?>
							<img class="article-extract__image" src="<?php echo get_the_post_thumbnail_url($article->ID, $instance['thumbsize']); ?>" alt="<?php echo $article->post_title; ?>">
						<?php endif; ?>
						<span class="article-extract__title text--medium"><?php echo truncate( $article->post_title, 80 ); ?></span>
					</a>
					<div
						class="article-extract__meta"><?php echo date( "j F Y", strtotime( $article->post_date_gmt ) ) ?></div>
				</div>
			<?php }

			echo $args['after_widget'];
		}
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'happyduck' );
		$count = ! empty( $instance['count'] ) ? $instance['count'] : __( '5', 'happyduck' );
		$thumbsize = ! empty( $instance['thumbsize'] ) ? $instance['thumbsize'] : 'small-thumb';
		$show = ! empty( $instance['show'] ) ? $instance['show'] : 'recent';
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'show' ) ); ?>"><?php _e( esc_attr( 'Show:' ) ); ?></label>
			<select id="<?php echo esc_attr( $this->get_field_id( 'show' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'show' ) ); ?>" style="width:100%;">
				<option value="recent" <?php if($show == 'recent') : ?>selected<?php endif; ?>>Recent Articles</option>
				<option value="popular" <?php if($show == 'popular') : ?>selected<?php endif; ?>>Popular Articles</option>
			</select>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>"><?php _e( esc_attr( 'Number of articles to display:' ) ); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'count' ) ); ?>" type="number" value="<?php echo esc_attr( $count ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'thumbsize' ) ); ?>"><?php _e( esc_attr( 'Thumbnail size:' ) ); ?></label>
			<select id="<?php echo esc_attr( $this->get_field_id( 'thumbsize' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'thumbsize' ) ); ?>" style="width:100%;">
				<option value="none" <?php if($thumbsize == 'none') : ?>selected<?php endif; ?>>None</option>
				<option value="small-thumb" <?php if($thumbsize == 'small-thumb') : ?>selected<?php endif; ?>>Small</option>
				<option value="medium-thumb" <?php if($thumbsize == 'medium-thumb') : ?>selected<?php endif; ?>>Medium</option>
				<option value="large-thumb" <?php if($thumbsize == 'large-thumb') : ?>selected<?php endif; ?>>Large</option>
			</select>
		</p>
		<?php
	}

	/**
	 * Processing and sanitising widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = [];
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['count'] = ( ! empty( $new_instance['count'] ) ) ? strip_tags( (int) $new_instance['count'] ) : '';
		$instance['thumbsize'] = ( ! empty( $new_instance['thumbsize'] ) ) ? strip_tags( $new_instance['thumbsize'] ) : '';
		$instance['show'] = ( ! empty( $new_instance['show'] ) ) ? strip_tags( $new_instance['show'] ) : '';

		return $instance;
	}
}

add_action( 'widgets_init', function(){
	register_widget( 'Popular_Recent_Articles_Widget' );
});
