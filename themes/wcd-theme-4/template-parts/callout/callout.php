<?php

/**
 * Template part for displaying Info.
 *
 * @package White_Canvas_Design_Theme
 */

$subtitle = get_field('callout_subtitle');
$title = get_field('callout_title');
$content = get_field('callout_content');
$label = get_field('callout_button_label');
$link = get_field('callout_button_link');
$background = get_field('callout_background');

if ($background && $background == 'has-background-imagery') {
  $color = 'has-text-light';
  $button_type =  'button is-secondary';
} else {
  $color = 'has-text-primary';
  $button_type =  'button is-tertiary';
}
?>
<section class="callout is-relative <?= $background; ?>">
  <div
    class="container content-wrapper is-flex is-flex-direction-column is-justify-content-center is-align-items-center w-100">

    <div class="text-container has-text-centered is-flex is-flex-direction-column">
      <h2 class="subtitle <?= $color; ?> mb-0"><?= $subtitle; ?></h2>
      <h3 class="banner-title <?= $color; ?> is-family-secondary mb-2 py-5"><?= $title; ?></h3>
      <div class="body-text <?= $color; ?> mx-6">
        <?= $content; ?>
      </div>
      <?php if ($link) : ?>
      <div data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1500"
        class="hero-button-wrapper mt-6">
        <a href="<?= $link; ?>" class="<?= $button_type; ?> is-uppercase"><?= $label; ?></a>
      </div>
      <?php endif; ?>
    </div>


  </div>
</section><!-- .callout -->