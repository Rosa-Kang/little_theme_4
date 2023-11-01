<?php

/**
 * The template for displaying the footer.
 *
 * @package White_Canvas_Design_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer has-background-primary" role="contentinfo">
  <div class="footer-wrapper container content-wrapper">
    <?php
    $post_id = get_field('business_info_id', 'option');
    $footer_copyright_textarea = get_field('footer_copyright_textarea', $post_id);
    ?>
    <div class="is-hidden-desktop pt-5">
      <?php get_template_part('template-parts/logo/logo-alt'); ?>
    </div>
    <div class="w-100 is-flex footer-elements is-justify-content-space-between py-6">
      <div class="footer-menu-left-wrapper">
        <?php wp_nav_menu(array('menu' => 'Footer Menu', 'menu_id' => 'footer-left-menu')); ?>
        <?php get_template_part('template-parts/contact/contact-email'); ?>
      </div>
      <div class="is-hidden-touch">
        <?php get_template_part('template-parts/logo/logo-alt'); ?>
      </div>
      <div class="footer-menu-right-wrapper">
        <?php get_template_part('template-parts/icon/icons-social'); ?>
      </div>
    </div>


    <div class="is-size-7 has-text-centered">
      <?= $footer_copyright_textarea; ?>
      <span class="is-flex is-justify-content-center is-align-items-center flex-column-ultra-small-device">
        <?php wp_nav_menu(array('menu' => 'Privacy Policy', 'menu_class' => 'privacy-policy')); ?>
        <div class="footer-bar">Website design by&nbsp;
          <a href="https://whitecanvasdesign.ca" class="has-color-light-bis" target="_blank" rel="noopener noreferrer">@White
            Canvas Design</a>
        </div>

      </span>
    </div>

  </div><!-- .footer-wrapper -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php get_template_part('template-parts/footer/footer-scripts'); ?>
</body>

</html>
