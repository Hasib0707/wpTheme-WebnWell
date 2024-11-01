<?php
if(get_option_value('page_title_section') == 0 || get_option_value('page_title_section') == ''):
  if(get_option_value('page_title_only') != 1 || get_option_value('bread-crumb') != 1):
?>
<section id="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hero-content entry-header">
          <?php 
            if(get_option_value('page_title_only') == 0 || get_option_value('page_title_only') == '') {
              webnwell_bloginfo();
            }               
          ?>
          <?php if (!is_home() && !is_front_page()): ?>
            <div class="breadCrumb">
              <?php 
                if(get_option_value('bread-crumb') == 0 || get_option_value('bread-crumb') == '') {
                  webnwell_breadcrumb();
                } 
              ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php  
   endif; 
endif;

?>




