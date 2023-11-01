<?php

/**
 * Template part for displaying Cards Quad Center.
 *
 * @package White_Canvas_Design_Theme
 */

$title = get_field('cards_quad_center_title');
$cards = get_field('cards_quad_center_cards');
$quad_label = get_field('cards_quad_center_button_label');
$quad_link = get_field('cards_quad_center_button_link');
$blurb = get_field('cards_quad_center_blurb');
$id = get_field('section_id');
$label = get_field('card_button_label');
?>

<section id="<?= $id; ?>" class="cards-quad-center scroll-margin-top">
  <div class="content-wrapper container-m">
    <div class="has-text-centered">
      <h2 data-aos="fade-zoom-in" data-aos-easing="ease" class="section-title is-family-secondary has-text-primary">
        <?= $title; ?></h2>
    </div>
    <?php if ($cards) : $i = 0; ?>
    <div class="columns is-multiline pt-6 pb-5">
      <?php foreach ($cards as $card) :
          $card_title = $card['card_title'];
          $content = $card['card_content'];
          $link = $card['card_button_link'];
          $i++;
        ?>

      <div class="column is-half">
        <div class="card has-background-transparent has-border-success-dark">
          <h3
            class="card-title is-uppercase has-text-weight-bold has-background-primary has-border-bottom py-3 px-5 has-text-light">
            <?= $card_title; ?>
          </h3>
          <div class="text-container has-background-light">
            <div class="card-content pt-5 pb-2 px-5 body-text">
              <?= $content; ?>
            </div>
            <?php if ($link) : ?>
            <div class="has-text-right pt-0 px-5 pb-5">
              <div class="button-wrapper">
                <a href="<?= $link; ?>" class="button is-tertiary body-text mb-0 is-uppercase"><?= $label; ?></a>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ($quad_link) : ?>
    <div class="has-text-centered">
      <div class="button-wrapper">
        <div class="button-and-blurb" data-aos="fade-up" data-aos-easing="ease">
          <a href="<?= $quad_link; ?>" class="button is-primary is-uppercase"><?= $quad_label; ?></a>
          <div class="blurb pt-3"><?= $blurb; ?></div>
        </div>
      </div>
    </div>
    <?php endif; ?>
</section>
