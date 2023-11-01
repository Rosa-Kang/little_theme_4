<?php

/**
 * Template Part for displaying Callout Image left
 */

$subtitle = get_field('callout_image_left_subtitle');
$title = get_field('callout_image_left_title');
$content = get_field('callout_image_left_content');
$image = get_field('callout_image_left_image');
$label = get_field('callout_image_left_button_label');
$link = get_field('callout_image_left_button_link');
$border_color = get_field('callout_image_left_border_color');

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}
?>

<section class="callout-image-left pt-6 has-background-info-invert" data-aos="fade-up" data-aos-easing="ease"
  data-aos-offset="0">
  <div class="container content-wrapper">
    <div class="columns callout-image-left__shifted-to-top">
      <div data-aos="fade-right" data-aos-easing="ease" class="column is-6-tablet is-5-desktop">
        <?php if ($image) : ?>
        <figure class="m-0 image">
          <img src="<?= $image_url; ?>" alt="<?= $image_alt; ?>" style="border: 2px solid <?= $border_color; ?>">
        </figure>
        <?php endif; ?>
      </div>
      <div data-aos="fade-left" data-aos-easing="ease" class="column is-6-tablet is-7-desktop">
        <div class="callout-image-left-text-wrapper">
          <h2 class="subtitle mb-0"><?= $subtitle; ?></h2>
          <h3 class="section-title pt-4 pb-5"><?= $title; ?></h3>
          <div class="content body-text"><?= $content; ?></div>
        </div>
        <?php if ($link) : ?>
        <div class="button-wrapper mt-4">
          <a href="<?= $link; ?>" class="button is-primary"><?= $label; ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>