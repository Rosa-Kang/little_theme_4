<?php

/**
 * Template part for displaying Cards Blog.
 *
 * @package White_Canvas_Design_Theme
 */


?>

<section class="cards-blog pb-6">
  <div class="container content-wrapper">
    <div class="columns is-tablet is-multiline is-variable">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => '-1',
        'orderby' => 'post_date',
      );
      $posts = get_posts($args); ?>
      <?php
      foreach ($posts as $post) : setup_postdata($post);
        $title = get_the_title();
        $date = get_the_date('F j, Y');
        $image = get_the_post_thumbnail();
      ?>
      <a href="<?php echo get_permalink(); ?>" class="column is-full is-6-tablet is-4-desktop" data-aos="fade-up">
        <article id="post-<?php the_ID(); ?>" class="mt-5">
          <div class="card is-shadowless is-relative">
            <figure class="image m-0">
              <?php echo $image ?>
            </figure>

            <div class="card-content p-4 has-text-centered has-background-primary">
              <h2 class="card-title is-uppercase has-text-light has-text-weight-bold">
                <?php echo $title ?></h2>
              <p class="has-text-light is-capitalized mt-2"><?php echo $date; ?></p>
            </div>

            <div class="has-button-background is-absolute">
              <div class="arrow m-0"></div>
            </div>
          </div>
        </article>
      </a>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>