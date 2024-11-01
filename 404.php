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
          
          ?>

					<h1 class='title-2 entry-title mb-3'>
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'webnwell' ); ?>
					</h1>

          <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'webnwell' ); ?></p>

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



