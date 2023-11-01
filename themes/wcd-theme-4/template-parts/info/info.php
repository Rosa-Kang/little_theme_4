<?php

/**
 * Template part for displaying info.
 *
 * @package White_Canvas_Design_Theme
 */
$title = get_field('info_title');
$content = get_field('info_content');
$image = get_field('info_image');
$decorations = get_field('info_decorations');

if ($image) {
  $info_special = "info-space-top";
  $url = $image['url'];
  $alt = $image['alt'];
}
?>
<section class="info <?= $info_special; ?>">
  <?php if ($image) : ?>
    <div class="container content-wrapper py-0">
      <div class="is-absolute info-image-wrapper" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
        <figure class="decoration p-0 m-0 image is-square is-relative" style="height:304px; width:304px;">
          <img class="is-rounded round-border w-100 is-absolute-tablet" src="<?= $url; ?>" alt="<?= $alt; ?>" style="height:304px; width:304px;">
        </figure>
      </div>
    </div>
  <?php endif; ?>

  <div class="container-m content-wrapper">
    <div class="text-container has-text-centered" data-aos="fade-zoom-in" data-aos-delay="100">
      <h2 class="section-title is-family-secondary has-text-primary pb-6 m-0-auto">
        <?= $title; ?>
      </h2>
      <div class="info-content body-text has-text-left-mobile pb-4">
        <?= $content; ?>
      </div>
    </div>


    <?php if ($decorations) : ?>
      <div class="columns is-multiline is-justify-content-space-around pt-5 pb-6" data-aos="fade-zoom-in" data-aos-delay="200">
        <?php foreach ($decorations as $deco) :
          $deco_image = $deco['decoration'];
          $deco_url = $deco_image['url'];
          $deco_alt = $deco_image['alt'];
        ?>
          <div class="column is-full-mobile is-3-tablet is-flex is-justify-content-center is-align-items-center">
            <figure class="my-0 mx-2 image">
              <img src="<?= $deco_url; ?>" alt="<?= $deco_alt; ?>" style="max-height: 221px;">
            </figure>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section><!-- .info -->
