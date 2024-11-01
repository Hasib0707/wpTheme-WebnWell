<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webnwell
 */

?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
		<?php	if(has_post_thumbnail()) : ?>
			<div class="article-card-top mb-5">
				<?php webnwell_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		<div class="article-card-content">
			<?php
				the_title( '<h1 class="title-2">', '</h1>' );								
			?>
			<div class="article-meta">
				<div class="article-meta-author-date">
					<?php webnwell_posted_by(); ?>
					<?php webnwell_posted_on(); ?>
				</div>
				<?php webnwell_tag(); ?>               
			</div>
			<p>
				<?php 									
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'webnwell' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);
				
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webnwell' ),
							'after'  => '</div>',
						)
					);
					
				?>
			</p>
			<div class="article-cat mt-5">
				<?php echo get_the_category_list( esc_html__( ' ', 'webnwell' ) ); ?>
			</div>
		</div>
	</div><!-- #post-<?php the_ID(); ?> -->


