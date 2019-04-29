<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootstrap_2_Wordpress
 */

get_header();
?>

<section class="feature-image" data-type="background" data-speed="5">
	<h2 class="page-title">
		<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'bootstrap2wordpress' ), '<span>' . get_search_query() . '</span>' );
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

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
			
		</div>
	</div>
</section><!-- #primary -->

<?php

get_footer();
