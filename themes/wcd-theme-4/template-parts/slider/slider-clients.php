<?php

/**
 * Template part for displaying Client Slider
 *
 * @package White_Canvas_Design_Theme
 */
$title = get_field('slider_client_title');
$description = get_field('slider_client_description');
$clients = get_field('clients');
?>

<section class="slider-client" data-aos="fade-zoom-in" data-aos-easing="ease-in-sine" data-aos-duration="1500">
  <div class="content-wrapper container">
    <div class="text-container has-text-centered pb-6">
      <h2 data-aos="fade-zoom-in" data-aos-easing="ease"
        class="unique-title is-uppercase has-text-weight-bold has-text-primary mb-4">
        <?= $title; ?></h2>
      <h3 class="body-text"><?= $description; ?></h3>
    </div>

    <?php if ($clients) : ?>
    <div class="swiper-container client-swiper">
      <ul class="swiper-wrapper list-style-none pb-6">
        <?php foreach ($clients as $client) : setup_postdata($client);
            $image = wp_get_attachment_url(get_post_thumbnail_id(get_option('page', $client->ID)));
            $image_id = get_post_thumbnail_id(get_the_ID());
            $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          ?>
        <li class="swiper-slide">
          <figure class="m-0 image">
            <img class="client-logo" src="<?= $image; ?>" alt="<?= $alt; ?>"
              style="height:100px; max-width:75%; margin:0 auto; object-fit:contain;">
          </figure>
        </li>
        <?php endforeach; ?>
      </ul>
      <div class="swiper-btn-container m-0-auto is-flex is-justify-content-space-between pt-6">
        <div class="swiper-button-prev client-btn-prev">
          <div class="arrow"></div>
        </div>
        <div class="swiper-button-next client-btn-next">
          <div class="arrow"></div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
