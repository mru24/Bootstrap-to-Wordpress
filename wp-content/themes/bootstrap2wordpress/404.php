<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_2_Wordpress
 */

get_header();

?>

	<section class="feature-image error-404 not-found" data-type="background" data-speed="5">
	<h2 class="page-title">
		<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bootstrap2wordpress' ); ?>
	</h2>
</section>

<section id="blog-content">
	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">

				<div class="page-content">
					<h2>No worries! Let's get you back on track</h2>
				</div><!-- .page-content -->
				<h3 class="title">Resources</h3>
				<p>Parhaps you were looking for a specific resources</p>

				<div class="resource-container">
					<?php $loop = new WP_Query( array('post_type' => 'resources', 'orderby' => 'post_id',  'order' => 'ASC' ) ); ?>
					<?php while( $loop->have_posts() ) :  $loop->the_post(); ?>
					<?php
						$resource_image = get_field('resource_image');
						$resource_url = get_field('resource_url');
						$button_text = get_field('button_text');
					?>

					<div class="resource">

						<img src="<?php echo $resource_image['url'] ?>" alt="<?php echo $resource_image['alt']; ?>">

						<a href="<?php echo $resource_url; ?>" target="_blank" rel="noreferrer nofollow noopener">
							<h3><?php the_title(); ?></h3>
						</a>

						<div class="resource-content">

							<?php the_excerpt(); ?>

						</div>

						<?php if(!empty($button_text)) : ?>
							<a href="<?php echo $resource_url; ?>" class="btn btn-success" target="_blank" rel="noreferrer nofollow noopener">
								<?php echo $button_text; ?>
							</a>
						<?php endif; ?>
						</div>

					<?php endwhile; wp_reset_query(); ?>

				</div>

				<!-- CATEGORIES -->
				<h2 class="title">Categories</h2>
				<small>.. or maybe a popular category?</small>
				<div class="widget widget-categories">
					<h4 class="widget-title">Most Used Categories</h4>
					<ul>
						<?php
						wp_list_categories( array(
						'orderby'			=>		'count',
						'order'				=>		'DESC',
						'show_count'	=>		1,
						'title_li'		=>		'',
						'number'			=>		10
						) );
						?>
					</ul>
				</div>

				<!-- ARCHIVES -->
				<h2 class="title">Archives</h2>
				<small>Browse through our archives</small>

					<?php the_widget('WP_Widget_Archives'); ?>


			</main><!-- #main -->

			<!-- SIDEBAR -->
			<aside class="col-sm-4 blog">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- #primary -->
	</div>
</section>

<?php
get_footer();
