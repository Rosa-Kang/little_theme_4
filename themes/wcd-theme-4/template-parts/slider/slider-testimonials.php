<?php

/**
 * Template part for displaying cards - Slider Image Right.
 *
 * @package White_Canvas_Design_Theme
 */
$business_id = get_field('business_info_id', 'option');
$title = get_field('testimonial_title', $business_id);
$image = get_field('testimonial_image', $business_id);
$testimonials = get_field('testimonials', $business_id);

if ($image) {
  $url = $image['url'];
  $alt = $image['alt'];
}
?>
<section class="slider-testimonials">
  <div class="container is-max-widescreen content-wrapper">
    <div class="content-wrapper px-0 mt-0">
      <div class="columns is-justify-content-space-between is-align-items-center">
        <div class="column is-7" data-aos="fade-right" data-aos-easing="ease">
          <h2 class="slider-title is-capitalized is-family-secondary accent-title mb-4" data-aos="fade-zoom-in" data-aos-easing="ease"><?= $title; ?></h2>
          <?php if ($testimonials) : ?>
            <div class="swiper-container testimonial-swiper">
              <ul class="swiper-wrapper list-style-none">
                <?php foreach ($testimonials as $testimonial) : setup_postdata($testimonial);
                  $citation = get_the_title($testimonial->ID);
                ?>
                  <li class="swiper-slide pt-5 pb-4">
                    <div class="body-text mb-4 quotation-mark"><?php echo the_content(); ?></div>
                    <p class="citation has-text-primary is-uppercase has-text-weight-bold"><?= $citation; ?>
                    </p>
                  </li>
                <?php endforeach;
                wp_reset_postdata(); ?>
              </ul><!-- .swiper-wrapper -->
              <div class="swiper-btn-container is-flex is-justify-content-space-between pt-5">
                <div class="swiper-button-prev testimonial-prev">
                  <div class="arrow"></div>
                </div>
                <div class="swiper-button-next testimonial-next">
                  <div class="arrow"></div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
        <div class="column is-4" data-aos="fade-left" data-aos-easing="ease">
          <?php if ($image) : ?>
            <figure class="image is-1by1 mx-0 my-0 decoration">
              <img class="is-rounded portfolio-card-image" src="<?= $url; ?>" alt="<?= $alt; ?>">
            </figure>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- .slider-testimonials -->
