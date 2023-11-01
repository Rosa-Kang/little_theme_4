<?php

/**
 * Template part for displaying jobs.
 *
 * @package White_Canvas_Design_Theme
 */

$jobs = get_field('jobs');
$file_label = get_field('jobs_file_button_label');
$application_label = get_field('jobs_application_button_label');
?>

<section id="jobs" class="cards-jobs">
  <?php if ($jobs) : ?>
  <div class="container-m content-wrapper">
    <ul class="list-style-none">
      <?php foreach ($jobs as $job) : setup_postdata($job);
          $title = get_the_title($job->ID);
          $job_file = get_field('job_file', $job->ID);
          $job_application = get_field('job_applicant_submission', $job->ID);

          if ($job_file) {
            $file_url = $job_file['url'];
          }
        ?>
      <li class="card has-border-success-dark mb-6" data-aos="fade-up">
        <div class="card-header has-background-primary is-shadowless">
          <h3 class="card-title is-uppercase has-text-weight-bold px-5 py-4"><?= $title; ?></h3>
        </div>
        <div class="card-content">
          <div class="buttons-wrapper">
            <a href="<?= esc_url($file_url); ?>" class="button is-tertiary"><?= esc_html($file_label); ?></a>
            <?php if ($job_application == 'email') :
                  $email = get_field('job_email', $job->ID);
                ?>
            <a href="mailto:<?= $email; ?>" class="button is-tertiary"><?= esc_html($application_label); ?></a>
            <?php endif; ?>
            <?php if ($job_application == 'link') :
                  $link = get_field('job_link', $job->ID);
                  $link_url = $link['url'];
                ?>
            <a href="<?= esc_url($link_url); ?>" class="button is-tertiary"><?= esc_html($application_label); ?></a>
            <?php endif; ?>
          </div>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <?php else : ?>
  <h2 class="has-text-centered mb-6 pb-4" style="max-width: 860px; margin: 0 auto;" data-aos="fade-zoom-in"
    data-aos-easing="ease" data-aos-delay="100">No jobs posted at
    this time, please check back soon.</h2>
  <?php endif; ?>
</section><!-- .jobs -->
