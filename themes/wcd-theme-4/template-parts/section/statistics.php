<?php

/**
 * Template part for displaying Statistics.
 *
 * @package White_Canvas_Design_Theme
 */

$title = get_field('statistics_title');
$results = get_field('statistics_results');
$background = get_field('statistics_background');
$label = get_field('statistics_button_label');
$link = get_field('statistics_button_link');
?>

<?php if ($title || $results) : ?>
  <section class="statistics <?= $background; ?> pb-6">
    <div class="container content-wrapper has-text-centered">
      <div class="has-text-centered">
        <h2 class="py-6" data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-offset="0"><?= $title; ?>
        </h2>
      </div>
      <?php if ($results) :
        $i = 0; ?>
        <div class="columns">
          <?php foreach ($results as $result) :
            $figure = $result['figure'];
            $icon = $result['icon'];
            $subtitle = $result['subtitle'];
            $description = $result['description'];
            $i++;

            if ($icon) {
              $icon_url = $icon['url'];
              $icon_alt = $icon['alt'];
            }
          ?>
            <div class="column" data-aos="fade-zoom-in" data-aos-easing="ease" data-aos-delay="<?= $i * 300; ?>">
              <div class="result-box has-text-centered">
                <?php if ($figure) : ?>
                  <h3 class="has-text-light is-family-primary banner-number">
                    <?= $figure; ?>
                  </h3>
                <?php elseif ($icon) : ?>
                  <figure class="mx-0 mt-0 mb-3 image">
                    <img src="<?= $icon_url; ?>" alt="<?= $icon_alt; ?>" style="height: 42px; width:auto; object-fit:cover;" class="m-0-auto">
                  </figure>
                <?php endif; ?>
                <?php if ($subtitle) : ?>
                  <p class="statistics-title is-family-secondary is-capitalized mb-0"><?= $subtitle; ?></p>
                <?php endif; ?>
                <div class="description py-5">
                  <?= $description; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
      <?php if ($link) : ?>
        <div class="button-wrapper">
          <a href="<?= $link; ?>" class="button is-tertiary is-uppercase"><?= $label; ?></a>
        </div>
      <?php endif; ?>
    </div>
  </section><!-- .Statistics -->
<?php endif; ?>
