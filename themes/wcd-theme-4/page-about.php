<?php

/**
 * Template Name: About Page
 *
 * The template for displaying About page.
 *
 * @package White_Canvas_Design_Theme
 */
get_header();

get_template_part('template-parts/hero/hero');
get_template_part('template-parts/section/intro');
get_template_part('template-parts/callout/callout-left');
get_template_part('template-parts/card/cards-team-members');
get_template_part('template-parts/section/modal-team-member');
get_template_part('template-parts/callout/callout-right');
get_template_part('template-parts/callout/callout');
get_template_part('template-parts/slider/slider-clients');
get_template_part('template-parts/section/ig-feed');

get_footer();