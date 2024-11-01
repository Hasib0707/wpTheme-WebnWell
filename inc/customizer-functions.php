<?php

function customize_hero_btn(){
    /**
	 * Customize Assets  
	 */ 
	$hero_btn_bg_color = get_theme_mod( 'webnwell_hero_button_bgColor', '#CC1E2F' );
	$hero_btn_text_color = get_theme_mod( 'webnwell_hero_button_textColor', '#FFFFFF' );
	$home_hero_btn_bg_style = <<<EOD
	.hero_btn {
		background-color: {$hero_btn_bg_color};
		color: {$hero_btn_text_color};
	}

	EOD;
	wp_add_inline_style( 'webnwell-style', $home_hero_btn_bg_style );

}


function customize_hero_btn_hover(){
    /**
	 * Customize Assets  
	 */ 
	$hero_btn_hover_bg_color = get_theme_mod( 'webnwell_hero_button_hover_bgColor', '#000000' );
	$hero_btn_hover_text_color = get_theme_mod( 'webnwell_hero_button_hover_textColor', '#FFFFFF' );
	$home_hero_btn_hover_style = <<<EOD
	.hero_btn:hover {
		background-color: {$hero_btn_hover_bg_color};
		color: {$hero_btn_hover_text_color};
	}

	EOD;
	wp_add_inline_style( 'webnwell-style', $home_hero_btn_hover_style );

}


function webnwell_cta_btn(){
  $cta_btn_bg_color = get_option_value('cta_btn_background_color', '#CC1E2F');
	$cta_btn_text_color = get_option_value('cta_btn_text_color', '#FFFFFF');
	$cta_btn_bg_hover_color = get_option_value('cta_btn_bg_hover_color', '#000000');
	$cta_btn_text_hover_color = get_option_value('cta_btn_text_hover_color', '#FFFFFF');
	?>
	<style>
		.btn_CTA {
			background-color: <?php echo $cta_btn_bg_color; ?>;
			color: <?php echo $cta_btn_text_color; ?>;
			border-radius: 4px;
			display: inline-block;
			padding: 11px 25px 12px;
			text-decoration: none;
			margin-top: 10px;
		}	
		.btn_CTA:hover {
			background-color: <?php echo $cta_btn_bg_hover_color; ?>;
			color: <?php echo $cta_btn_text_hover_color; ?>;
		}
	</style>
	<?php
}


function webnwell_cta_banner_bg(){	
	$webnwell_cta_bg_image = esc_url( get_theme_mod( 'cta_background_image', esc_url(get_theme_file_uri('assets/images/cta.webp')) ));
	?>
	<style>
		#CTAbanner{
			background: url('<?php echo $webnwell_cta_bg_image ?>') rgba(0, 0, 0, 0.7);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-blend-mode: multiply;
			padding: 100px 0;
			color: #FFFFFF;
		}		
	</style>
	<?php

}


// General Button Settings 
function webnwell_gen_btn_color(){
	$gn_btn_bg_color = get_option_value('gen_btn_bg_color', '#CC1E2F');
	$gn_btn_text_color = get_option_value('gen_btn_text_color', '#FFFFFF');
	$gn_btn_bg_hover_color = get_option_value('gen_btn_bg_hover_color', '#000000');
	$gn_btn_text_hover_color = get_option_value('gen_btn_text_hover_color', '#FFFFFF');
	?>
	<style>
		.btn_secondary {
			background-color: <?php echo $gn_btn_bg_color; ?>;
			color: <?php echo $gn_btn_text_color; ?>;
			border-radius: 0;
			display: inline-block;
			padding: 10px 25px 11px;
			text-decoration: none;
		}	
		.btn_secondary:hover {
			background-color: <?php echo $gn_btn_bg_hover_color; ?>;
			color: <?php echo $gn_btn_text_hover_color; ?>;
		}
	</style>
	<?php
}


// Home Hero Button Settings 
function webnwell_hero_btn_color(){
	$hero_btn_bg_color = get_option_value('hero_btn_background_color', '#CC1E2F');
	$hero_btn_text_color = get_option_value('hero_btn_text_color', '#FFFFFF');
	$hero_btn_bg_hover_color = get_option_value('hero_btn_bg_hover_color', '#000000');
	$hero_btn_text_hover_color = get_option_value('hero_btn_text_hover_color', '#FFFFFF');
	?>
	<style>
		.hero_button_home {
			background-color: <?php echo $hero_btn_bg_color ?>;
			color: <?php echo $hero_btn_text_color ?>;
			border-radius: 4px;
			display: inline-block;
			padding: 10px 25px 11px;
			text-decoration: none;
		}
		.hero_button_home:hover {
			background-color: <?php echo $hero_btn_bg_hover_color; ?>;
			color: <?php echo $hero_btn_text_hover_color; ?>;
		}
	</style>
	<?php
}

// Typography Settings 
function webnwell_p_color(){
	$p_text_color = get_option_value('body_text_color', '#666666');
	
	?>
	<style>
		p {
			color: <?php echo $p_text_color; ?>;
		}
		.card-content p {
			color: <?php echo $p_text_color; ?>;
		}
		
	</style>
	<?php
}

function webnwell_heading_color(){
	$heading_text_color = get_option_value('heading_text_color', '#000000');
	
	?>
	<style>
		h1 {
			color: <?php echo $heading_text_color; ?>;
		}
		h2{
			color: <?php echo $heading_text_color; ?>;
		}
		h3 {
			color: <?php echo $heading_text_color; ?>;
		}
		h4 {
			color: <?php echo $heading_text_color; ?>;
		}
		h5 {
			color: <?php echo $heading_text_color; ?>;
		}
		h6 {
			color: <?php echo $heading_text_color; ?>;
		}
		.title-2 {
			color: <?php echo $heading_text_color; ?>;
		}
		
	</style>
	<?php
}

function webnwell_hero_color(){
	$hero_heading_text_color = get_option_value('hero_heading_text_color', '#000000');
	$hero_text_color = get_option_value('hero_text_color', '#000000');
	$cta_heading_text_color = get_option_value('cta_heading_text_color', '#FFFFFF');
	$cta_text_color = get_option_value('cta_text_color', '#FFFFFF');
	
	?>
	<style>
		.display__heading {
			color: <?php echo $hero_heading_text_color; ?>;
		}
		.heroSub__heading {
			color: <?php echo $hero_text_color; ?>;
		}
		.cta-title {
			color: <?php echo $cta_heading_text_color; ?>;
		}
		#CTAbanner p {
			color: <?php echo $cta_text_color; ?>;
		}
		
	</style>
	<?php
}

function webnwell_breadCrumb_margin(){
	if(get_option_value('bread-crumb') == 0 && get_option_value('page_title_only') == 0) {
		$margin = "40px 0 0 0";
	} elseif(get_option_value('page_title_only') == 0) {
		$margin = "0 0 0 0";
	} else {
		$margin = "0 0 0 0";
	}
	
	?>
	<style>
		.breadCrumb {
			margin: <?php echo $margin; ?>
		}
		
	</style>
	<?php
}

