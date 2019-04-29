<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_2_Wordpress
 */

get_header();
?>
<section class="feature-image" data-type="background" data-speed="5">
	<h2 class="page-title">
		<?php
		the_archive_title();
		the_archive_description( '<small class="archive-description">', '</small>' );
		?>
	</h2>
</section>

<section id="blog-content">
	<div class="container">
		<div class="row" id="primary">
			<main id="content" class="col-sm-8">

		<?php if ( have_posts() ) : ?>

		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

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
