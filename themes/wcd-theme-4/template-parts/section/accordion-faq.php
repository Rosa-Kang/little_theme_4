<?php

/**
 * Template part for displaying accordion-faq.
 *
 * @package White_Canvas_Design_Theme
 */

$faq_title = get_field('faq_title');
$label = get_field('faq_button_label');
$link = get_field('faq_button_link');
?>

<section class="accordion-faq py-6">
  <div class="content-wrapper container z-index-1">
    <h2 class="accent-title is-family-secondary has-text-centered is-capitalized"><?= $faq_title; ?></h2>

    <div class="container-sm pt-5 pb-6 is-relative">
      <div>
        <?php echo the_content(); ?>
      </div>
    </div>

    <?php if ($link) : ?>
    <div class="has-text-centered">
      <div class="button-wrapper">
        <div class="button-and-blurb" data-aos="fade-up" data-aos-easing="ease">
          <a href="<?= $link; ?>" class="button is-primary"><?= $label; ?></a>
        </div>
      </div>
    </div>
    <?php endif; ?>

  </div>

</section>