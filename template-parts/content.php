	<div id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
		<?php
			if(has_post_thumbnail()) :
		?>
		<div class="article-card-top">
			<?php webnwell_post_thumbnail(); ?>
			
		</div>
		<?php endif; ?>
		<div class="article-card-content">
			<?php
				if ( is_singular() ) :
				the_title( '<h1 class="title-2">', '</h1>' );
				else :
				the_title( '<h4><a class="archive-title-link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				endif;
			?>
			
			<div class="article-meta">
			<div class="article-meta-author-date">
				<?php webnwell_posted_by(); ?>
				<?php webnwell_posted_on(); ?>
				<?php webnwell_tag(); ?>
			</div>				
				<span class="article-comment"> 
					<i class="far fa-comment-dots"></i> 
					<?php
						$comment_num = get_comments_number();
						$comment_text = '';
						if($comment_num <= 1 ){
							$comment_text = __( 'Comment', 'webnwell' );
						} else {
							$comment_text = __( 'Comments', 'webnwell' );
						}
						printf(__( '%1$s %2$s', 'webnwell' ), $comment_num, $comment_text);
					?>
				</span>               
			</div>
			<p>
				<?php 
					if ( is_singular() ) {
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
					} else {
						echo wp_trim_words( get_the_content(), 25 );
					}
					
					// Post page Navigation or Page Navigation
					if(is_single()){
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'webnwell' ),
								'after'  => '</div>',
							)
						);
					}
					
					
				?>
			</p>
			<div class="article-cat">
				<?php echo get_the_category_list( esc_html__( ' ', 'webnwell' ) ); ?>
			</div>
		</div>
	</div><!-- #post-<?php the_ID(); ?> -->


