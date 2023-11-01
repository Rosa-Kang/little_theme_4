<?php

/**
 * Template part for displaying callout on Image.
 *
 * @package White_Canvas_Design_Theme
 */

$background_image = get_field('callout_right_image');
$subtitle = get_field('callout_right_subtitle');
$title_top = get_field('callout_right_title_top');
$title_bottom = get_field('callout_right_title_bottom');
$content = get_field('callout_right_content');
$label = get_field('callout_right_label');
$link = get_field('callout_right_link');
?>

<section class="callout-right is-relative" data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-offset="0">
  <div class="background-image"
    style="background:url(<?= $background_image; ?>) center/cover no-repeat; min-height:401px;"></div>

  <div class="content-wrapper container is-relative py-0">
    <div class="callout-right-container py-0">
      <div class="callout-right-text-container has-background-primary p-6 has-text-centered" data-aos="fade-up"
        data-aos-easing="ease">
        <div class="text-box">
          <h2 class="subtitle is-uppercase py-4 mb-0"><?= $subtitle; ?></h2>
          <h3 class="section-title py-3"><?= $title_top; ?><br><?= $title_bottom; ?>
          </h3>
          <div class="content pt-3 pb-6 has-text-light has-text-centered"><?= $content; ?></div>
        </div>
        <?php if ($link) : ?>
        <div class="button-wrapper pb-4">
          <a href="<?= $link; ?>" class="button is-primary body-text m-0-auto"><?= $label; ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

</section><!-- .callout-right -->
