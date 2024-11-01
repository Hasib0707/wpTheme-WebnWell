<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'webnwell_theme_option';
    $header_layout_image_left = "https://theme.webnwell.co/wp-content/uploads/2023/03/Left_Menu.png";
    $header_layout_image_right = "https://theme.webnwell.co/wp-content/uploads/2023/03/Basic_Menu.png";
    $header_layout_image_center = "https://theme.webnwell.co/wp-content/uploads/2023/03/Center_Menu.png";

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Webnwell Option', 'webnwell' ),
        'page_priority'             => 90,
        'customizer'                => false,
        'dev_mode'                  => false,
    );

    Redux::set_args( $opt_name, $args );

    Redux::set_section( $opt_name, array(
        'title'  => esc_html__( 'Header', 'webnwell' ),
        'id'     => 'basic_header',
        'desc'   => esc_html__( 'Header Setting Options', 'webnwell' ),
        'icon'   => 'el el-screen',
        'fields' => array(            
            array(
                'id' => 'webnwell_header_bg_color',
                'type' => 'color',
                'title' => __( 'Header Background Color' , 'webnwell' ),
                'default'  => '#FFFDFC',
                'output'    => array(
                  'background-color' => '.site-header', 
            )),
            array(
              'id'       => 'webnwell_menu_color',
              'type'     => 'color',
              'title'    => esc_html__( 'Header Menu Text Color', 'webnwell' ),
              'default'  => '#000000',
              'output'    => array(
                'color' => '.nav-link',
            )), 
            array(
              'id'       => 'webnwell_menu_hover_color',
              'type'     => 'color',
              'title'    => esc_html__( 'Header Menu Text Hover Color', 'webnwell' ),
              'default'  => '#CC1E2F',
              'output'    => array(
                'color' => '.nav-link:hover',
            )), 
            array(
              'id'       => 'webnwell_menu_color_indicator_active',
              'type'     => 'color',
              'title'    => esc_html__( 'Header Menu Indicator Active Color', 'webnwell' ),
              'default'  => '#CC1E2F',
              'output'    => array(
                'background-color' => '.navbar-nav .active::before',
            )),
            array(
              'id'       => 'webnwell_menu_color_indicator',
              'type'     => 'color',
              'title'    => esc_html__( 'Header Menu Indicator Color', 'webnwell' ),
              'default'  => '#CC1E2F',
              'output'    => array(
                'background-color' => '.nav-item:hover::before',
            )), 
        )
    ) );

    Redux::set_section( $opt_name, array(
        'title'  => esc_html__( 'Header Layout', 'webnwell' ),
        'id'     => 'header_layout',
        'desc'  => 'This is Description',
        'icon'   => 'el el-th-list',
        'subsection'  =>  true,
        'fields' => array(
            array(
                    'id'       => 'header-layout',
                    'type'     => 'radio',
                    'title'    => esc_html__('Select Header Layout Style', 'webnwell'), 
                    'data'  => array(
                        '1' => '<img class="line-vertical-img" src="'.esc_url($header_layout_image_left).'" alt="header_image">', 
                        '2' => '<img class="line-vertical-img" src="'.esc_url($header_layout_image_right).'" alt="header_image">', 
                        '3' => '<img class="line-vertical-img" src="'.esc_url($header_layout_image_center).'" alt="header_image">', 
                        
                    ),
                    'default' => '2'
                )
              ),
    )) ;
    Redux::set_section( $opt_name, array(
        'title'  => esc_html__( 'Header Button', 'webnwell' ),
        'id'     => 'header_button',
        'desc'  => 'Header Button Settings',
        'icon'   => 'el el-link',
        'subsection'  =>  true,
        'fields' => array(            
              array(
                  'id' => 'header_btn',
                  'type' => 'switch',
                  'title' => esc_html__( 'Header Button' , 'webnwell' ),
                  'desc' => esc_html__( 'Enable or Disable Header Button' , 'webnwell' ),
                  'default'  => true,
              ),
              array(
                  'id' => 'header_btn_text',
                  'type' => 'text',
                  'title' => esc_html__( 'Button Text' , 'webnwell' ),
                  'default'  => esc_html__( 'Book Now', 'webnwell' ),
              ),
              array(
                  'id' => 'header_btn_link',
                  'type' => 'text',
                  'title' => esc_html__( 'Button Url' , 'webnwell' ),
                  'default'  => esc_url( 'http://google.com', 'webnwell' ),
              ),
              array(
                  'id' => 'header_btn_target',
                  'type' => 'checkbox',
                  'title' => esc_html__( 'Open Link in New Tab' , 'webnwell' ),
                  'description' => esc_html__( 'For opening link in new browser tab, please check this', 'webnwell' ),
                  'default'  => '0'
              ),
              array(
                  'id' => 'header_btn_text_color',
                  'type' => 'color',
                  'title' => esc_html__( 'Button Text Color' , 'webnwell' ),
                  'default'  => '#FFFFFF',
                  'output'    => array(
                    'color' => '.head-btn',
                )
              ),
              array(
                  'id' => 'header_btn_bg_color',
                  'type' => 'color',
                  'title' => esc_html__( 'Button Background Color' , 'webnwell' ),
                  'default'  => '#CC1E2F',
                  'output'    => array(
                    'background-color' => '.head-btn',
                )
              ),
              array(
                  'id' => 'header_btn_hover_text_color',
                  'type' => 'color',
                  'title' => esc_html__( 'Button Hover Text Color' , 'webnwell' ),
                  'default'  => '#000000',
                  'output'    => array(
                    'color' => '.head-btn:hover',
                )
              ),
              array(
                  'id' => 'header_btn_hover_bg_color',
                  'type' => 'color',
                  'title' => esc_html__( 'Button Hover Background Color' , 'webnwell' ),
                  'default'  => '#D1D1D9',
                  'output'    => array(
                    'background-color' => '.head-btn:hover',
                )
              ),
            ),
    )) ;



    /** For Footer */
    Redux::set_section( $opt_name, array(
      'title'  => esc_html__( 'Footer', 'webnwell' ),
      'id'     => 'basic_footer',
      'desc'   => esc_html__( 'Footer Setting Options', 'webnwell' ),
      'icon'   => 'el el-tasks',
      'fields' => array(            
        array(
            'id' => 'webnwell_footer_bg_color',
            'type' => 'color',
            'title' => __( 'Background Color' , 'webnwell' ),
            'default'  => '#171717',
            'output'    => array(
              'background-color' => '.site-footer', 
        )),
        array(
            'id' => 'webnwell_footer_heading_text_color',
            'type' => 'color',
            'title' => __( 'Heading Text Color' , 'webnwell' ),
            'default'  => '#FFFFFF',
            'output'    => array(
              'color' => '.footer-widget h1, .footer-widget h2, .footer-widget h3, .footer-widget h4, .footer-widget h5 ', 
        )),
        array(
            'id' => 'webnwell_footer_body_text_color',
            'type' => 'color',
            'title' => __( 'Body Text Color' , 'webnwell' ),
            'default'  => '#B2B1B9',
            'output'    => array(
              'color' => '.footer-widget p', 
        )),
        array(
            'id' => 'webnwell_footer_body_link_color',
            'type' => 'color',
            'title' => __( 'Link Text Color' , 'webnwell' ),
            'default'  => '#B2B1B9',
            'output'    => array(
              'color' => '.footer-widget a', 
        )),
        array(
            'id' => 'webnwell_footer_body_link_hover_color',
            'type' => 'color',
            'title' => __( 'Link Hover Text Color' , 'webnwell' ),
            'default'  => '#CC1E2F',
            'output'    => array(
              'color' => '.footer-widget a:hover', 
        )),          
      )
  ) );

    Redux::set_section( $opt_name, array(
      'title'  => esc_html__( 'Footer Layout', 'webnwell' ),
      'id'     => 'basic_footer_layout',
      'desc'   => esc_html__( 'Footer Layout Setting Options', 'webnwell' ),
      'icon'   => 'el el-random',
      'subsection'  =>  true,
      'fields' => array(            
        array(
          'id'       => 'footer-layout',
          'type'     => 'radio',
          'title'    => esc_html__('Select Footer Layout Style', 'webnwell'), 
          'data'  => array(
              '1' => esc_html__( 'Footer Layout Style | 4 Column', 'webnwell' ), 
              '2' => esc_html__( 'Footer Layout Style | 3 Column', 'webnwell' ),
              '3' => esc_html__( 'Footer Layout Style | 2 Column', 'webnwell' ),
              '4' => esc_html__( 'Footer Layout Style | 1 Column', 'webnwell' ),
          ),
          'default' => '1'
        ),
        
      )         
      
  ) );

    Redux::set_section( $opt_name, array(
      'title'  => esc_html__( 'Footer Copyright', 'webnwell' ),
      'id'     => 'footer_copyright',
      'desc'   => esc_html__( 'Footer Copyright Setting Options', 'webnwell' ),
      'icon'   => 'el el-file-edit',
      'subsection'  =>  true,
      'fields' => array(    
        array(
            'id' => 'footer_copyright_webnwell',
            'type' => 'textarea',
            'title' => __( 'Footer Copyright' , 'webnwell' ),
            'desc' => __( 'Type your copyright text here ' , 'webnwell' ),
            'default' => esc_html__( 'Proudly powered by © Webnwell ', 'webnwell' ),
        ),
          array(
            'id' => 'footer_copyrightYear_webnwell',
            'type' => 'switch',
            'title' => esc_html__( 'Copyright Year' , 'webnwell' ),
            'desc' => esc_html__( 'Show or Hide Copyright Year' , 'webnwell' ),
            'default'  => true,
        ),
        
      )         
      
  ) );


  /** Typography Settings */
  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'Typography Settings', 'webnwell' ),
    'id'     => 'gen-font-settings',
    'desc'  => 'General Typography (FONT) settings like changing Font Color, Font Size and many more',
    'icon'   => 'el el-font',
    'fields' => array(      
      array(
        'id' => 'body_text_color',
        'type' => 'color',
        'title' => __( 'Body Text Color' , 'webnwell' ),
        'desc' => __( 'It will change all body text color in "P" tag' , 'webnwell' ),
        'default'  => '#666',
      ),
      array(
        'id' => 'heading_text_color',
        'type' => 'color',
        'title' => __( 'Heading Text Color' , 'webnwell' ),
        'desc' => __( 'It will change all body heading color in "H1", "H2", "H3", "H4", "H5", "H6" tag' , 'webnwell' ),
        'default'  => '#000000',
      ),
    )
  ));

  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'Hero Section Font', 'webnwell' ),
    'id'     => 'hero-font-settings',
    'desc'  => 'Home page Hero Section Typography (FONT) settings like changing Font Color, Font Size and many more',
    'icon'   => 'el el-graph',
    'subsection'  =>  true,
    'fields' => array(      
      array(
        'id' => 'hero_heading_text_color',
        'type' => 'color',
        'title' => __( 'Heading Text Color' , 'webnwell' ),
        'desc' => __( 'It will change home page Hero section heading color in "H1" tag' , 'webnwell' ),
        'default'  => '#000000',
      ),
      array(
        'id' => 'hero_text_color',
        'type' => 'color',
        'title' => __( 'Hero Text Color' , 'webnwell' ),
        'desc' => __( 'It will change home page Hero section text color in "P" tag' , 'webnwell' ),
        'default'  => '#000000',
      ),
    )
  ));

  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'CTA Section Font', 'webnwell' ),
    'id'     => 'cta-font-settings',
    'desc'  => 'Home page CTA "Call to Action" Section Typography (FONT) settings like changing Font Color, Font Size and many more',
    'icon'   => 'el el-pencil-alt',
    'subsection'  =>  true,
    'fields' => array(      
      array(
        'id' => 'cta_heading_text_color',
        'type' => 'color',
        'title' => __( 'Heading Text Color' , 'webnwell' ),
        'desc' => __( 'It will change home page CTA "Call to Action" section heading color in "H1" tag' , 'webnwell' ),
        'default'  => '#FFFFFF',
      ),
      array(
        'id' => 'cta_text_color',
        'type' => 'color',
        'title' => __( 'cta Text Color' , 'webnwell' ),
        'desc' => __( 'It will change home page CTA "Call to Action" section text color in "P" tag' , 'webnwell' ),
        'default'  => '#FFFFFF',
      ),
    )
  ));

  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'Button Settings', 'webnwell' ),
    'id'     => 'general-button-settings',
    'desc'  => 'General button settings like changing button color and hover color',
    'icon'   => 'el el-stop-alt',
    'fields' => array(      
      array(
          'id' => 'gen_btn_bg_color',
          'type' => 'color',
          'title' => __( 'Button Background Color' , 'webnwell' ),
          'desc' => __( 'It will change all button background color' , 'webnwell' ),
          'class' => 'btn_secondary',
          'default'  => '#CC1E2F',
      ),
      array(
          'id' => 'gen_btn_text_color',
          'type' => 'color',
          'title' => __( 'Button Text Color' , 'webnwell' ),
          'desc' => __( 'It will change all button text color' , 'webnwell' ),
          'class' => 'btn_secondary',
          'default'  => '#FFFFFF',
      ),
      array(
          'id' => 'gen_btn_bg_hover_color',
          'type' => 'color',
          'title' => __( 'Button Background Hover Color' , 'webnwell' ),
          'desc' => __( 'It will change all button background hover color' , 'webnwell' ),
          'class' => 'btn_secondary',
          'default'  => '#000000',
      ),
      array(
          'id' => 'gen_btn_text_hover_color',
          'type' => 'color',
          'title' => __( 'Button Text Hover Color' , 'webnwell' ),
          'desc' => __( 'It will change all button text hover color' , 'webnwell' ),
          'class' => 'btn_secondary',
          'default'  => '#FFFFFF',
      ),
    )
  ));
  
  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'Hero Button Settings', 'webnwell' ),
    'id'     => 'hero-button-settings',
    'desc'  => 'Home page Hero section button settings like changing button color and hover color',
    'icon'   => 'el el-time-alt',
    'subsection'  =>  true,
    'fields' => array(      
      array(
          'id' => 'hero_btn_background_color',
          'type' => 'color',
          'title' => __( 'Button Background Color' , 'webnwell' ),
          'desc' => __( 'It will change home page hero section button background color' , 'webnwell' ),
          'default'  => '#CC1E2F',
      ),
      array(
          'id' => 'hero_btn_text_color',
          'type' => 'color',
          'title' => __( 'Button Text Color' , 'webnwell' ),
          'desc' => __( 'It will change home page hero section button text color' , 'webnwell' ),
          'default'  => '#FFFFFF',
      ),
      array(
          'id' => 'hero_btn_bg_hover_color',
          'type' => 'color',
          'title' => __( 'Button Background Hover Color' , 'webnwell' ),
          'desc' => __( 'It will change home page hero section button background hover color' , 'webnwell' ),
          'default'  => '#000000',
      ),
      array(
          'id' => 'hero_btn_text_hover_color',
          'type' => 'color',
          'title' => __( 'Button Text Hover Color' , 'webnwell' ),
          'desc' => __( 'It will change home page hero section button text hover color' , 'webnwell' ),
          'default'  => '#FFFFFF',
      ),
    )
  ));

  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'CTA Button Settings', 'webnwell' ),
    'id'     => 'cta-button-settings',
    'desc'  => 'CTA "Call To Action" section button settings like changing button color and hover color',
    'icon'   => 'el el-magnet',
    'subsection'  =>  true,
    'fields' => array(      
      array(
          'id' => 'cta_btn_background_color',
          'type' => 'color',
          'title' => __( 'Button Background Color' , 'webnwell' ),
          'desc' => __( 'It will change CTA "Call To Action" section button background color' , 'webnwell' ),
          'default'  => '#CC1E2F',
      ),
      array(
          'id' => 'cta_btn_text_color',
          'type' => 'color',
          'title' => __( 'Button Text Color' , 'webnwell' ),
          'desc' => __( 'It will change CTA "Call To Action" section button text color' , 'webnwell' ),
          'default'  => '#FFFFFF',
      ),
      array(
          'id' => 'cta_btn_bg_hover_color',
          'type' => 'color',
          'title' => __( 'Button Background Hover Color' , 'webnwell' ),
          'desc' => __( 'It will change CTA "Call To Action" section button background hover color' , 'webnwell' ),
          'default'  => '#000000',
      ),
      array(
          'id' => 'cta_btn_text_hover_color',
          'type' => 'color',
          'title' => __( 'Button Text Hover Color' , 'webnwell' ),
          'desc' => __( 'It will change CTA "Call To Action" section button text hover color' , 'webnwell' ),
          'default'  => '#FFFFFF',
      ),
    )
  ));

  Redux::set_section( $opt_name, array(
    'title'  => esc_html__( 'General Settings', 'webnwell' ),
    'id'     => 'general-settings',
    'desc'  => 'General settings like hide Page Title and many more ',
    'icon'   => 'el el-wrench',
    'fields' => array(
      array(
          'id' => 'page_title_section',
          'type' => 'switch',
          'title' => __( 'Hide Page Title Section' , 'webnwell' ),
          'desc' => __( 'You can hide Page Title Section from here, if you select ON it will remove Page Title Section from entire website ' , 'webnwell' ),
          'default'  => 0,
      ),
      array(
          'id' => 'page_title_only',
          'type' => 'switch',
          'title' => __( 'Hide Only Page Title' , 'webnwell' ),
          'desc' => __( 'You can hide Page Title from here, if you select ON it will remove only Page Title from entire website ' , 'webnwell' ),
          'default'  => 0,
      ),
      array(
          'id' => 'bread-crumb',
          'type' => 'switch',
          'title' => __( 'Hide Bread Crumb' , 'webnwell' ),
          'desc' => __( 'You can hide Bread Crumb from here, if you select ON it will remove only Bread Crumb from entire website ' , 'webnwell' ),
          'default'  => 0,
      ),
           
    )
  ));
  