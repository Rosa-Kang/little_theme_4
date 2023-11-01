<?php

/**
 * Template part for displaying callout on Image.
 *
 * @package White_Canvas_Design_Theme
 */

$background_image = get_field('callout_on_image_image');
$subtitle = get_field('callout_on_image_subtitle');
$title = get_field('callout_on_image_title');
$content = get_field('callout_on_image_content');
$label = get_field('callout_on_image_label');
$link = get_field('callout_on_image_link');
?>

<section class="callout-on-image">
  <div class="background-image"
    style="background:url(<?= $background_image; ?>) center/cover no-repeat; min-height:401px;"></div>

  <div class="content-wrapper container is-relative">
    <div class="callout-on-image-container py-0">
      <div class="callout-on-image-text-container has-background-primary-light p-6 has-text-centered">
        <div class="text-box">
          <h2 class="is-size-5 is-capitalized py-4"><?= $subtitle; ?></h2>
          <h3 class="font-xxl is-capitalized is-family-secondary py-3"><?= $title; ?></h3>
          <div class="content"><?= $content; ?></div>
        </div>
        <div class="has-text-centered">
          <?php if ($label) : ?>
          <div class="button-wrapper">
            <a href="<?= $link; ?>" class="button is-primary is-size-6"><?= $label; ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

</section><!-- .callout-on-image -->