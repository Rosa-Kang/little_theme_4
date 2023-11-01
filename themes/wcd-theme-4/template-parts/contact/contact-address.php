<?php

/**
 * Template part for displaying the contact address.
 *
 * @package White_Canvas_Design_Theme
 */

$post_id = get_field('business_info_id', 'option');
$address = get_field('street_address', $post_id);
$link = get_field('google_maps_embed_link', $post_id);
?>
<div class="contact-address">
  <a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
    <?php echo $address; ?>
  </a>
</div>