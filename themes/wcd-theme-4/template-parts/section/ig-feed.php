<?php

/**
 * Template part for displaying instagram feed.
 *
 * @package White_Canvas_Design_Theme
 */

$post_id = get_field('business_info_id', 'option');
$title = get_field('ig_feed_title', $post_id);
$ig_id = get_field('ig_feed_id', $post_id);
$ig_icon = get_field('ig_feed_icon', $post_id);
$link = get_field('instagram_url', $post_id);
$short_code = get_field('instagram_shortcode', $post_id);
?>

<section class="ig-feed is-relative z-index-10" data-aos="fade-in" data-aos-easing="ease" data-aos-once="true">
  <div class="container content-wrapper">
    <div class="columns ig-flex-container">
      <div class="column is-full-mobile is-4-desktop ig-title-container">
        <h2 class="subtitle is-family-primary is-uppercase has-text-primary has-text-weight-bold mb-4">
          <?= $title; ?>
        </h2>
        <h3 class="is-inline-block mb-6">
          <a class="ig-feed-link is-flex is-align-items-center" href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
            <div class="mr-2 p-0 ig-feed-icon"></div>
            <span class="body-text"><?= $ig_id; ?></span>
          </a>
        </h3>
      </div>

      <div class="column is-full-mobile is-8-desktop">
        <div class="ig-feed-container">
          <div class="ig-feed-wrapper is-hidden-tablet">
            <?php echo do_shortcode($short_code); ?>
          </div>
          <div class="ig-feed-wrapper is-hidden-mobile">
            <?php echo do_shortcode($short_code); ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- .ig-feed -->
