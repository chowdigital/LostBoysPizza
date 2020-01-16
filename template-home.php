<?php /* Template Name: Lost Boys Homepage */ get_header(); ?>
<section class="pizza">

	<div class="leftTextBox">

	<h2>Black Charcoal Pizza</h2>
	<h2><span class="main-text skew">
		Killer Cocktails
		<span class="back-text glitch">Killer Cocktails</span>
	</span></h2>
	<h2>All served with a banging 80s playlist</h2>
	</div>
		<div class="rightPicBox">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pizza1.png" alt="Pizza">
	</div>
</section>


<section class="instagram">
	<h2>Welcome to Lost Boys</h2>
	<h3>Lost Boys Instagram</h3>
<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/9f45f5bfc68d501ba253cf5e24a97033.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:1em;overflow:hidden;"></iframe>
..lightwidget, .lightwidget *
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



	<h2><span class="main-text skew">
		Menu
		<span class="back-text glitch">Menu</span>
	</span>
</h2>











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