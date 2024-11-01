<footer id="colophon" class="site-footer">  
		<section id="footerMain">
      <div class="container">
        <?php 
          if(is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) ):
        ?>
        <div class="footer-top">
          <div class="row">
            <div class="col-md-6 footer_mb_mr">
              <?php
                if(is_active_sidebar( 'footer-1' )){
                  dynamic_sidebar( 'footer-1' );
                }
              ?>
            </div>
            <div class="col-md-6 footer_mb_mr">
              <?php
                if(is_active_sidebar( 'footer-2' )){
                  dynamic_sidebar( 'footer-2' );
                }
              ?>
            </div>                     
          </div>
        </div>  
        <?php endif; ?>      
      </div>
    </section>
		<section id="footerBottom">
      <div class="container">
        <div class="footerBottom-box">
          <div class="row">
            <div class="col-md-12 mt-3">
							<div id="footer-copyright">
              <?php 
                echo get_option_value('footer_copyright_webnwell', 'Proudly powered by © Webnwell'); 
                if(get_option_value('footer_copyrightYear_webnwell') == true): 
              ?>
              <span class="sep"> | </span>
              <?php
                echo the_date( 'Y' );  
                endif;                              
							?>  
              </div>
            </div>
          </div>
        </div>        
      </div>
    </section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>