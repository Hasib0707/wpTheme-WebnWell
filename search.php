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
              get_template_part( 'template-parts/content', 'search' );

            endwhile;
            else :
              get_template_part( 'template-parts/content', 'none' );
          endif; 
          ?>
          <nav class="pgn mt-5">
            <?php webnwell_pagination(); ?>
          </nav>

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
