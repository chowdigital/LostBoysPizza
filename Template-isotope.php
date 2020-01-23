<?php /* Template Name: Isotope */ get_header(); ?>
<section>


	<div class="filters filter-button-group">



		<button class="active btn-iso btn-all" data-filter="*"><h3>All</h3></button>
		<button class="btn-iso btn-what" data-filter=".catwhat"><h3>What's On</h3></button>
		<button class="btn-iso btn-press" data-filter=".catpress"><h3>Press</h3></button>
		<button class="btn-iso btn-fun" data-filter=".catfun"><h3>Fun</h3></button>
		<button class="btn-iso btn-updates" data-filter=".catupdates"><h3>updates</h3></button>


	</div>	
</section>
<section>
	<div class="isotopeGrid">



		<!---- THE LOOP START --->



		<?php
// The Query
		$the_query = new WP_Query( 'posts_per_page=24' );

// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		
				<div class="single-content grid-item <?php echo $category[0]->slug;?>">


					<a href="<?php the_permalink(); ?>" class="menuLink">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						<div class="bottom" id="<?php echo $category[0]->slug;?>">
							<h4><?php print get_the_category(get_the_ID())[0]->name; ?></h4>
						</div>
						<div class="title"><h3><?php the_title(); ?></h3></div>

					</a>
				</div>






				<?php 






			}
		} else {
    // no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();

		?>		
	</div>
</section>

<?php get_footer(); ?>

