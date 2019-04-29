<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_2_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post">
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
				<i class="fa fa-user"></i><?php the_author(); ?>
				<i class="fa fa-clock-o"></i><time><?php the_date(); ?></time>
				<i class="fa fa-folder-open"></i><?php the_category(', '); ?>
				<i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?>
				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number( 0, 1, '%'); ?></a>
				</div>

			</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="post-image">
		<!-- check for post image -->
		<?php if(has_post_thumbnail()) : ?>
			<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
	<div class="post-body">
		<?php the_excerpt(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
