<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package happyduck
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<h3 class="comments__title text--mid-grey text--bold heading--with-border-top is-toggle" data-toggle-items=".comment__container"><?php echo (get_comments_number() == 1) ? '1 Comment' : get_comments_number() . ' Comments'; ?></h3>


	<div class="comment__container">
		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>

			<ul class="comments">
				<?php
				wp_list_comments( [
					'style'      => 'ul',
					'short_ping' => true,
					'type' => 'comment',
					'callback' => 'happyduck_comment',
					'max_depth' => 3,
					'reverse_top_level' => true
				] );
				?>
			</ul><!-- .comment-list -->

				<?php

		endif; // Check for have_comments().


		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="comments__no-comments"><?php esc_html_e( 'Sorry, comments are closed.', 'happyduck' ); ?></p>
			<?php
		endif;

		?>
	</div>
	<?php comment_form(); ?>

</div><!-- #comments -->
