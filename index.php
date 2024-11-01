<?php 
get_header();
get_template_part( 'template-parts/page-title' );
?>


<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;
    endif;
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
              get_template_part( 'template-parts/content', get_post_type() );

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