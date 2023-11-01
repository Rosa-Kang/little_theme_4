<?php

/**
 * Template part for displaying info list.
 *
 * @package White_Canvas_Design_Theme
 */


$image = get_field('info_list_image');
$lists = get_field('info_list');

if ($image) {
  $url = $image['url'];
  $alt = $image['alt'];
}
?>

<section class="info-list">
  <div class="columns is-flex-direction-row-reverse is-justify-content-space-between info-list-container is-relative">

    <?php if ($lists) : $i = 0; ?>
    <ol class="column list-style-none list-container is-7-tablet m-0-auto">
      <?php foreach ($lists as $list) :
          $subtitle = $list['subtitle'];
          $content = $list['content'];
          $i++;
        ?>
      <li
        class="is-flex is-align-items-flex-start is-justify-content-center pb-6 has-text-primary banner-title is-family-secondary"
        data-aos="fade-up" data-aos-delay="<?= $i * 100; ?>">
        <div class="list-order">
          <?= $i; ?>
        </div>
        <div class="pl-5">
          <h2 class="has-text-primary card-title is-uppercase has-text-weight-bold pb-3"><?= $subtitle; ?></h2>
          <div class="has-text-primary"><?= $content; ?></div>
        </div>
      </li>
      <?php endforeach; ?>
    </ol>
    <?php endif; ?>
    <div class="column image-container is-5-tablet" style="background:url('<?= $url ?>') 25% 50%/cover no-repeat"
      data-aos="fade-zoom-in">
    </div>
  </div>
</section>