<?php
if( ! function_exists( 'webnwell_comments' ) ):
  function webnwell_comments($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">
    <?php 
    if ( 'div' != $args['style'] ) { ?>
      <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } 
    $comment_author_url = get_comment_author_url( $comment );
    $comment_author     = get_comment_author( $comment );
    $avatar             = get_avatar( $comment, $args['avatar_size'] );
    ?>
        <div class="comment__avatar d-sm-block vcard">
          <?php 
            if ( 0 !== $args['avatar_size'] ) {
              if ( empty( $comment_author_url ) ) {
                echo wp_kses_post( $avatar );
              } else {
                printf( '<a href="%s" rel="external nofollow" class="url">', $comment_author_url ); 
                echo wp_kses_post( $avatar );
                echo "</a>";
              }
            }
          ?>
        </div>
        <div class="comment__content">
          <?php 
          if ( $comment->comment_approved == '0' ) { ?>
              <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'webnwell' ); ?></em><br/><?php 
          } ?>
          <div class="comment__info"> 
          <?php if ( empty( $comment_author_url ) ): ?>
          <h5 class="comment__title">
            <strong><?php echo $comment_author; ?></strong>
          </h5> 
          <?php else : ?>
          <h5 class="comment__title">
            <a href="<?php echo $comment_author_url; ?>" class="title-link"><strong><?php echo $comment_author; ?></strong></a>
          </h5>
          <?php endif; ?>
          </div>
          <div class="comment__meta">
            <p class="comment__date">
              <i class="far fa-calendar-alt font-icon"></i>&nbsp; <?php printf( esc_html__('%1$s at %2$s' , 'webnwell'), get_comment_date(),  get_comment_time()) ?> 
            </p>
          </div>
          <div class="comment__body">
            <?php comment_text() ?>
            <a href="" class="comment__replay"><i class="fa-regular fa-pen-to-square"></i>&nbsp; 
              <?php 
                comment_reply_link(
                  array_merge( $args, 
                    array(
                      'add_below' => $add_below, 
                      'depth'     => $depth, 
                      'max_depth' => $args['max_depth'] 
                    )
                  )
                ) 
              ?>               
            </a>
              <?php edit_comment_link( __( '(Edit)', 'webnwell' ), '  ', '' ); ?>
          </div> 
        </div>
    <?php 
    if ( 'div' != $args['style'] ) : ?>
      </div><?php 
    endif;
  }
  
  endif;