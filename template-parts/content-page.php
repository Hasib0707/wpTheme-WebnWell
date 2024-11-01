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
				
					// Need to Improve
					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webnwell' ),
							'after'  => '</div>',
						)
					);
					
				?>
			</p>
		</div>
	</div><!-- #post-<?php the_ID(); ?> -->


