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
			
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/content', 'page' );

            endwhile;
            else :
              get_template_part( 'template-parts/content', 'none' );

          endif; 

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
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

	<?php get_footer( ); ?>