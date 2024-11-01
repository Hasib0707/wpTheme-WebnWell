<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnwell
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

<div id="comments" class="comments-area pt-5">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<p class="comments-title">
			<i class="fas fa-comments"></i>
			<?php
			$webnwell_comment_count = get_comments_number();
			if ( '1' === $webnwell_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One Comment', 'webnwell' )
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s Comment', '%1$s Comments', $webnwell_comment_count, 'comments title', 'webnwell' ) ),
					number_format_i18n( $webnwell_comment_count )
				);
			}
			?>
		</p><!-- .comments-title -->

		<?php // the_comments_navigation(); ?>

		<ul class="commentlist">
    <?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'callback' => 'webnwell_comments',
    		'avatar_size'=> 60,
			) );
     ?>
		</ul><!-- .comment-list -->

		<div class="nav-comments">
			<?php
				paginate_comments_links(
					array(
						'prev_text'          => __( 'Older comments', 'webnwell' ),
						'next_text'          => __( 'Newer comments', 'webnwell' ),
						'screen_reader_text' => __( 'Comments navigation', 'webnwell' ),
						'aria_label'         => __( 'Comments', 'webnwell' ),
						'class'              => 'comment-navigation',
					)
				);
			?>
		</div>
	<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'webnwell' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	 comment_form();	
	?>

</div><!-- #comments -->
