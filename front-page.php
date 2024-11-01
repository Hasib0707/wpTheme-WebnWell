<?php
get_header();
if (!is_page_template( 'page-template/home-page.php' )) :
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
              if(is_front_page(  ) && !is_home(  )){
                get_template_part( 'template-parts/content', 'page' );
              } elseif(is_front_page(  ) && is_home(  )){
                get_template_part( 'template-parts/content' );
              } else {
                get_template_part( 'template-parts/content' );
              }
              

            endwhile;
            else :
              get_template_part( 'template-parts/content', 'none' );

          endif; 
					
					if ( is_front_page(  ) && is_home(  ) ) :
						?>
            <nav class="pgn mt-5">
              <?php webnwell_pagination(); ?>
            </nav>
            <?php
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
  <?php
  else:
    get_template_part( 'page-template/home-page' );
  endif;



 get_footer( ); ?>

