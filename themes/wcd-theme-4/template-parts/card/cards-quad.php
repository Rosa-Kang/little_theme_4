<?php

/**
 * Template part for displaying Cards Quad.
 *
 * @package White_Canvas_Design_Theme
 */


$title = get_field('cards_quad_title');
$cards = get_field('cards_quad_cards');
$section_label = get_field('cards_quad_button_label');
$section_link = get_field('cards_quad_button_link');
$section_blurb = get_field('cards_quad_blurb');
$label = get_field('card_button_label');
?>

<section class="cards-quad ">
  <div class="content-wrapper container">
    <div class="services-container container-m">
      <h2 class="section-title is-family-secondary has-text-primary" data-aos="fade-zoom-in" data-aos-easing="ease">
        <?= $title; ?></h2>
      <?php if ($cards) : $i = 0; ?>
      <div class="columns is-multiline py-5">
        <?php foreach ($cards as $card) :
            $card_title = $card['card_title'];
            $content = $card['card_content'];
            $link = $card['card_button_link'];
            $i++;
          ?>

        <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="<?= $i * 200; ?>" class="column is-half">

          <div class="card has-background-transparent has-border-success-dark">
            <h3 class="card-title is-uppercase has-text-weight-bold has-background-primary has-border-bottom py-3 px-5">
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

      <div class="has-text-centered-touch has-text-right-desktop">
        <div class="button-wrapper mb-6">
          <div class="button-and-blurb" data-aos="fade-up" data-aos-easing="ease">
            <a href="<?= $section_link ?>" class="button is-primary is-uppercase"><?= $section_label; ?></a>
            <p class="blurb pt-3"><?= $section_blurb; ?></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- .cards-quad -->
