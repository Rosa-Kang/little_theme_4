<?php

/**
 * Template part for displaying social icons.
 *
 * @package White_Canvas_Design_Theme
 */

?>
<?php
$post_id = get_field('business_info_id', 'option');

$facebook_url = get_field('facebook_url', $post_id);
$instagram_url = get_field('instagram_url', $post_id);
$linkedin_url = get_field('linkedin_url', $post_id);
$pinterest_url = get_field('pinterest_url', $post_id);
?>
<?php if ($linkedin_url || $facebook_url || $instagram_url || $pinterest_url) : ?>
<div class="social-icons-wrapper">
  <?php if ($linkedin_url) : ?>
  <a href="<?php echo $linkedin_url; ?>" target="_blank"
    rel="noopener noreferrer"><?php get_template_part('template-parts/icon/icon-linkedin'); ?><span
      class="visually-hidden">Linkedin</span></a>
  <?php endif; ?>
  <?php if ($instagram_url) : ?>
  <a href="<?php echo $instagram_url; ?>" target="_blank"
    rel="noopener noreferrer"><?php get_template_part('template-parts/icon/icon-instagram'); ?><span
      class="visually-hidden">Instagram</span></a>
  <?php endif; ?>
  <?php if ($facebook_url) : ?>
  <a href="<?php echo $facebook_url; ?>" target="_blank"
    rel="noopener noreferrer"><?php get_template_part('template-parts/icon/icon-facebook'); ?><span
      class="visually-hidden">Facebook</span></a>
  <?php endif; ?>
  <?php if ($pinterest_url) : ?>
  <a href="<?php echo $pinterest_url; ?>" target="_blank"
    rel="noopener noreferrer"><?php get_template_part('template-parts/icon/icon-facebook'); ?><span
      class="visually-hidden">Pinterest</span></a>
  <?php endif; ?>
</div>
<?php endif; ?>