<?php
/**
 * The template for displaying all single posts.
 *
 * @package regala
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        
		        <?php get_template_part( 'content', 'single' ); ?>
	    
	        	<?php regala_post_nav(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
			    ?>
    			
			<?php endwhile; // end of the loop. ?>
		<?php get_sidebar( 'footer-innerpage' ) ?>
        <?php get_footer(); ?>

        </main><!-- #main -->
		
	</div><!-- #primary -->
    
