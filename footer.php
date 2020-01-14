<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LostBoys2020
 */

?>

</div><!-- #content -->


<!-------- Google Reviews 
<div class="dottedBottom grid">
	<div class="d1-12">
    	<h2>Google Reviews</h2>
   	</div>
	<div class="d1-12 floatRight">
    	<a href="https://www.google.com/search?ei=dNh2XL3sBJiEjLsPqb6imA8&q=CROQUE+MONSIEUR+absynth&oq=CROQUE+MONSIEUR+absynth&gs_l=psy-ab.3..0i13l2.1392.3192..3392...0.0..0.184.839.6j2......0....1..gws-wiz.......0i71j0i20i263j0j0i67j0i22i30j33i160.VUySLkGf4Bo#lrd=0x48761b332c312583:0x52667f38962a51ce,1,,," class="btn-red">
    	 <p><strong>SEE ALL REVIEWS</strong></p></a>
   	</div>
   	<div class="box6">
     	<div id="google-reviews"></div>
   	</div>
</div>

<link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">

  <script src="https://cdn.jsdelivr.net/gh/stevenmonson/googleReviews@6e8f0d794393ec657dab69eb1421f3a60add23ef/google-places.js"></script>
 

  <script>
    jQuery(document).ready(function( $ ) {
     $("#google-reviews").googlePlaces({
        placeId: 'ChIJgyUxLDMbdkgRzlEqljh_ZlI' //Find placeID @: https://developers.google.com/places/place-id
        , render: ['reviews']
        , min_rating: 5
        , max_rows: 4
      });
   });
 </script>
-->
<footer id="colophon" class="site-footer">

	<!-- TEXT -->
	<div class="site-info">
		<div class="blackText">
			<h2><span class="main-text skew">
				Win free pizza for a year
				<span class="back-text glitch">Win free pizza for a year</span>
			</span>
		</h2>
		<h4>Sell your <span class="cross">soul</span> email, maybe win some pizza.</h4> 
	</div>
	<!-- Email Form Mail Chimp -->

	<div id="mc_embed_signup" class="box">
		<form action="https://lostboyspizza.us17.list-manage.com/subscribe/post?u=cca8f808f75bca50f48d3c50e&amp;id=83779e1349" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<div id="mc_embed_signup_scroll" class="footerGrid">


				<div class="inputWin">
					<div class="mc-field-group">
						<input type="text" value="" name="FNAME" " id="mce-FNAME" placeholder="First name">
					</div>
				</div>
				<div class="inputWin">

					<div class="mc-field-group">
						<input type="text" value="" name="LNAME" id="mce-LNAME" placeholder="Last Name">
					</div>
				</div>
				<div class="inputWin">

					<div class="mc-field-group box">

						<input type="email" value="" name="EMAIL" class="required email inputEmail" id="mce-EMAIL" placeholder="Email">
					</div>
				</div>

		

			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cca8f808f75bca50f48d3c50e_83779e1349" tabindex="-1" value=""></div>

			<div class="clear">

				<input type="submit" value="Sell" name="subscribe" id="mc-embedded-subscribe" class="button">
			</div>
		</div>
		</form>
	</div>





	<!-- Contact Links -->
	<div class="contactWrapper">
			
		<div class="contactLink slMobile">
				<div class="socialLink">
					<a href="https://www.facebook.com/LostBoysPizza/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/fb.svg" alt=""></a>
				</div>
				<div class="socialLink">
					<a href="https://twitter.com/lostboyspizza?lang=e"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/tw.svg" alt=""></a>
				</div>
				<div class="socialLink">
					<a href="https://www.instagram.com/lostboyspizza/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/in.svg" alt=""></a>
				</div>
		</div>		
	
		<div class="contactLink">
				 <p><strong>
	           		 <a href="mailto:fangs@lostboyspizza.com?Subject=BITE%20ME!" target="_top">fangs@lostboyspizza.com</a>
	      		 </strong></p>
	   	</div>
		<div class="contactLink">
	            <p><strong>
					<a href="tel:02072728955">	020 7272 8955</a>
	       		 </strong></p>
		</div>
		
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div></div>

</body>
 
</html>
