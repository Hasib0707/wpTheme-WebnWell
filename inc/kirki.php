<?php

if ( ! class_exists(  'kirki' ) ) {
	return;
}

/**
 * Main panel for Home Page Option
 */
new \Kirki\Panel(
	'home_hero',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Home Page Options', 'webnwell' ),
		'description' => esc_html__( 'Front Page | Home Page Settings Option.', 'webnwell' ),
		'active_callback'	=>	function(){
			if(is_page_template( 'page-template/home-page.php' )){
				return true;
			}
			return false;
		}
	]
);

/**
 * Section for Hero Section
 */
new \Kirki\Section(
	'home_hero_section',
	[
		'title'       => esc_html__( 'Hero Sections', 'webnwell' ),
		'description' => esc_html__( 'Home Page Hero Section Settings.', 'webnwell' ),
		'panel'       => 'home_hero',
		'priority'    => 1,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_hero_heading',
		'label'    => esc_html__( 'Hero Heading Text', 'webnwell' ),
		'section'  => 'home_hero_section',
		'default'  => esc_html__( 'The Best Marketing Agency', 'webnwell' ),
		'priority' => 10,
		'transport'	=> 'auto',
		'partial_refresh'    => [
			'webnwell_hero_heading' => [
				'selector'        => '#hero-heading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_hero_heading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'hero_display_subheading',
		'label'       => esc_html__( 'Display Subheading',  'webnwell' ),
		'description' => esc_html__( 'Hide and Show for Subheading, If uncheck, it will hide Subheading',  'webnwell' ),
		'section'     => 'home_hero_section',
		'default'     => 1,
		'transport'	=> 'refresh'
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'webnwell_hero_subheading',
		'label'       => esc_html__( 'Hero Subheading',  'webnwell' ),
		'section'     => 'home_hero_section',
		'default'     => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',  'webnwell' ),
		'partial_refresh'    => [
			'webnwell_hero_subheading' => [
				'selector'        => '#hero-subheading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_hero_subheading', 'default' );
				},
			],
		]
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'heroButton',
		'label'        => esc_html__( 'Hero Button', 'webnwell' ),
		'section'      => 'home_hero_section',		
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Button', 'webnwell' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add New Button', 'webnwell' ),
		'default'      => [
			[
				'link_text'   => esc_html__( 'Book Now', 'webnwell' ),
				'link_url'    => esc_url( 'https://wordpress.org/' ),
				'link_target' => '_self',
			],
		],
		'fields'       => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'webnwell' ),
				'description' => esc_html__( 'Type your Link text "Read More", "Contact Us" etc', 'webnwell' ),
				'default'     => esc_html__( 'Book Now',  'webnwell' ),
			],
			'link_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Button URL', 'webnwell' ),
				'description' => esc_html__( 'Add button link here', 'webnwell' ),
				'default'     => esc_url( 'https://wordpress.org/' ),
			],
			'link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'webnwell' ),
				'description' => esc_html__( 'Open link in same window or "New Tab Window"', 'webnwell' ),
				'default'     => '_self',
				'choices'     => [
					'_self'  => esc_html__( 'Same Frame', 'webnwell' ),
					'_blank' => esc_html__( 'New Window', 'webnwell' ),
				],
			],
		],
		'choices' => [
			'limit' => 2
		],
		'partial_refresh'    => [
			'heroButton' => [
				'selector'        => '#hero-button',
				'render_callback' => function() {
					return get_theme_mod( 'heroButton', 'default' );
				},
			],
		]
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'hero-image',
		'label'       => esc_html__( 'Hero Featured Image', 'webnwell' ),
		'description' => esc_html__( 'Upload hero featured image.', 'webnwell' ),
		'section'     => 'home_hero_section',
		'default'     => esc_url( get_theme_file_uri('assets/images/hero.webp') ),
		'priority'    => 20,
		'transport'		=>	'refresh',		
	]
);

/** end of hero section */

/**
 * Section for Bottom Hero Section
 */
new \Kirki\Section(
	'home_hero_bottom_section',
	[
		'title'       => esc_html__( 'Hero Bottom Sections', 'webnwell' ),
		'description' => esc_html__( 'Home Page Bottom Hero Section Settings.', 'webnwell' ),
		'panel'       => 'home_hero',
		'priority'    => 2,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_hero_bottom_subheading',
		'label'    => esc_html__( 'Subheading Text', 'webnwell' ),
		'section'  => 'home_hero_bottom_section',
		'default'  => esc_html__( 'Service Locations', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_hero_bottom_subheading' => [
				'selector'        => '#bottom-subheading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_hero_bottom_subheading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_hero_bottom_heading',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'home_hero_bottom_section',
		'default'  => esc_html__( 'City & Surrounding Areas', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_hero_bottom_heading' => [
				'selector'        => '#bottom-heading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_hero_bottom_heading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_hero_bottom_description',
		'label'    => esc_html__( 'Description', 'webnwell' ),
		'section'  => 'home_hero_bottom_section',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit ornare porta, ut tempor risus auctor faucibus vulputate purus class a', 'webnwell' ),
		'description' => esc_html__( 'Description text should not be too long', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_hero_bottom_description' => [
				'selector'        => '#bottom-description',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_hero_bottom_description', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_hero_bottom_button_text',
		'label'    => esc_html__( 'Text Button', 'webnwell' ),
		'section'  => 'home_hero_bottom_section',
		'default'  => esc_html__( 'Our Happy Clients', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_hero_bottom_button_text' => [
				'selector'        => '#bottom-button_text',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_hero_bottom_button_text', 'default' );
				},
			],
		],
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'webnwell_hero_bottom_button_link',
		'label'    => esc_html__( 'Button URL', 'webnwell' ),
		'section'  => 'home_hero_bottom_section',
		'default'  => esc_url( 'https://gowebnwell.com' ),
		'transport'=> 'auto'
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'webnwell_hero_bottom_button_target',
		'label'       => esc_html__( 'Open Link In New Window', 'webnwell' ),
		'description' => esc_html__( 'If checked, link will open "New Browser Window" | default "Same Window"', 'webnwell' ),
		'section'     => 'home_hero_bottom_section',
		'default'     => false,
		'transport'=> 'auto'
	]
);

/** end of Bottom hero section */

/**
 * Section for About Us Section
 */
new \Kirki\Section(
	'home_about_section',
	[
		'title'       => esc_html__( 'About Sections', 'webnwell' ),
		'description' => esc_html__( 'About Us Section Settings.', 'webnwell' ),
		'panel'       => 'home_hero',
		'priority'    => 3,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_about_subheading',
		'label'    => esc_html__( 'Subheading Text', 'webnwell' ),
		'section'  => 'home_about_section',
		'default'  => esc_html__( 'About Us', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_about_subheading' => [
				'selector'        => '#about-subheading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_about_subheading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_about_heading',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'home_about_section',
		'default'  => esc_html__( 'Nemo enim ipsam voluptatem quia voluptas sit', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_about_heading' => [
				'selector'        => '#about-heading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_about_heading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_about_description',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'home_about_section',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit risus eros curabitur molestie lectus auctor, suspendisse sagittis litora felis venenatis', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_about_description' => [
				'selector'        => '#about-description',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_about_description', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_about_button_text',
		'label'    => esc_html__( 'Text Button', 'webnwell' ),
		'section'  => 'home_about_section',
		'default'  => esc_html__( 'Know More', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_about_button_text' => [
				'selector'        => '#about-text-btn',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_about_button_text', 'default' );
				},
			],
		],
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'webnwell_about_button_link',
		'label'    => esc_html__( 'Button URL', 'webnwell' ),
		'section'  => 'home_about_section',
		'default'  => esc_url( 'https://gowebnwell.com' ),
		'transport'=> 'auto'
	]
);

new \Kirki\Field\Checkbox(
	[
		'settings'    => 'webnwell_about_target',
		'label'       => esc_html__( 'Open Link In New Window', 'webnwell' ),
		'description' => esc_html__( 'If checked, link will open "New Browser Window" | default "Same Window"', 'webnwell' ),
		'section'     => 'home_about_section',
		'default'     => false,
		'transport'=> 'auto'
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'about_image_one',
		'label'       => esc_html__( 'About Featured Image One', 'webnwell' ),
		'description' => esc_html__( 'Upload about featured image left.', 'webnwell' ),
		'section'     => 'home_about_section',
		'default'     => esc_url( get_theme_file_uri('assets/images/shortAbout1.webp') ),
		'priority'    => 20,
		'transport'		=>	'refresh',		
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'about_image_two',
		'label'       => esc_html__( 'About Featured Image Two', 'webnwell' ),
		'description' => esc_html__( 'Upload about featured image Right.', 'webnwell' ),
		'section'     => 'home_about_section',
		'default'     => esc_url( get_theme_file_uri('assets/images/shortAbout2.webp') ),
		'priority'    => 21,
		'transport'		=>	'refresh',		
	]
);

/** end of Bottom hero section */


/**
 * Section for Services Section
 */
new \Kirki\Section(
	'webnwell_home_service_section',
	[
		'title'       => esc_html__( 'Service Section', 'webnwell' ),
		'description' => esc_html__( 'Our Service Section Settings.', 'webnwell' ),
		'panel'       => 'home_hero',
		'priority'    => 4,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_service_subheading',
		'label'    => esc_html__( 'Subheading Text', 'webnwell' ),
		'section'  => 'webnwell_home_service_section',
		'default'  => esc_html__( 'Our Services', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_service_subheading' => [
				'selector'        => '#service-subheading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_service_subheading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_service_heading',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'webnwell_home_service_section',
		'default'  => esc_html__( 'Quis autem vel eum iure Reprehenderit qui in ea.', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_service_heading' => [
				'selector'        => '#service-heading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_service_heading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_service_description',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'webnwell_home_service_section',
		'default'  => esc_html__( 'At vero eos et accusamus et iusto odio dignissimos ducimus...', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_service_description' => [
				'selector'        => '#service-description',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_service_description', 'default' );
				},
			],
		],
	]
);


Kirki::add_field( 'customize_webnwell', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Services Control',  'webnwell' ),
	'section'     => 'webnwell_home_service_section',
	'transport'=> 'auto',
	'priority'    => 10,	
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__( 'Service',  'webnwell' ),
	],
	'button_label' => esc_html__('Add New Service',  'webnwell' ),
	'settings'     => 'service_repeater_setting',
	'transport'		=>	'auto', 
  'default'      => [
    [
      'image' =>  get_theme_file_uri('/assets/images/service1.webp'),
      'heading_text' => esc_html__( 'Service Name',  'webnwell' ),
      'heading_text_url' => esc_url( 'http://google.com' ),
      'description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
      'button_text' => esc_html__( 'Book Now',  'webnwell' ),
      'button_url' => esc_url( 'http://google.com' ),
    ],    
    [
      'image' =>  get_theme_file_uri('/assets/images/service2.webp'),
      'heading_text' => esc_html__( 'Service Name',  'webnwell' ),
      'heading_text_url' => esc_url( 'http://google.com' ),
      'description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
      'button_text' => esc_html__( 'Book Now',  'webnwell' ),
      'button_url' => esc_url( 'http://google.com' ),
    ],    
    [
      'image' =>  get_theme_file_uri('/assets/images/service3.webp'),
      'heading_text' => esc_html__( 'Service Name',  'webnwell' ),
      'heading_text_url' => esc_url( 'http://google.com' ),
      'description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
      'button_text' => esc_html__( 'Book Now',  'webnwell' ),
      'button_url' => esc_url( 'http://google.com' ),
    ],    
  ],	
  'fields' => [
		'image' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Card Image',  'webnwell' ),
			'description' => esc_html__( 'This will be the Card Images',  'webnwell' ),
			'default'     => '',

		],
		'heading_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Heading',  'webnwell' ),
			'description' => esc_html__( 'This will be the Heading for your service',  'webnwell' ),
			'default'     => esc_html__( 'Service Name',  'webnwell' ),   
		],
		'heading_text_url'  => [
			'type'        => 'url',
			'label'       => esc_html__( 'Heading Text Link URL',  'webnwell' ),
			'description' => esc_html__( 'This will make linkable Heading',  'webnwell' ),
			'default'     => esc_url( 'http://google.com' ),
		],
    'description' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Service Description',  'webnwell' ),
			'description' => esc_html__( 'This is for your service short description',  'webnwell' ),
			'default'     => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
		],
    'button_text' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Button Text',  'webnwell' ),
			'description' => esc_html__( 'This is for button text or label',  'webnwell' ),
			'default'     => esc_html__( 'Book Now',  'webnwell' ),
		],
    'button_url' => [
			'type'        => 'url',
			'label'       => esc_html__( 'Button URL',  'webnwell' ),
			'description' => esc_html__( 'This is for button link',  'webnwell' ),
			'default'     => esc_url( 'http://google.com' ),
		],
	],

] );


/** end of Service section */


/**
 * Section for CTA Section
 */

 new \Kirki\Section(
	'call_to_action_section',
	[
		'title'       => esc_html__( 'Call To Action Section', 'webnwell' ),
		'description' => esc_html__( 'CTA "Call to Action" Section Settings.', 'webnwell' ),
		'panel'       => 'home_hero',
		'priority'    => 5,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_cta_heading',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'call_to_action_section',
		'default'  => esc_html__( 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_cta_heading' => [
				'selector'        => '#cta-heading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_cta_heading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_cta_text',
		'label'    => esc_html__( 'CTA Short Description', 'webnwell' ),
		'section'  => 'call_to_action_section',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing elit a, viverra nulla molestie netus imperdiet magna dictum, ultrices mattis sagittis placerat scelerisque curae tincidunt.', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_cta_text' => [
				'selector'        => '#cta-text',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_cta_text', 'default' );
				},
			],
		],
	]
);



new \Kirki\Field\Repeater(
	[
		'settings'     => 'ctaButton',
		'label'        => esc_html__( 'Call to Action Button', 'webnwell' ),
		'section'      => 'call_to_action_section',		
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Button', 'webnwell' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add New Button', 'webnwell' ),
		'default'      => [
			[
				'link_text'   => esc_html__( 'Book Now', 'webnwell' ),
				'link_url'    => esc_url( 'https://wordpress.org/' ),
				'link_target' => '_self',
			],
		],
		'fields'       => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'webnwell' ),
				'description' => esc_html__( 'Type your Link text "Read More", "Contact Us" etc', 'webnwell' ),
				'default'     => esc_html__( 'Book Now',  'webnwell' ),
			],
			'link_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Button URL', 'webnwell' ),
				'description' => esc_html__( 'Add button link here', 'webnwell' ),
				'default'     => esc_url( 'https://wordpress.org/' ),
			],
			'link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'webnwell' ),
				'description' => esc_html__( 'Open link in same window or "New Tab Window"', 'webnwell' ),
				'default'     => '_self',
				'choices'     => [
					'_self'  => esc_html__( 'Same Frame', 'webnwell' ),
					'_blank' => esc_html__( 'New Window', 'webnwell' ),
				],
			],
		],
		'choices' => [
			'limit' => 3
		],
		'partial_refresh'    => [
			'ctaButton' => [
				'selector'        => '#cta-text-btn',
				'render_callback' => function() {
					return get_theme_mod( 'ctaButton', 'default' );
				},
			],
		]
	]
);


/** end of CTA section */


/**
 * Section for Why Choose Us Section
 */

 new \Kirki\Section(
	'webnwell_home_choose_section',
	[
		'title'       => esc_html__( 'Call To Action Section', 'webnwell' ),
		'description' => esc_html__( 'CTA "Call to Action" Section Settings.', 'webnwell' ),
		'panel'       => 'home_hero',
		'priority'    => 6,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_choose_subheading',
		'label'    => esc_html__( 'Subheading Text', 'webnwell' ),
		'section'  => 'webnwell_home_choose_section',
		'default'  => esc_html__( 'Why Choose Us', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_choose_subheading' => [
				'selector'        => '#choose-subheading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_choose_subheading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'webnwell_choose_heading',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'webnwell_home_choose_section',
		'default'  => esc_html__( 'Why Would You like Our Service?', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_choose_heading' => [
				'selector'        => '#choose-heading',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_choose_heading', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings' => 'webnwell_choose_description',
		'label'    => esc_html__( 'Heading Text', 'webnwell' ),
		'section'  => 'webnwell_home_choose_section',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'webnwell' ),
		'partial_refresh'    => [
			'webnwell_choose_description' => [
				'selector'        => '#choose-description',
				'render_callback' => function() {
					return get_theme_mod( 'webnwell_choose_description', 'default' );
				},
			],
		],
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'choose_repeater_setting',
		'label'    => esc_html__( 'Choose Us Item',  'webnwell' ),
		'section'  => 'webnwell_home_choose_section',
		'priority' => 20,
		'row_label' => [
			'type'  => 'text',
			'value' => esc_html__( 'Choose Item',  'webnwell' ),
		],
		'button_label' => esc_html__('Add New Choose Item',  'webnwell' ),
		'default'  => [
			[
				'item_text' => esc_html__( "Search Engine Optimization (SEO)",  'webnwell' ),
			],
			[
				'item_text'   => esc_html__( "Search Engine Marketing (SEM)",  'webnwell' ),
			],
			[
				'item_text'   => esc_html__( "Website Strategy.",  'webnwell' ),
			],
			[
				'item_text'   => esc_html__( "Social Media Marketing.",  'webnwell' ),
			],
			[
				'item_text'   => esc_html__( "Email Outreach.",  'webnwell' ),
			],
			[
				'item_text'   => esc_html__( "Content Generation and Optimization.",  'webnwell' ),
			],
		],
		'fields'   => [
			'item_text'   => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Choose Item Text',  'webnwell' ),
				'description' => esc_html__( 'Describe your item here',  'webnwell' ),
			],			
		],
		
	]
);

new \Kirki\Field\Repeater(
	[
		'settings'     => 'choose_button_setting',
		'label'        => esc_html__( 'Button', 'webnwell' ),
		'section'      => 'webnwell_home_choose_section',	
		'priority' 		 => 25,	
		'row_label'    => [
			'type'  => 'field',
			'value' => esc_html__( 'Button', 'webnwell' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__( 'Add New Button', 'webnwell' ),
		'default'      => [
			[
				'link_text'   => esc_html__( 'Book Now', 'webnwell' ),
				'link_url'    => esc_url( 'https://wordpress.org/' ),
				'link_target' => '_self',
			],
		],
		'fields'       => [
			'link_text'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text', 'webnwell' ),
				'description' => esc_html__( 'Type your Link text "Read More", "Contact Us" etc', 'webnwell' ),
				'default'     => esc_html__( 'Book Now',  'webnwell' ),
			],
			'link_url'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Button URL', 'webnwell' ),
				'description' => esc_html__( 'Add button link here', 'webnwell' ),
				'default'     => esc_url( 'https://wordpress.org/' ),
			],
			'link_target' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Link Target', 'webnwell' ),
				'description' => esc_html__( 'Open link in same window or "New Tab Window"', 'webnwell' ),
				'default'     => '_self',
				'choices'     => [
					'_self'  => esc_html__( 'Same Frame', 'webnwell' ),
					'_blank' => esc_html__( 'New Window', 'webnwell' ),
				],
			],
		],
		'choices' => [
			'limit' => 2
		],
		'partial_refresh'    => [
			'choose_button_setting' => [
				'selector'        => '#choose-text-btn',
				'render_callback' => function() {
					return get_theme_mod( 'choose_button_setting', 'default' );
				},
			],
		]
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'choose_image',
		'label'       => esc_html__( 'About Featured Image Two', 'webnwell' ),
		'description' => esc_html__( 'Upload about featured image Right.', 'webnwell' ),
		'section'     => 'webnwell_home_choose_section',
		'default'     => esc_url( get_theme_file_uri('/assets/images/choose_us.webp') ),
		'priority'    => 30,
		'transport'		=>	'refresh',		
	]
);

