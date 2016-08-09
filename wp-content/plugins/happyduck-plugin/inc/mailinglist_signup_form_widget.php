<?php

class Mailinglist_Signup_Form_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_options = array(
			'classname' => 'mailinglist_signup_form_widget',
			'description' => 'Display the mailing list sign-up form.',
		);
		parent::__construct( 'mailinglist_signup_form', 'Mailing List Sign-up Form', $widget_options );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];

		$additional_classes = trim($instance['classes']);
		if($instance['direction'] == 'horizontal') $additional_classes .= ' signup-form--inline';

//		TODO: update form to point at correct page
		?>

		<div class="signup-form signup-form--padded signup-form--rounded-corners <?php echo $additional_classes; ?>">
			<div class="signup-form__intro text--white">
				<h4 class="text--yellow text--bold margin--none"><?php echo $instance['title']; ?></h4>
				<?php echo $instance['intro']; ?>
			</div>
			<div class="signup-form__fields">
				<div class="signup-form__fieldgroup">
					<label class="text--white" for="name">Your name</label>
					<input type="text" class="input--full-span">
				</div>
				<div class="signup-form__fieldgroup">
					<label class="text--white" for="email">Your email address</label>
					<input type="text" class="input--full-span">
				</div>
				<div class="signup-form__fieldgroup">
					<input type="submit" value="Join" class="btn btn--primary btn--fill-parent">
				</div>
			</div>
		</div>

	<?php echo $args['after_widget'];
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
		$title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Join our Mailing List', 'happyduck' );
		$intro = ! empty( $instance['intro'] ) ? $instance['intro'] : __( 'Receive tips, articles and advice direct from HDHQ to your inbox.', 'happyduck' );
		$direction = ! empty( $instance['direction'] ) ? $instance['direction'] : __( '', 'happyduck' );
		$classes = ! empty( $instance['classes'] ) ? $instance['classes'] : __( '', 'happyduck' );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'intro' ) ); ?>"><?php _e( esc_attr( 'Intro text:' ) ); ?></label>
			<textarea id="<?php echo esc_attr( $this->get_field_id( 'intro' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'intro' ) ); ?>" rows="4" style="width:100%;"><?php echo esc_attr( $intro ); ?></textarea>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'direction' ); ?>"><?php _e( 'Direction:' ); ?></label>
			<select id="<?php echo $this->get_field_id( 'direction' ); ?>" name="<?php echo $this->get_field_name( 'direction' ); ?>">
				<option value="vertical" <?php if($direction == 'vertical') : ?>selected<?php endif; ?>>Vertical</option>
				<option value="horizontal" <?php if($direction == 'horizontal') : ?>selected<?php endif; ?>>Horizontal</option>
			</select>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'classes' ); ?>"><?php _e( 'Additional classes:' ) ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'classes' ); ?>" name="<?php echo $this->get_field_name( 'classes' ); ?>" value="<?php echo esc_attr( $classes ); ?>"/>
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
		$instance['intro'] = ( ! empty( $new_instance['intro'] ) ) ? strip_tags( $new_instance['intro'] ) : '';
		$instance['direction'] = ( ! empty( $new_instance['direction'] ) ) ? strip_tags( $new_instance['direction'] ) : '';
		$instance['classes'] = ( ! empty( $new_instance['classes'] ) ) ? strip_tags( $new_instance['classes'] ) : '';

		return $instance;
	}
}

add_action( 'widgets_init', function(){
	register_widget( 'Mailinglist_Signup_Form_Widget' );
});