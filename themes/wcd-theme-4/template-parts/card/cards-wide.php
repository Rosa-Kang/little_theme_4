<?php

/**
 * Template part for displaying Cards Wide.
 *
 * @package White_Canvas_Design_Theme
 */

$title = get_field('cards_wide_title');
$cards = get_field('cards_wide_cards');
$cards_label = get_field('cards_wide_button_label');
$cards_link = get_field('cards_wide_button_link');
$label = get_field('card_button_label');
?>

<section class="cards-wide has-background-light py-6 scroll-margin-top">
  <div class="content-wrapper container-m is-relative">
    <div class="has-text-centered">
      <h2 class="accent-title is-family-secondary has-text-primary pb-6" data-aos="fade-zoom-in" data-aos-easing="ease">
        <?= $title; ?>
      </h2>
    </div>
    <?php if ($cards) : $i = 0; ?>
    <div class="columns cards-container is-multiline pb-4" data-aos="fade-zoom-in" data-aos-easing="ease">
      <?php foreach ($cards as $card) :
          $card_title = $card['title'];
          $content = $card['content'];
          $link = $card['button_link'];
          $i++;
        ?>

      <div class="column is-full pt-0 pb-6" data-aos="fade-up" data-aos-delay="<?= $i * 100; ?>">
        <div class="card has-background-transparent has-border-success-dark">
          <div
            class="title-wrapper is-flex is-align-items-center has-background-primary has-border-bottom py-1 has-text-centered has-text-light">
            <h3 class="card-title is-uppercase has-text-weight-bold py-3">
              <?= $card_title; ?>
            </h3>
            <?php if ($link) : ?>
            <div class="has-text-right is-hidden-touch">
              <div class="button-wrapper">
                <a href="<?= $link; ?>" class="button is-secondary dark mb-0 is-uppercase"><?= $label; ?></a>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="text-container has-background-light">
            <div class="card-content body-text">
              <?= $content; ?>
            </div>
            <?php if ($link) : ?>
            <div class="has-text-centered is-hidden-desktop pb-5">
              <div class="button-wrapper">
                <a href="<?= $link; ?>" class="button is-secondary dark mb-0"><?= $label; ?></a>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ($cards_link) : ?>
    <div class="has-text-centered">
      <div class="button-wrapper">
        <div class="button-and-blurb" data-aos="fade-up" data-aos-easing="ease">
          <a href="<?= $cards_link; ?>" class="button is-primary"><?= $cards_label; ?></a>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>