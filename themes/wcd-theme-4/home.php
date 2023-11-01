<?php

/**
 * The home template file.
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php get_template_part('template-parts/hero/hero'); ?>
    <?php get_template_part('template-parts/section/intro'); ?>

    <?php if (have_posts()) : ?>
    <?php get_template_part('template-parts/card/cards-blog'); ?>

    <?php else : ?>

    <?php get_template_part('template-parts/content/content', 'none'); ?>

    <?php endif; ?>

    <?php get_template_part('template-parts/section/signup-banner'); ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>