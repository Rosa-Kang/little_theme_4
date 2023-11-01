<?php

/**
 * Template part for displaying contact form.
 *
 * @package White_Canvas_Design_Theme
 */
$headline = get_field('contact_form_page_title');
$title = get_field('contact_form_title');
$info_title = get_field('contact_info_title');
$shortcode = get_field('contact_form');
?>
<section class="contact-form pb-6">
  <div class="container is-max-widescreen content-wrapper pt-5">
    <h1 class="is-capitalized is-family-secondary has-text-primary my-0 py-6" data-aos="fade-zoom-in" data-aos-delay="200" data-aos-duration="1000"><?= $headline; ?></h1>
    <div class="columns is-align-items-center">
      <div class="column is-7-tablet is-8-desktop">
        <div class="form-container is-relative z-index-1 has-background-light">
          <p class="card-title has-text-centered has-background-primary has-text-light has-text-weight-bold is-uppercase p-4">
            <?= $title; ?>
          </p>
          <?php echo do_shortcode($shortcode); ?>
        </div>
      </div>

      <div class="column is-6-tablet has-background-success our-info-container z-index-0">
        <h2 class="section-title is-family-secondary"><?= $info_title; ?></h2>
        <div class="contact-info-wrapper py-6 has-text-centered">
          <?php get_template_part('template-parts/contact/contact-phone'); ?>
          <?php get_template_part('template-parts/contact/contact-email'); ?>
          <?php get_template_part('template-parts/contact/contact-address'); ?>
        </div>
        <?php get_template_part('template-parts/icon/icons-social'); ?>
      </div>

    </div>
  </div> <!-- .container -->
</section><!-- .contact-form -->
