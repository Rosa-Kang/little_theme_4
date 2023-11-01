<?php

/**
 * Template part for displaying callout with image Right.
 *
 * @package White_Canvas_Design_Theme
 */

$subtitle = get_field('callout_image_right_subtitle');
$title = get_field('callout_image_right_title');
$content = get_field('callout_image_right_content');
$label = get_field('callout_image_right_button_label');
$link = get_field('callout_image_right_button_link');
$image = get_field('callout_image_right_image');

if ($image) {
  $url = $image['url'];
  $link = $image['alt'];
}
?>
<section class="callout-image-right pt-5">
  <div class="container is-max-widescreen content-wrapper callout-wrapper">
    <div class="columns is-align-items-center">
      <div class="column is-7-desktop">
        <div class="text-container">
          <h2 class="is-size-5"><?= $subtitle; ?></h2>
          <h3 class="is-family-secondary pt-4 pb-5"><?= $title; ?></h3>
          <div class="is-size-6 has-text-primary">
            <?= $content; ?>
          </div>
          <?php if ($label) : ?>
            <div class="button-wrapper mt-4">
              <a href="<?= $link; ?>" class="button is-primary font-button"><?= $label; ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="column is-5-desktop">
        <?php if ($image) : ?>
          <figure class="decoration m-0 image is-square is-relative img-shift-right">
            <img class="is-rounded is-absolute-tablet round-border w-100" src="<?= $url; ?>" alt="<?= $alt; ?>" style="object-fit:cover;">
          </figure>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section><!-- .callout-image-right -->
