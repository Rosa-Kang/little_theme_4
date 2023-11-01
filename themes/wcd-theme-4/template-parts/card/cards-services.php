<?php

/**
 * Template part for displaying Cards Services.
 *
 * @package White_Canvas_Design_Theme
 */


$title = get_field('cards_services_title');
$cards = get_field('cards_services_cards');
$section_label = get_field('section_button_label');
$section_link = get_field('section_button_link');
$section_blurb = get_field('section_blurb');
?>

<section class="cards-services">
  <div class="content-wrapper container">
    <div class="container services-container">
      <h2 class="is-family-secondary"><?= $title; ?></h2>
      <?php if ($cards) : ?>
      <div class="columns is-multiline py-5">
        <?php foreach ($cards as $card) :
            $card_title = $card['card_title'];
            $content = $card['card_content'];
            $label = $card['card_button_label'];
            $link = $card['card_button_link'];
          ?>

        <div class="column is-half">
          <a href="<?= $link; ?>" class="wrapping-link">
            <div class="card has-background-transparent has-border-success-invert">
              <h3
                class="card-title font-md is-uppercase has-text-weight-bold has-background-primary-light has-border-bottom">
                <?= $card_title; ?>
              </h3>
              <div class="text-container has-background-light">
                <div class="card-content p-0 is-size-6">
                  <?= $content; ?>
                </div>
                <div class="has-text-right">
                  <div class="button-wrapper">
                    <p class="button is-tertiary is-size-6 mb-0"><?= $label; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <div class="has-text-centered-touch has-text-right-desktop">
        <div class="button-wrapper">
          <div class="button-and-blurb">
            <a href="<?= $section_link ?>" class="button is-primary"><?= $section_label; ?></a>
            <p class="blurb"><?= $section_blurb; ?></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- .cards-services -->