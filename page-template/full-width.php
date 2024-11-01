<?php
/*
*
Template Name: Full Width
*/

get_header();
get_template_part( 'template-parts/page-title' );
?>

	<section id="pageBody">
    <div class="container">
      <div class="row">
				<div class='col-md-10 offset-md-1'>
				
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/content', 'page' );

            endwhile;
            else :
              get_template_part( 'template-parts/content', 'none' );
          endif; 
          
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
          ?>

        </div>
      </div>
    </div>
  </section>

	<?php get_footer( ); ?>