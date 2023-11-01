<?php

/**
 * Template part for displaying signup newsletter.
 *
 * @package White_Canvas_Design_Theme
 */

$post_id = get_field('posts_page_id', 'option');
$business_id = get_field('business_info_id', 'option');
$title = get_field('newsletter_title', $business_id);
$description = get_field('newsletter_description', $business_id);
$shortcode = get_field('newsletter_embedded_form', $business_id);
?>
<?php if ($shortcode) : ?>
  <section class="sign-up-newsletter is-relative z-index-10 py-6" data-aos="fade-zoom-in" data-aos-easing="ease">
    <div class="container content-wrapper">
      <div class="text-container has-text-centered">
        <h2 class="is-uppercase unique-title is-family-primary has-text-weight-bold has-text-primary py-5">
          <?= $title; ?></h2>
        <div class="description body-text is-family-primary">
          <?= $description; ?>
        </div>
      </div>

      <div class="mail-chimp-container">
        <?php echo do_shortcode($shortcode); ?>
      </div>
    </div>
  </section>
<?php endif; ?>
