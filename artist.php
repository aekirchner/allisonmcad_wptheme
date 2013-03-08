<?php
/**
 * Template Name: Artist
 *
 * @package allisonMCAD_wptheme
 * @since allisonMCAD_wptheme 1.0
 */

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">

			<?php query_posts( 'post_type=artist'); ?>	
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>
                    <?php the_post_thumbnail(); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>