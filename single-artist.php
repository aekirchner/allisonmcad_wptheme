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
            <?php while ( have_posts() ) : the_post(); ?>
			
			<?php endwhile; // end of the loop. ?>
            
        <div id="artist-wrapper">
            	<p>test test test</p>
            	<h1><?php the_field('artist_name'); ?></h1>
                	
            <?php if(get_field('artist_content')); ?>
            
            <div class="artist-content">
            	<?php while(the_repeater_field('artist_content')); ?>
                	<p><?php the_sub_field('artist_bio'); ?></p>
                    <img src="<?php the_sub_field('artist_picture'); ?>" alt="<?php the_sub_field('alt'); ?>" />
                    <p><?php the_sub_field('artist_picture_caption'); ?></p>
                <?php endwhile; ?>
            </div>
            
            <?php endif; ?>
			
			
			<?php if(get_field('artist_portfolio')): ?>

			<div class="artist-portfolio-images">   
				<?php while(the_repeater_field('artist_portfolio')): ?>
					<img src="<?php the_sub_field('artist_portfolio_image_1'); ?>" alt="<?php the_sub_field('alt'); ?>" />
					<img src="<?php the_sub_field('artist_portfolio_image_2'); ?>" alt="<?php the_sub_field('alt'); ?>" />
					<img src="<?php the_sub_field('artist_portfolio_image_3'); ?>" alt="<?php the_sub_field('alt'); ?>" />
					<img src="<?php the_sub_field('artist_portfolio_image_4'); ?>" alt="<?php the_sub_field('alt'); ?>" />

    			<?php endwhile; ?>
			</div>
			
			<?php endif; ?>
	
		</div>
                        
                        	
                    
			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>