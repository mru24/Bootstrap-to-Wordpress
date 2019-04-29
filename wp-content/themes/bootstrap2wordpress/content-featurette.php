<!-- VIDEO FEATURETTE -->

<?php

$featurette_title = get_field('featurette_title');
$featurette_body = get_field('featurette_body');

?>

<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php echo $featurette_title; ?></h2>

        <?php $loop = new WP_Query( array('post_type' => 'featurette_video', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
        <?php
          the_content();
        ?>
      <?php endwhile; wp_reset_query(); ?>

      </div>
    </div>
  </div>
</section>
