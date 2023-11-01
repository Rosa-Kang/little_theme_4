<?php

/**
 * Template part for displaying cards - team members.
 *
 * @package White_Canvas_Design_Theme
 */

$title = get_field('cards_team_members_title');
$description = get_field('cards_team_members_description');
$cards = get_field('cards_team_members');
?>
<section class="cards-team-members pb-6" data-aos="fade-up" data-aos-easing="ease" data-aos-offset="0">
  <div class="container content-wrapper">
    <div class="cards-team-members__text-container mb-5 has-text-centered container-sm">
      <h2 class="section-title pt-6 pb-5 has-text-primary mb-2"><?= $title; ?></h2>
      <h3 class="body-text" style="max-width: 578px;
    margin: 0 auto;"><?= $description; ?></h3>
    </div>
    <?php if ($cards) : $i = 0; ?>
    <div class="cards-team-members__card-container px-0">
      <ul class="list-style-none columns is-multiline">
        <?php foreach ($cards as $card) : setup_postdata($card);
            $name = get_the_title($card->ID);
            $job_title = get_field('job_title', $card->ID);
            $image = wp_get_attachment_url(get_post_thumbnail_id(get_option('page', $card->ID)));
            $image_id = get_post_thumbnail_id(get_the_ID());
            $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
            $content = apply_filters('the_content', get_the_content($card->ID));
            $i++;
          ?>
        <li data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>"
          class="cards-team-members__card column is-full-mobile is-6-tablet is-4-desktop p-0<?php if (empty($content)) :?> no-bio<?php endif; ?>">

          <div class="columns is-flex cards-team-members__card-content contrast show-modal-btn my-5">
            <figure class="m-0 p-0 image column is-3-mobile is-relative">
              <?php if (!empty($content)) : ?> 
                <div class="has-button-background is-absolute is-hidden-touch">
                  <div class="arrow m-0"></div>
                </div>
              <?php endif; ?>
              <img class="picture" src="<?= $image; ?>" alt="<?= $alt_text; ?>">
            </figure>

            <div
              class="cards-team-members__card-title column is-9-mobile is-flex is-flex-direction-column is-justify-content-center is-relative has-background-primary">
              <div class="has-text-left-touch has-text-centered name-and-title has-text-light">
                <h4 class="is-uppercase card-title has-text-weight-bold"><?= $name; ?></h4>
                <h5 class="is-capitalized body-text has-text-light"><?= $job_title; ?></h5>
              </div>
              <?php if (!empty($content)) : ?> 
                <div class="has-button-background is-absolute is-hidden-desktop">
                  <div class="arrow m-0"></div>
                </div>
              <?php endif; ?>
            </div>

          </div>

        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endif; ?>
  </div>
</section><!-- .cards-team-members -->