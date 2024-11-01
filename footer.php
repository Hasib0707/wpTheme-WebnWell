<?php

get_option_value('footer-layout');

if(get_option_value('footer-layout') == 1){
  get_template_part( 'template-parts/footer/footer' );
} elseif(get_option_value('footer-layout') == 2) {
  get_template_part( 'template-parts/footer/footer-two' );
} elseif(get_option_value('footer-layout') == 3){
  get_template_part( 'template-parts/footer/footer-three' );
} elseif(get_option_value('footer-layout') == 4){
  get_template_part( 'template-parts/footer/footer-four' );
} else {
  get_template_part( 'template-parts/footer/footer' );
}

?>