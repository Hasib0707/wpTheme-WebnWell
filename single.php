<?php 
get_header(); 
get_template_part( 'template-parts/page-title' );
?>

	<section id="pageBody">
    <div class="container">
      <div class="row">
      <?php
				if(is_active_sidebar( 'sidebar-1' )){
					echo "<div class='col-md-8 py-5'>";
				} else {
					echo "<div class='col-md-8 offset-md-2'>";
				}
          while ( have_posts() ) :
              the_post();
              // Single content for Single Blog
              get_template_part( 'template-parts/content-single', get_post_type() );
              // Short About Author
              get_template_part( 'template-parts/author');
              // Post Navigation
              get_template_part( 'template-parts/post-navigation');

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
          ?>

        </div>
        <?php
          if(is_active_sidebar( 'sidebar-1' )){
            echo "<div class='col-md-3 offset-md-1'>";
            get_sidebar();
            echo "</div>";
          }
        ?>
      </div>
    </div>
  </section>

	<?php get_footer(); ?>

