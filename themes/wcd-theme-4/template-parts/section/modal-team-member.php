<?php

/**
 * Template part for displaying modal-team-member.
 *
 * @package White_Canvas_Design_Theme
 */
$cards = get_field('cards_team_members');
$label = 'contact me';
?>

<section class="modal-container">
  <?php if ($cards) : ?>
    <ul class="list-style-none">
      <?php foreach ($cards as $card) : setup_postdata($card);
        $name = get_the_title($card->ID);
        $job_title = get_field('job_title', $card->ID);
        $content = get_the_content($card->ID);
        $email_link = get_field('email_address', $card->ID);
        $image = wp_get_attachment_url(get_post_thumbnail_id(get_option('page', $card->ID)));
        $image_id = get_post_thumbnail_id(get_the_ID());
        $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
      ?>
        <li class="modal">
          <div class="team-member-wrapper p-6">
            <figure class="m-0 team-member-image is-relative  p-0" style="height:100%;">
              <div class="modal-close-star is-hidden-tablet"></div>
              <img src="<?= $image; ?>" alt="<?= $alt_text; ?>" style="height:100%;width:100%;object-fit:cover;">
            </figure>
            <div class="team-member-blurbs p-0 is-relative">
              <div class="modal-close-star is-hidden-mobile"></div>
              <div class="modal-title-wrapper has-background-primary p-5 has-text-light">
                <h2 class="is-uppercase card-title has-text-weight-bold"><?= $name; ?></h2>
                <h3 class="is-capitalized body-text has-text-light"><?= $job_title; ?></h3>
              </div>
              <div class="team_member_introduction body-text has-background-light p-5">
                <?= $content; ?>
                <?php if ($email_link) : ?>
                  <div class="button-wrapper pt-6 pb-5">
                    <a href="mailto:<?php echo $email_link; ?>" target="_blank" rel="noopener noreferrer" class="button is-tertiary is-uppercase has-text-primary"><?= $label; ?></a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</section>
