<!-- HERO SECTION-->

<?php

$header_title = get_field('header_title');
$header_body = get_field('header_body');
$header_main_image = get_field('header_main_image');
  // Course Price Options
$price_options = array(
  $price_options_1 = array(
    get_field('price_options_title_1'),
    get_field('price_options_body_1'),
    get_field('price_options_price_1')
  ),
  $price_options_2 = array(
    get_field('price_options_title_2'),
    get_field('price_options_body_2'),
    get_field('price_options_price_2')
  ),
  $price_options_3 = array(
    get_field('price_options_title_3'),
    get_field('price_options_body_3'),
    get_field('price_options_price_3')
  )
);
$enroll_btn_text = get_field('enroll_btn_text');
$enroll_btn_link = get_field('enroll_btn_link');

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<?php if(has_post_thumbnail()) : ?>
<section id="hero" data-type="background" data-speed="5" style="background: url('<?php echo $thumbnail_url; ?>') 50% 0 no-repeat fixed; background-size: cover;">
<?php else : ?>
<section id="hero" data-type="background" data-speed="5">
<?php endif; ?>
  <article>
    <div class="container clearfix">
      <div class="row">
        <div class="col-sm-5">
          <!-- check if image has been uploaded -->
          <?php if(!empty($header_main_image)) : ?>
          <img src="<?php echo $header_main_image['url']; ?>" class="logo" alt="<?php echo $header_main_image['alt'] ?>">
          <?php endif; ?>
        </div>

        <div class="col-sm-7 hero-text">
          <h1><?php echo $header_title; ?></h1>
          <p class="lead"><?php echo $header_body; ?></p>

          <div id="price-timeline">
            <?php foreach ($price_options as $item) : ?>
              <div class="price">
                <h4><?php echo $item[0]; ?> <small><?php echo $item[1]; ?></small></h4>
                <span><?php echo $item[2]; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
          <p>
            <a href="<?php echo $enroll_btn_link; ?>" class="btn btn-lg btn-danger" role="button" target="_blank">
              <?php echo $enroll_btn_text; ?>
            </a>
          </p>
        </div>

      </div>
    </div>
  </article>
</section>
