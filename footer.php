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


 
<section id="bookLink" name="book" class="dmnBooking">

		<hr class="dotty">
 <div id="google-reviews"></div>
	<hr class="dotty">

		<h2><span class="main-text skew">
		Make a booking
		<span class="back-text glitch">Make a booking</span>
	</span>
</h2>
	    <script src="//widgets.designmynight.com/bookings-partner.min.js" dmn-booking-form="true" venue="5bd825217864b53b6f501974" hide-offers="false" hide-powered-by="false" search-venues="false" monday-first="true"></script>
</section>
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
	           		 <a href="mailto:fangs@lostboyspizza.com?Subject=BITE%20ME!" target="_top">Email: fangs@lostboyspizza.com</a>
	      		 </strong></p>
	   	</div>
		<div class="contactLink">
	            <p><strong>
					<a href="tel:02073882101">Call:	020 7388 2101</a>
	       		 </strong></p>
		</div>
		
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div></div>
<a href="https://m.uber.com/ul/?action=setPickup&client_id=1JA-ZORtoiw_ceO34u9izFcYuuz_iAzm&pickup=my_location&dropoff[formatted_address]=Lost%20Boys%20Pizza%20Camden%2C%20Eversholt%20Street%2C%20London%2C%20UK&dropoff[latitude]=51.533604&dropoff[longitude]=-0.137875"><div class="uberlink"><p>Get me to Lost Boys Pizza!</p>
<p><strong>Click here for Uber</strong></p></div></a>
</body>

 <script>
jQuery(document).ready(function($) {
  if ($("#google-reviews").length == 0) {
    return
  }
  // Find a placeID via https://developers.google.com/places/place-id
  $("#google-reviews").googlePlaces({
    placeId: 'ChIJX2mpTDcbdkgRaMzJMKz3nJ4',
    // the following params are optional (default values)
    header: "<h2>Latest Google Reviews</h2>", // html/text over Reviews
    footer: '', // html/text under Reviews block
    maxRows: 3, // max 5 rows of reviews to be displayed
    minRating: 5, // minimum rating of reviews to be displayed
  
    textBreakLength: "90", // length before a review box is set to max width
    shortenNames: true, // example: "Max Mustermann" -> "Max M."",
    moreReviewsButtonUrl: 'https://www.google.com/search?client=firefox-b-d&q=lost+boys+pizza#lrd=0x48761b374ca9695f:0x9e9cf7ac30c9cc68,1,,,', // url to Google Place reviews popup
    moreReviewsButtonLabel: 'Show More Reviews',
    writeReviewButtonUrl: 'https://www.google.com/search?client=firefox-b-d&q=lost+boys+pizza#lrd=0x48761b374ca9695f:0x9e9cf7ac30c9cc68,3,,,', // url to Google Place write review popup
    writeReviewButtonLabel: 'Write New Review',
    showProfilePicture: true
  });
});
</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76LJMW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
</html>
