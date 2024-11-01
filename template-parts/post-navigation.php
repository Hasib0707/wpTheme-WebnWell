<div class="row">
  <?php
  if(get_previous_post()):
    $previous_post = get_previous_post();
    $nav_post_ID = $previous_post->ID;										
                 
  ?>

  <div class="col-md-6">
    <div class="next-prev-article">
      <div class="next-prev-article-left">
        <?php webnwell_prev_post_thumbnail(); ?>
      </div>
      <div class="next-prev-article-content">
      <p class="sub__heading__article"><?php esc_html__('Previous Post', 'webnwell'); ?></p>
        <p><a href="<?php echo esc_url( $previous_post->guid); ?>" class="title-link-2"><?php echo esc_html( $previous_post->post_title ); ?></a></p>                  
      </div>
    </div>
  </div>

<?php
  endif;
  if(get_next_post()):
    $next_post = get_next_post();
    $nav_post_ID = $next_post->ID;
?>
  <div class="col-md-6">
    <div class="next-prev-article">
      <div class="next-prev-article-left">
        <?php webnwell_next_post_thumbnail(); ?>
      </div>
      <div class="next-prev-article-content">
        <p class="sub__heading__article"><?php esc_html__('Next Post', 'webnwell'); ?></p>
        <p><a href="<?php echo esc_url( $next_post->guid); ?>" class="title-link-2"><?php echo esc_html( $next_post->post_title ); ?></a></p>
      </div>
    </div>              
  </div>


<?php
  endif;
?>
</div>