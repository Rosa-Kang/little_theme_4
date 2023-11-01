<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package White_Canvas_Design_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="fixed-header"></div>
    <section class="error-404 not-found container content-wrapper has-text-centered">


      <header class="page-header">
        <h1 class="page-title has-text-primary text-shadow-none" style="font-size:26px;">
          <?php echo esc_html('Oops! That page can&rsquo;t be found.'); ?></h1>
      </header><!-- .page-header -->

      <div class="page-content mt-0">
        <p><?php echo esc_html('It looks like nothing was found at this location.'); ?></p>

        <div class="my-6">
          <?php get_template_part('template-parts/logo/logo'); ?>
        </div>

        <div class="button-wrapper pb-4">
          <a href="<?php echo esc_url(home_url()); ?>" class="button is-primary body-text is-uppercase">go to home</a>
        </div>
      </div><!-- .page-content -->
    </section><!-- .error-404 -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>