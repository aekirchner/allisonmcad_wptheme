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
                	
                    <div class="artist-content-container">                    	
                        <?php if( get_field('artist_content') ): ?>
 
	<?php while( has_sub_field('artist_bio') ): ?>
 
		<div class="artist-bio">
			<p><?php the_sub_field('artist_bio'); ?></p>
        </div>
		<div class="artist-photo">
            <img src="<?php the_sub_field('artist_picture'); ?>" alt="Megan Hoogland" />
		</div>
 
	<?php endwhile; ?>
 
<?php endif; ?>
</div>
                        <div class="artist-bio">
                    		<p><?php the_sub_field('artist_bio'); ?></p>
                    	</div>
                        
                        <div class="artist-photo">
                        	<img src="<?php the_sub_field('artist_picture'); ?>" alt="Megan Hoogland" />
                            <p><?php the_sub_field('artist_picture_caption'); ?></p>
                        </div>
                    </div>
                    
                    <div class="artist-portfolio-images">
                    	<img src="<?php the_field('artist_portfolio_image_1') ?>" alt="Megan Hoogland Tattoo Work" />
                        <img src="<?php the_field('artist_portfolio_image_2') ?>" alt="Megan Hoogland Tattoo Work" />
                        <img src="<?php the_field('artist_portfolio_image_3') ?>" alt="Megan Hoogland Tattoo Work" />
                        <img src="<?php the_field('artist_portfolio_image_4') ?>" alt="Megan Hoogland Tattoo Work" />
                    </div>
                    
                    <div class="artist-bio">
                    		<p><?php the_field('artist_bio'); ?></p>
                    	</div>
                        
                        <div class="artist-photo">
                        	<img src="<?php the_field('artist_picture'); ?>" alt="Megan Hoogland" />
                            <p><?php the_field('artist_picture_caption'); ?></p>
                        </div>
                    </div>
                    
                    <div class="artist-portfolio-images">
                    	<img src="<?php the_field('artist_portfolio_image_1') ?>" alt="Megan Hoogland Tattoo Work" />
                        <img src="<?php the_field('artist_portfolio_image_2') ?>" alt="Megan Hoogland Tattoo Work" />
                        <img src="<?php the_field('artist_portfolio_image_3') ?>" alt="Megan Hoogland Tattoo Work" />
                        <img src="<?php the_field('artist_portfolio_image_4') ?>" alt="Megan Hoogland Tattoo Work" />
                    </div>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_footer(); ?>