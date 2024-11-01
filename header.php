<?php 
get_option_value('header-layout');

if(get_option_value('header-layout') == 2){
  get_template_part( 'template-parts/header/header' );
} elseif(get_option_value('header-layout') == 1) {
  get_template_part( 'template-parts/header/header-left' );
} elseif(get_option_value('header-layout') == 3){
  get_template_part( 'template-parts/header/header-center' );
} else {
  get_template_part( 'template-parts/header/header' );
}