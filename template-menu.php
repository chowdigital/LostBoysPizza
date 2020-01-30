<?php /* Template Name: Menu */ get_header(); ?>






<section id="menuLink" class="menuSection">


<div class="pizzaBlock">

	<div class="textArea" id="menuArea">

		<h2><span class="main-text skew">
		Menu
		<span class="back-text glitch">Menu</span>
	</span>
</h2>


		<a href="<?php the_field('MAIN_MENU'); ?>" class="menuLink">
			<img src="<?php echo get_template_directory_uri(); ?>/img/menu/pizza.jpg" alt="Avatar">
			<div class="bottom">
				<h4>MAIN MENU</h4>
				<!--<div class="text"><h1>PIZZA</h1></div>-->
			</div>
		</a>
		<a href="<?php the_field('VEGAN'); ?>" class="menuLink">
			<img src="<?php echo get_template_directory_uri(); ?>/img/menu/vegan.jpg" alt="Avatar">
			<div class="bottom">
				<h4>VEGAN</h4>
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
	<div class="imgArea">
		<div class="spinPizza hidePizza"></div>

	</div>

</div>

</section>
					



						<?php get_footer(); ?>