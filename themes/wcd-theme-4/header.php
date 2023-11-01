<?php

/**
 * The header for our theme.
 *
 * @package White_Canvas_Design_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- google font end -->
  <!-- Adobe Font -->
  <link rel="stylesheet" href="https://use.typekit.net/sxg0djz.css">
  <!-- Adobe Font END -->
  <?php wp_head(); ?>
  <?php get_template_part('template-parts/header/header-scripts'); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

    <header id="masthead" class="site-header" role="banner">
      <div class="site-branding">
        <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>"
            rel="home"><?php bloginfo('name'); ?></a></h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
      </div><!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation backdrop-filter" role="navigation">
        <div class="main-navigation-container container content-wrapper py-0">

          <div class="mobile-menu-wrapper">
            <?php get_template_part('template-parts/logo/logo'); ?>
            <button id="toggle" aria-label="Menu">
              <div class="menu-icon"></div>
              <div class="menu-icon"></div>
              <div class="menu-icon"></div>
            </button>
          </div>

          <div class="desktop-menu-wrapper middle">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
          </div>
          <div class="desktop-menu-wrapper">
            <?php wp_nav_menu(array('theme_location' => 'header-button', 'menu_id' => 'header-button')); ?></div>
        </div><!-- .main-navigation-container -->
      </nav><!-- #site-navigation -->

      <div class="dimmed"></div>
      <div id="popout" class="popout-menu-wrapper backdrop-filter">
        <div class="popout-menu px-5">
          <?php wp_nav_menu(array('theme_location' => 'mobile-menu', 'menu_id' => 'mobile-menu', 'menu_class' => 'menu list-style-none', 'container-class' => 'mobile-menu-container')); ?>
        </div>
      </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">