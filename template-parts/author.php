<div class="article-author">
  <div class="author-image">
  <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
  </div>
  <div class="author-content">
    <p class="sub__heading">Author</p>
    <h5><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>" class="title-link">
      <?php
        if(get_the_author_meta('display_name') != ''):
          echo esc_html( get_the_author_meta('display_name') ); 
        else : echo esc_html( get_the_author_meta('nickname') );
        endif;
      ?>
    </a></h5>
    <p><?php the_author_meta( "description" ); ?></p>
  </div>
</div>