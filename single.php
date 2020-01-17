<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package LostBoys2020
 */

get_header();
?>


	

		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="blogSection">

                <h1>
				<?php the_title(); ?>
			</h1>
			           <br>

               
              
                

             



		<div class="storyImage"><img src="<?php the_post_thumbnail_url(); ?>"/></div>
		<div class="blogWrap">
		<div class="storyImageFull"><img src="<?php echo get_template_directory_uri(); ?>/img/blood.png" alt=""></div>
		<div class="storyContentFull">
			

			<?php the_content(); // Dynamic Content ?>
			<?php if( get_field('buy_tickets') ): ?>
	<a href="<?php the_field('buy_tickets'); ?>" class="btn-red"><h3>Buy Tickets</h3></a>
<?php endif; ?>

		</div>
	</div>
	
</section>

					
			

			

			







		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>





<?php get_footer(); ?>
