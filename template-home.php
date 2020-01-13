<?php /* Template Name: Lost Boys Homepage */ get_header(); ?>
<section class="pizza">
	<img src="<?php echo get_template_directory_uri(); ?>/img/pizza1.png" alt="Pizza">
	<div class="line1"><h2>Black Charcoal Pizza</h2></div>
	<div class="line2"><h2>Killer Cocktails</h2></div>
	<div class="line3"><h2>All served with a banging 80s playlist</h2></div>
</section>
<section class="instagram">
	<h2>Welcome to Lost Boys</h2>
	<h3>Lost Boys Instagram</h3>
	<div id="pixlee_container"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'Ob2K-Q9yzx1WO7hvXPxZ'});Pixlee.addSimpleWidget({widgetId:'24475'});};</script><script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>
</section>
<section class="contact">
	<div class="contactWrap">
		<div class="contactInfo">
			<h2>CONTACT</h2>
			<p>CALL US: 020 7388 2101</p>
			<p>Enquireys: fangs@lostboyspizza.com</p>
			<p>Bookings: fangs@lostboyspizza.com</p>
			<h2>LOCATION</h2>
			<p>245 Eversholt St, London NW1 1BA</p>
		</div>
	</div>
</section>
<section class="blog">
	<div class="blogHeading"><h2>The Pizza Diaries</h2></div>	

	<?php
// The Query
	$the_query = new WP_Query( 'posts_per_page=3' );

// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			?>		
			<div class="homeBlog">
				<div class="storyImage">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					</a>
				</div>
				<div class="storyContent">
					<a href="<?php the_permalink(); ?>">
						<P><strong><?php the_title(); ?></strong></P>
					</a>
				</div>
			</div>
			<?php 
			





		}
	} else {
    // no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

	?>
</section>


<section class="menuSection">



	<h1><span class="main-text skew">
		Menu
		<span class="back-text glitch">Menu</span>
	</span>
</h1>











<div class="leftPicBox">

	<img src="<?php echo get_template_directory_uri(); ?>/img/pizza2cutout.png" alt="">

</div>


<div class="pizzaMenu">



	<a href="<?php the_field('MAIN_MENU'); ?>" class="menuLink">
		<img src="<?php echo get_template_directory_uri(); ?>/img/menu/pizza.jpg" alt="Avatar">
		<div class="bottom">
			<h4>MAIN MENU</h4>
			<!--<div class="text"><h1>PIZZA</h1></div>-->
		</div>
	</a>

	<a href="<?php the_field('BRUNCH'); ?>" class="menuLink">
		<img src="<?php echo get_template_directory_uri(); ?>/img/menu/brunch.jpg" alt="Avatar">
		<div class="bottom">
			<h4>BRUNCH</h4>
			<!--<div class="text"><h1>PIZZA</h1></div>-->
		</div>
	</a>

	<a href="<?php the_field('DESSERTS'); ?>" class="menuLink">
		<img src="<?php echo get_template_directory_uri(); ?>/img/menu/dessert.jpg" alt="Avatar">
		<div class="bottom">
			<h4>DESSERTS</h4>
			<!--<div class="text"><h1>PIZZA</h1></div>-->
		</div>
	</a>

	<a href="<?php the_field('DRINKS'); ?>" class="menuLink">
		<img src="<?php echo get_template_directory_uri(); ?>/img/menu/drink.jpg" alt="Avatar">
		<div class="bottom">
			<h4>DRINKS</h4>
			<!--<div class="text"><h1>PIZZA</h1></div>-->
		</div>
	</a>

	<a href="<?php the_field('PARTY'); ?>" class="menuLink">
		<img src="<?php echo get_template_directory_uri(); ?>/img/menu/party.jpg" alt="Avatar">
		<div class="bottom">
			<h4>PARTY</h4>
			<!--<div class="text"><h1>PIZZA</h1></div>-->
		</div>
	</a>
	

</div>
	


						</section>
						<section class="promo"></section>



						<?php get_footer(); ?>