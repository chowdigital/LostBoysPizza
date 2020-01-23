<?php /* Template Name: Lost Boys Homepage */ get_header(); ?>


<section class="pizzaBlock">

	<div class="textArea">

	<h2>Black Charcoal Pizza</h2>
	<h2><span class="main-text skew">
		Killer Cocktails
		<span class="back-text glitch">Killer Cocktails</span>
	</span></h2>
	<h2>All served with a banging 80s playlist</h2>
	</div>
		
		<div class="imgArea">
			<div class="spinPizza"></div>

	</div>

</section>

	<h1 class="lbSectionTitle"><span class="main-text skew">
	Welcome to Lost Boys
		<span class="back-text glitch">Welcome to Lost Boys</span>
	</span></h1>


<hr class="dotty">
<section class="instagram">
	

	<h2>Lost Boys Instagram</h2>
<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/9f45f5bfc68d501ba253cf5e24a97033.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>


</section>
<hr class="dotty">
<section class="contactArea">
		<div class="leftPicContact">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pizza2.gif" alt="Pizza">
	</div>
		<div class="rightTextContact">
			<h2><span class="main-text skew">
		CONTACT
		<span class="back-text glitch">CONTACT</span>
	</span></h2>
			<p><strong>
					<a href="tel:02072728955">Phone:	020 7388 2101</a>
	       		 </strong></p>
			
			 <p><strong>
	           		 <a href="mailto:fangs@lostboyspizza.com?Subject=BITE%20ME!" target="_top">Enquireys: fangs@lostboyspizza.com</a>
	      		 </strong></p>
	      	 <p><strong>
	           		 <a href="mailto:fangs@lostboyspizza.com?Subject=BITE%20ME!" target="_top">Bookings: fangs@lostboyspizza.com</a>
	      		 </strong></p>
			<h2><span class="main-text skew">
		LOCATION
		<span class="back-text glitch">LOCATION</span>
</span></h2>
		<p><strong>
	           		 <a href="https://www.google.com/maps/place/Lost+Boys+Pizza+Camden/@51.5336039,-0.1378751,15z/data=!4m5!3m4!1s0x0:0x9e9cf7ac30c9cc68!8m2!3d51.5336039!4d-0.1378751" target="_top">Open in Google Maps</a>
	      		 </strong></p>


		

	
			<p><strong>245 Eversholt St, London NW1 1BA</strong></p>
		</div>
	
</section>

<hr class="dotty">
<!--<section class="blog">
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

	?>-->
</section>


<section class="menuSection">



	<h2><span class="main-text skew">
		Menu
		<span class="back-text glitch">Menu</span>
	</span>
</h2>


<section class="pizzaBlock">

	<div class="textArea">

	<h2>Black Charcoal Pizza</h2>
	<h2><span class="main-text skew">
		Killer Cocktails
		<span class="back-text glitch">Killer Cocktails</span>
	</span></h2>
	<h2>All served with a banging 80s playlist</h2>
	</div>
		
		<div class="imgArea">
			<div class="spinPizza"></div>

	</div>

</section>








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