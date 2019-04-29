<?php
/*
  Template Name: Resources Page
*/

// Advanced Custom Fields

// $resources_description = get_field('resources_page_description');

get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!-- HERO SECTION -->

<!-- check if feature image has been uploaded -->
<?php if(has_post_thumbnail()) : ?>
  <section class="feature-image" style="background:url('<?php echo $thumbnail_url; ?>') 50% 0 repeat fixed; background-size: cover;" data-type="background" data-speed="4">
<?php else : ?>
  <section class="feature-image feature-image-default" data-type="background" data-speed="4">
<?php endif; ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
  </section>


<!-- RESOURCES CONTENT -->
<section id="resources-content">
  <div class="container">
    <div class="resources-info">
      <?php while(have_posts()) : the_post(); ?>
      <p>
        <?php the_content(); ?>
      </p>
      <?php endwhile; ?>
    </div>

    <div class="resource-container">
    <?php $loop = new WP_Query( array('post_type' => 'resources', 'orderby' => 'post_id',  'order' => 'ASC' ) ); ?>
    <?php while( $loop->have_posts() ) :  $loop->the_post(); ?>
    <?php
      $resource_image = get_field('resource_image');
      $resource_url = get_field('resource_url');
      $button_text = get_field('button_text');
    ?>

      <div class="resource">

        <img src="<?php echo $resource_image['url'] ?>" alt="<?php echo $resource_image['alt']; ?>" style="max-width:300px;">

        <a href="<?php echo $resource_url; ?>" target="_blank" rel="noreferrer nofollow noopener">
          <h3><?php the_title(); ?></h3>
        </a>
        <div class="resource-content">
          <?php the_content(); ?>
        </div>
        <?php if(!empty($button_text)) : ?>
          <a href="<?php echo $resource_url; ?>" class="btn btn-success" target="_blank" rel="noreferrer nofollow noopener">
            <?php echo $button_text; ?>
          </a>
        <?php endif; ?>
      </div>

    <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php

get_footer();
