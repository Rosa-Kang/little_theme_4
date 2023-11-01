<?php

/**
 * Template part for displaying hero - top.
 *
 * @package White_Canvas_Design_Theme
 */

$post_id = get_field('posts_page_id', 'option');
$hero_image_position = get_field('hero_image_position');
$hero_video = get_field('hero_video');
$title_top = get_field('hero_title_top');
$title_bottom = get_field('hero_title_bottom');
$label = get_field('hero_button_label');
$link = get_field('hero_button_link');

if ($hero_video) {
  $class = 'with-video';
  $background_url = '';
  $background_alt = '';
} elseif (is_home()) {
  $class = 'with-video';
  $background_url = wp_get_attachment_url(get_post_thumbnail_id($post_id));
  $background_alt = get_post_meta($post_id, '_wp_attachment_image_alt', true);
} else {
  $class = '';
  $background_url = get_the_post_thumbnail_url();
  $background_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
}

if (!$hero_image_position) {
  $hero_image_position = 'center';
}
?>

<section class="hero <?= $class; ?> is-relative background-offset"
  style="background:url(<?= $background_url; ?>) <?= $hero_image_position; ?>/cover no-repeat">

  <?php if ($hero_video) : ?>
  <video class="hero-video" src="<?= $hero_video; ?>" autoplay loop muted playsinline preload="auto"></video>
  <?php endif; ?>

  <?php if ($title_top || $title_bottom) : ?>
  <div class="hero-body container content-wrapper">
    <div class="is-flex is-flex-direction-column text-container is-relative w-100">
      <h1 class="has-text-light is-family-secondary my-5"><?= $title_top; ?><br><?= $title_bottom; ?>
      </h1>
      <?php if ($link) : ?>
      <div class="hero-button-wrapper has-text-left">
        <a href="<?= $link; ?>" class="button is-secondary is-uppercase"><?= $label; ?></a>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php endif; ?>
  <!-- hero body END -->
</section><!-- .hero -->