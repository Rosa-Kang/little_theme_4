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

if ($image) {
  $image_url = $image['url'];
  $image_alt = $image['alt'];
}
?>

<section class="callout-left has-background-primary py-6" data-aos="fade-up" data-aos-easing="ease" data-aos-offset="0">
  <div class="container content-wrapper">
    <div class="columns callout-left__shifted-to-top">
      <div data-aos="fade-right" data-aos-easing="ease" class="column is-6-tablet is-5-desktop">
        <?php if ($image) : ?>
        <figure class="m-0 image">
          <img src="<?= $image_url; ?>" alt="<?= $image_alt; ?>">
        </figure>
        <?php endif; ?>
      </div>
      <div data-aos="fade-left" data-aos-easing="ease" class="column is-6-tablet is-7-desktop">
        <div class="callout-left-text-wrapper">
          <h2 class="subtitle mb-0"><?= $subtitle; ?></h2>
          <h3 class="section-title pt-4 pb-5"><?= $title; ?></h3>
          <div class="content body-text has-text-light"><?= $content; ?></div>
        </div>
        <?php if ($link) : ?>
        <div class="button-wrapper mt-6">
          <a href="<?= $link; ?>" class="button is-primary"><?= $label; ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>