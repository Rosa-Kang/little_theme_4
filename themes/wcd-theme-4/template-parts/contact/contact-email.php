<?php

/**
 * Template part for displaying the contact email.
 *
 * @package White_Canvas_Design_Theme
 */

$post_id = get_field('business_info_id', 'option');
$email = get_field('contact_email', $post_id);
?>
<p class="contact-email py-5">
  <a class="is-uppercase" href="mailto:<?php echo $email; ?>" target="_blank" rel="noopener noreferrer">
    <?php echo $email; ?>
  </a>
</p>