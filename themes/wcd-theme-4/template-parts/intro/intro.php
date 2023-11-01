<?php

/**
 * Template part for displaying callout with image Right.
 *
 * @package White_Canvas_Design_Theme
 */

$subtitle = get_field('intro_subtitle');
$title = get_field('intro_title');
$headline = get_field('intro_headline');
$content = get_field('intro_content');
$label = get_field('intro_button_label');
$link = get_field('intro_button_link');
$image = get_field('intro_image');
$instruction = get_field('intro_introduction');
$background = get_field('intro_background_color');

if ($image) {
  $url = $image['url'];
  $alt = $image['alt'];
}
?>
<section class="intro pt-5 pb-6" style="background:<?= $background; ?>;">
  <div class="container is-max-widescreen content-wrapper callout-wrapper mb-6">
    <?php if (!$image) : ?>
    <h2 class="subtitle is-italic mb-0">
      <?= $subtitle; ?></h2>
    <?php if ($headline) : ?>
    <h1 class="is-family-secondary has-text-primary my-0" data-aos="fade-zoom-in" data-aos-delay="200"
      data-aos-duration="1000"><?= $headline; ?></h1>
    <?php elseif ($title) : ?>
    <h3 class="section-title is-family-secondary py-4" data-aos="fade-zoom-in" data-aos-easing="ease"
      data-aos-duration="1000"><?= $title; ?></h3>
    <?php endif; ?>
    <?php endif; ?>
    <div class="columns is-align-items-center">
      <div data-aos="fade-right" data-aos-easing="ease" class="column is-7-desktop">
        <div class="text-container">
          <?php if ($image) : ?>
          <?php if ($headline) : ?>
          <h1 class="is-family-secondary has-text-primary my-0" data-aos="fade-zoom-in" data-aos-delay="200"
            data-aos-duration="1000"><?= $headline; ?></h1>
          <?php elseif ($title) : ?>
          <h2 class="subtitle is-italic mb-0" data-aos="fade-zoom-in" data-aos-easing="ease"><?= $subtitle; ?></h2>
          <?php endif; ?>
          <h3 class="section-title is-family-secondary pt-4 pb-5">
            <?= $title; ?></h3>
          <?php endif; ?>
          <div class="body-text has-text-primary">
            <?= $content; ?>
          </div>
          <?php if ($link && $image) : ?>
          <div class="button-wrapper mt-6" data-aos="fade-up">
            <a href="<?= $link; ?>" class="button is-primary"><?= $label; ?></a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="column is-5-desktop" data-aos="fade-left" data-aos-easing="ease">
        <?php if ($image) : ?>
        <figure class="decoration m-0 image is-square is-relative img-shift-right">
          <img class="is-rounded is-absolute-tablet round-border w-100" src="<?= $url; ?>" alt="<?= $alt; ?>">
        </figure>
        <?php elseif ($instruction) : ?>
        <div class="intro-instructions body-text height deco-vertical-line">
          <?= $instruction; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <?php if ($link && !$image) : ?>
    <div class="button-wrapper mt-4" data-aos="fade-up">
      <a href="<?= $link; ?>" class="button is-primary"><?= $label; ?></a>
    </div>
    <?php endif; ?>
  </div>
</section><!-- .intro -->