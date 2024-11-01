<?php
/*
*
Template Name: Front | Home Page 
*/
get_header();
if ( have_posts() ) :  
    the_post();
    
?>

<!-- Hero style 2 -->
  <section id="bigHero2">
    <div class="container">
      <div class="row mob-box">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="hero-content">
            <h1 class="display__heading mb-3" id="hero-heading">
              <?php echo esc_html( get_theme_mod( 'webnwell_hero_heading', __( 'The Best Marketing Agency', 'webnwell' ))); ?>
            </h1>  
            <?php
              if(get_theme_mod( 'hero_display_subheading', 1 )):
            ?>          
              <h5 class="heroSub__heading" id="hero-subheading">              
                <?php echo wp_kses_post(get_theme_mod( 'webnwell_hero_subheading',__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.',  'webnwell' ))); ?>
              </h5>
              <?php endif; ?>  
              
              <?php
              $defaults_btn = [
                [
                  'link_text' => esc_html__( 'Book Now', 'webnwell' ),
                  'link_url'  => esc_url( 'https://wordpress.org/' ),
                  'link_target' => '_self',
                ]
              ];

              $btn_settings = get_theme_mod( 'heroButton', $defaults_btn );
              foreach ( $btn_settings as $setting_btn ) :
              ?>
            
            <a href="<?php echo $setting_btn['link_url']; ?>" id="hero-button" class="hero_button_home mt-5 mr-2" target='<?php echo $setting_btn['link_target']; ?>'>
            <?php echo $setting_btn['link_text']; ?>
            </a>            
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="hero-image">
            <img id="hero-img" src="<?php echo esc_url(get_theme_mod('hero-image',get_theme_file_uri('assets/images/hero.webp'))); ?>" alt="">            
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="titleBox">
    <div class="container titleBox-container">
      <div class="row">
        <div class="col-md-6">
          <div class="titleBox-left">
            <p id="bottom-subheading" class="sub__heading"><?php echo wp_kses_post( get_theme_mod( 'webnwell_hero_bottom_subheading',__( 'Service Locations', 'webnwell' ))); ?></p>
            <h3 id="bottom-heading"><?php echo wp_kses_post(get_theme_mod( 'webnwell_hero_bottom_heading',__( 'City & Surrounding Areas', 'webnwell' ))); ?></h3>
          </div>
        </div>
        <div class="col-md-6">
          <div class="titleBox-right">
            <p id="bottom-description"><?php echo wp_kses_post(get_theme_mod( 'webnwell_hero_bottom_description', __( 'Lorem ipsum dolor sit amet consectetur adipiscing elit ornare porta, ut tempor risus auctor faucibus vulputate purus class a',  'webnwell' ) )); ?></p>
            <?php
              $bottom_link_target = '_self';
              $target = esc_attr( get_theme_mod( 'webnwell_hero_bottom_button_target' ) );
              if($target == true) {
                $bottom_link_target = '_blank';
              }
            ?>
            <a id="bottom-button_text" href="<?php echo esc_url(get_theme_mod( 'webnwell_hero_bottom_button_link', 'https://gowebnwell.com')); ?>" class="text-btn" target="<?php echo $bottom_link_target; ?>"><?php echo esc_html(get_theme_mod( 'webnwell_hero_bottom_button_text', __( 'Our Happy Clients', 'webnwell' ))); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="shortAbout">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center">
          <div class="shortAbout-left">            
            <p class="sub__heading" id="about-subheading"><?php echo wp_kses_post(get_theme_mod( 'webnwell_about_subheading',__( 'About Us', 'webnwell' ))); ?></p>           
            <h2 id="about-heading" class="title-2"><?php echo wp_kses_post(get_theme_mod( 'webnwell_about_heading',__( 'Nemo enim ipsam voluptatem quia voluptas sit', 'webnwell' ))); ?></h2>
            <p id="about-description"> 
            <?php echo wp_kses_post(get_theme_mod( 'webnwell_about_description',__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit risus eros curabitur molestie lectus auctor, suspendisse sagittis litora felis venenatis', 'webnwell' ))); ?>
            </p>
            <?php
              $about_link_target = '_self';
              $about_target = esc_attr( get_theme_mod( 'webnwell_about_target' ) );
              if($about_target == true) {
                $about_link_target = '_blank';
              }
            ?>
            <a href="<?php echo esc_url(get_theme_mod( 'webnwell_about_button_link', 'https://gowebnwell.com')); ?>" target="<?php echo $about_link_target; ?>" id="about-text-btn" class="text-btn" ><?php echo esc_html(get_theme_mod( 'webnwell_about_button_text',__( 'Know More', 'webnwell' ))); ?></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="shortAbout-right">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="shortAbout-images-left"  id="about-image-one">
                  <?php $img_about_default1 = get_theme_file_uri('assets/images/shortAbout1.webp'); ?>
                  <img src="<?php echo esc_url( get_theme_mod('about_image_one',$img_about_default1)); ?>" alt="">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
              <?php $img_about_default2 = get_theme_file_uri('assets/images/shortAbout2.webp'); ?>
                <div class="shortAbout-images-right" id="about-image-two">
                  <img src="<?php echo esc_url(get_theme_mod('about_image_two',$img_about_default2)); ?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="shortServices">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="shortAbout-top-box">
            <p id="service-subheading" class="sub__heading"><?php echo wp_kses_post( get_theme_mod('webnwell_service_subheading', __( 'Our Service',  'webnwell' ))); ?></p>
            <h2 id="service-heading" class="title-2">
              <?php echo wp_kses_post( get_theme_mod( 'webnwell_service_heading', __('Quis autem vel eum iure <br>Reprehenderit qui in ea.',  'webnwell') )); ?>
            </h2>
            <p id="service-description"><?php echo wp_kses_post(get_theme_mod( 'webnwell_service_description', __('At vero eos et accusamus et iusto odio dignissimos ducimus...',  'webnwell') )); ?></p>
          </div>
          <div class="shortAbout-card-box mt-5">
            <div class="row">
            <?php
                $webnwell_services_column = get_theme_mod( 'webnwell_service_number_of_items', 4 );
              ?>
              <?php
              // Default values for 'my_repeater_setting' theme mod.
                $defaults = [
                  [
                    'image' =>  get_template_directory_uri() .'/assets/images/service1.webp',
                    'heading_text' => esc_html__( 'Social Media Marketing',  'webnwell' ),
                    'heading_text_url' => esc_url( '#' ),
                    'description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
                    'button_text' => esc_html__( 'Book Now',  'webnwell' ),
                    'button_url' => esc_url( '#' ),
                  ],                  
                  [
                    'image' =>  get_template_directory_uri() .'/assets/images/service2.webp',
                    'heading_text' => esc_html__( 'Website Strategy',  'webnwell' ),
                    'heading_text_url' => esc_url( '#' ),
                    'description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
                    'button_text' => esc_html__( 'Book Now',  'webnwell' ),
                    'button_url' => esc_url( '#' ),
                  ],                  
                  [
                    'image' =>  get_template_directory_uri() .'/assets/images/service3.webp',
                    'heading_text' => esc_html__( 'Lead Generation',  'webnwell' ),
                    'heading_text_url' => esc_url( '#' ),
                    'description' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipiscing, elit ligula aliquet tellus bibendum lobortis, et vulputate.',  'webnwell' ),
                    'button_text' => esc_html__( 'Book Now',  'webnwell' ),
                    'button_url' => esc_url( '#' ),
                  ]                  
                ];
                $settings = get_theme_mod( 'service_repeater_setting', $defaults ); ?>
                  <?php foreach( $settings as $setting ) : ?>
                    <div class="col-md-<?php echo esc_attr( $webnwell_services_column ); ?> col-sm-12">
                      <div class="web-card">
                        <div class="card-img">
                          <img src="<?php echo $setting['image']; ?>" alt="">
                        </div>
                        <div class="card-content">
                          <h3 id='card-title'><a class="title-link" href="<?php echo $setting['heading_text_url']; ?>"><?php echo $setting['heading_text']; ?></a></h3>
                          <p><?php echo $setting['description']; ?></p>
                          <a href="<?php echo $setting['button_url']; ?>" class="btn_secondary mt-2"><?php echo $setting['button_text']; ?></a>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="CTAbanner">
    <div class="container">
      <div class="row">
        <div class="col-12 pb-5 text-center">
          <h2 id="cta-heading" class="title-2 cta-title"><?php echo wp_kses_post( get_theme_mod( 'webnwell_cta_heading', __( 'Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus', 'webnwell'))); ?></h2>
          <p id="cta-text">
            <?php echo wp_kses_post( get_theme_mod( 'webnwell_cta_text', __('Lorem ipsum dolor sit amet consectetur adipiscing elit a, viverra nulla molestie netus imperdiet magna dictum, <br>ultrices mattis sagittis placerat scelerisque curae tincidunt.',  'webnwell') )); ?>
          </p> 
          <div class="mt-5">
            <?php
              $cta_btn = [
                [
                  'link_text' => esc_html__( 'Book Now', 'webnwell' ),
                  'link_url'  => esc_url( 'https://wordpress.org/' ),
                  'link_target' => '_self',
                ]
              ];

              $cta_btn_settings = get_theme_mod( 'ctaButton', $cta_btn );
              foreach ( $cta_btn_settings as $setting_btn_cta ) :
              ?>
            <a id="cta-text-btn" href="<?php echo $setting_btn_cta['link_url'] ?>" class="btn_CTA" target='<?php echo $setting_btn_cta['link_target']; ?>'><?php echo $setting_btn_cta['link_text'] ?></a> 
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="chooseUs">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 chooseUs-left">
          <p id="choose-subheading" class="sub__heading"><?php echo wp_kses_post( get_theme_mod( 'webnwell_choose_subheading', __( 'Why Choose Us',  'webnwell' ) ) ); ?></p>
          <h2 id="choose-heading" class="title-2"><?php echo wp_kses_post( get_theme_mod( 'webnwell_choose_heading', __( 'Excepteur sint occaecat cupidatat?',  'webnwell' ) )); ?></h2>
          <p id="choose-description"><?php echo wp_kses_post( get_theme_mod( 'webnwell_choose_description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',  'webnwell' ) ) ); ?></p>
          <ul class="chooseUs-list">
            <?php
              $choose_defaults = [
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
                
              ];
              $choose_settings = get_theme_mod( 'choose_repeater_setting', $choose_defaults );
              foreach ( $choose_settings as $choose_item ) :
            ?>
            <li class="chooseUs-list-item"><?php echo $choose_item['item_text']; ?></li>
            <?php endforeach; ?>
          </ul>
            <?php
              $choose_btn = [
                [
                  'link_text' => esc_html__( 'Book Now', 'webnwell' ),
                  'link_url'  => esc_url( 'https://wordpress.org/' ),
                  'link_target' => '_self',
                ]
              ];

              $choose_btn_settings = get_theme_mod( 'choose_button_setting', $choose_btn );
              foreach ( $choose_btn_settings as $setting_btn_choose ) :
            ?>
          <a id="choose-text-btn" href="<?php echo $setting_btn_choose['link_url']; ?>" class="btn_secondary mt-4" target='<?php echo $setting_btn_choose['link_target']; ?>'><?php echo $setting_btn_choose['link_text']; ?></a>
          <?php endforeach; ?>
        </div>
        <div class="col-lg-6 col-md-12 chooseUs-right">
          <img id="choose_image" src="<?php echo esc_url(get_theme_mod( 'choose_image', get_theme_file_uri('/assets/images/choose_us.webp'))); ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <?php endif;

  get_footer();