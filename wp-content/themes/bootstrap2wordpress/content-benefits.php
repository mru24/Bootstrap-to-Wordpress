<!-- WHO BENEFITS -->

<?php

$benefits_feature_image = get_field('benefits_feature_image');
$benefits_section_title = get_field('benefits_section_title');
$benefits_section_body = get_field('benefits_section_body');

?>

<section id="benefits">
  <div class="container">
    <div class="section-header">
      <!-- if user uploaded image -->
      <?php if(!empty($benefits_feature_image)) : ?>
        <img src="<?php echo $benefits_feature_image['url']; ?>" alt="<?php echo $benefits_feature_image['alt']; ?>">
      <?php endif; ?>
      <h2><?php echo $benefits_section_title; ?></h2>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">

        <?php echo $benefits_section_body; ?>

      </div>
    </div>
  </div>
</section>
