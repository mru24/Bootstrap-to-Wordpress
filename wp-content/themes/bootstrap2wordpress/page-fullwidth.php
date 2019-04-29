<?php
/* Template Name: Full-width Template */

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

get_header();
?>

<!-- HEADER -->
<?php if(has_post_thumbnail()) : ?>
<section class="feature-image" data-type="background" data-speed="5" style="background: url('<?php echo $thumbnail_url ?>') 50% 0 repeat fixed">>
<?php else : ?>
<section class="feature-image" data-type="background" data-speed="5">
<?php endif; ?>
  <h1 class="page-title"><?php the_title(); ?></h1>
</section>

<!-- CONTACT CONTENT -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div id="content" class="col-md-12">
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();

?>
