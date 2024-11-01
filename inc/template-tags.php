<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package webnwell
 */

 if ( ! function_exists( 'webnwell_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function webnwell_posted_on() {
		$date_icon = "<i class='far fa-calendar-alt'></i>";
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			esc_html_x( ' %s &nbsp;&nbsp;', 'post date', 'webnwell' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		echo '<span class="posted-on">' . $date_icon . $posted_on . '</span>'; 
	}
endif;

if ( ! function_exists( 'webnwell_posted_by' ) ) :	
	function webnwell_posted_by() {
		$author_icon = "<i class='far fa-user'></i>";
		$byline = sprintf(			
			esc_html_x( ' %s &nbsp;&nbsp;', 'post author', 'webnwell' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
		echo '<span class="byline"> ' . $author_icon . $byline . '</span>'; 

	}
endif;



if ( ! function_exists( 'webnwell_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function webnwell_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;

// function For Page title and blog info
if ( ! function_exists( 'webnwell_bloginfo' ) ) :
function webnwell_bloginfo(){ 
	if ( is_front_page() && is_home()) {
		echo "<h1 class='title-2 page-title entry-title mb-3'>";
		bloginfo('name'); 
		echo "</h1>";
		echo "<h5 class='heroSub__heading'>";
		bloginfo('description');
		echo "</h5>";
	} elseif ( is_front_page()){
		echo "<h1 class='title-2 page-title entry-title mb-3'>";
		bloginfo('name'); 
		echo "</h1>";
		echo "<h5 class='heroSub__heading'>";
		bloginfo('description');
		echo "</h5>";
	} elseif ( is_home()){
		echo "<h1 class='title-2 page-title entry-title mb-3'>";
		bloginfo('name');
		echo "</h1>";
	} elseif ( is_archive() || !is_home() || !is_front_page(  )){ 
		echo "<h1 class='title-2 page-title entry-title mb-3'>";
		wp_title('');
		echo "</h1>";
		echo "<h5 class='heroSub__heading'>";
		echo get_the_archive_description(  );
		echo "</h5>";
	} else {
		echo "<h1 class='title-2 page-title entry-title mb-3'>";
		wp_title(''); 
		echo "</h1>";
	}

 }


endif;

// Function for Breadcrumb
if ( ! function_exists( 'webnwell_breadcrumb' ) ) :
	function webnwell_breadcrumb() {
		$breadCrumb_icon = "<i class='fa-solid fa-angle-right breadcrumb-arrow'></i>";
		echo '<a href="'.home_url().'" rel="nofollow">Home</a>';

		if (is_category() || is_single()) {
				echo $breadCrumb_icon;
				the_category($breadCrumb_icon);
				if (is_single()) {
						echo $breadCrumb_icon;
						echo wp_trim_words(get_the_title(), 5);
				}
		} elseif (is_page()) {
				echo $breadCrumb_icon;
				echo wp_trim_words(get_the_title(), 5);
		} elseif (is_search()) {
				echo $breadCrumb_icon . " Search Results for... ";
				echo '"<em>';
				echo the_search_query();
				echo '</em>"';
		}
	}
endif;

if( ! function_exists('webnwell_prev_post_thumbnail') ) :
	function webnwell_prev_post_thumbnail(){ 
		$previous_post = get_previous_post();
		?>
		
		<a href="<?php echo esc_url( $previous_post->guid); ?>" aria-hidden="true" tabindex="-1">
		<?php
			echo get_the_post_thumbnail(
				get_previous_post(),
				'thumbnail',
				array(
					'alt' =>get_the_title(get_previous_post(),
						array(
						'echo' => false
					)
				),
					
				)
			);
		?> </a> <?php
	}
endif;


if( ! function_exists('webnwell_next_post_thumbnail') ) :
	function webnwell_next_post_thumbnail(){ 
		$next_post = get_next_post();
		?>
		
		<a href="<?php echo esc_url( $next_post->guid); ?>" aria-hidden="true" tabindex="-1">
		<?php
			echo get_the_post_thumbnail(
				get_next_post(),
				'thumbnail',
				array(
					'alt' =>get_the_title(get_next_post(),
						array(
						'echo' => false
					)
				),
					
				)
			);
		?> </a> <?php
	}
endif;


// For Category 
if(! function_exists('webnwell_category')):
	function webnwell_category(){
		if ( 'post' === get_post_type() ) {
			$categories_list = get_the_category_list( esc_html__( ' ', 'webnwell' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="article-cat-item">' . esc_html__( ' %1$s', 'webnwell' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		}
	}
endif;
// For Tag 
if(! function_exists('webnwell_tag')):
	function webnwell_tag(){
		if ( 'post' === get_post_type() ) {
			$tag_icon = "<i class='fas fa-tags font-icon'></i>";
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'webnwell' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="article-tag">' . esc_html__( '%1$s %2$s', 'webnwell' ) . '</span>',$tag_icon, $tags_list ); 
			}
		}
	}
endif;

// For Pagination
if(! function_exists('webnwell_pagination')):
	function webnwell_pagination(){
		global $wp_query;
		$page_link = paginate_links(
			array(
				'current'    				=>  max(1,get_query_var("paged")),
				'total'       			=>  $wp_query->max_num_pages,
				'type'        			=> 'list',
				'prev_text'         => __('<i class="fas fa-arrow-left"></i>', 'webnwell'),
				'next_text'         => __('<i class="fas fa-arrow-right"></i>', 'webnwell'),
				'mid_size'         	=> 1,
			),
		);
		$page_link = str_ireplace("page-numbers","pgn__num",$page_link);
		$page_link = str_ireplace("<ul class='pgn__num'>","<ul>",$page_link);
		$page_link = str_ireplace("next page-numbers","pgn__next",$page_link);
		$page_link = str_ireplace("prev page-numbers","pgn__prev",$page_link);
		$page_link = str_ireplace("pgn__num current","pgn__active",$page_link);
		echo wp_kses_post($page_link);
		
	}
endif;









