<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'webnwell' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg">
			<div class="site-header-container">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$webnwell_description = get_bloginfo( 'description', 'display' );
					if ( $webnwell_description || is_customize_preview() ) :
						?>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
</span>
				</button>
				<?php 
					wp_nav_menu( array(
						'theme_location'  => 'main-menu',
						'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'main-menu',
						'menu_class'      => 'navbar-nav ms-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					) );				      
				?>
				<?php
					if(get_option_value('header_btn') == true):
				?>
				<div class="button-header">					
					<div class="header-button">
						<a href="<?php echo get_option_value('header_btn_link',__( 'http://google.com', 'webnwell')); ?>" target="<?php echo get_option_value('header_btn_target', 0); ?>" class="btn head-btn"><?php echo get_option_value('header_btn_text',__( 'Book Now', 'webnwell')); ?></a>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</nav>
	</header><!-- #masthead -->