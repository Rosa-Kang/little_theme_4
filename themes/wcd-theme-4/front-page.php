<?php

/**
 * The main template file.
 *
 * @package White_Canvas_Design_Theme
 */
get_header();

get_template_part('template-parts/hero/hero');
get_template_part('template-parts/section/intro');
get_template_part('template-parts/card/cards-quad');
get_template_part('template-parts/callout/callout-right');
get_template_part('template-parts/slider/slider-testimonials');
get_template_part('template-parts/section/signup-banner');

get_footer();
