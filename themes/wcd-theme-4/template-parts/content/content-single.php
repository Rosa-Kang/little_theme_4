<?php

/**
 * Template part for displaying single posts.
 *
 * @package White_Canvas_Design_Theme
 */

$nextPost = get_next_post();
if ($nextPost) {
  $next_permalink = $nextPost->ID;
} else {
  $first_post = get_posts(array(
    'posts_per_page'   => 1,
    'order' => 'ASC'
  ));
  $next_permalink = $first_post[0]->ID;
}

$prevPost = get_previous_post();
if ($prevPost) {
  $prev_permalink = $prevPost->ID;
} else {
  $latest_post = get_posts(array(
    'posts_per_page'   => 1,
    'order' => 'DESC'
  ));
  $prev_permalink = $latest_post[0]->ID;
}

$date = get_the_date('F j, Y');
$image = wp_get_attachment_url(get_post_thumbnail_id(get_option('page')));
$image_id = get_post_thumbnail_id(get_the_ID());
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('pt-5 pb-6 blog-single'); ?>>
  <figure class="m-0 image p-0 background-offset post-hero">
    <img src="<?= $image; ?>" alt="<? $image_alt; ?>">
  </figure>
  <div class="container content-wrapper">
    <div class="container-m">
      <div class="entry-meta has-text-centered">
        <h1 class="is-family-secondary is-capitalized mt-4 mb-6 has-text-primary"><?php the_title(); ?></h1>
        <span class="card-title is-uppercase my-2 has-text-primary has-text-weight-bold">
          <div><?php echo $date; ?></div>
          <div class="is-hidden-mobile mx-5">|</div>
          <span>by <?php the_author(); ?></span>
        </span>
      </div>

      <div class="entry-content is-family-secondary has-text-primary">
        <?php the_content(); ?>
      </div><!-- .entry-content -->

      <div class="project-navigation pt-6 mt-6 is-flex is-flex-direction-column is-align-items-center">
        <div class="is-flex is-justify-content-center is-align-items-center">
          <?php if ($next_permalink) : ?>
          <a class="prev-post mr-3" href="<?php echo get_permalink($next_permalink); ?>">
            <span class="view-previous-project">
              <div class="has-button-background">
                <div class="arrow reversed"></div>
              </div>
            </span>
          </a>
          <?php endif; ?>

          <?php if ($prev_permalink) : ?>
          <a class="next-post ml-3" href="<?php echo get_permalink($prev_permalink); ?>">
            <span class="view-next-project">
              <div class="has-button-background">
                <div class="arrow m-0"></div>
              </div>
            </span>
          </a>
          <?php endif; ?>

        </div>
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
          class="blurb is-capitalized pt-2 read-more-blog">read
          more blogs</a>

      </div>
    </div>
  </div>
</article><!-- single post -->

<?php get_template_part('template-parts/section/signup-banner'); ?>