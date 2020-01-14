
<?php /* Template Name: Test Location CM */ get_header(); ?>
  <main role="main">
    <section id="section-aaHide" class="grid">
      <div class="imgLogo box">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.gif" alt=""></a>
      </div>
    </section>
<!-- section TITLE & BUTTONS-->
    <section id="section-h" class="grid">
      <div class="d1-8">
        <h1>
        	<span class="main-text skew">  <?php the_title(); ?>
    <span class="back-text glitch">  <?php the_title(); ?></span>
  </span>
</h1>
        <div>
          <a href="#book" class="btn-red">
            <p><strong>Book A TABLE</strong></p>
          </a>
            <a href="#find" class="btn-red">
              <p><strong>Find US</strong></p>
            </a>
            <a href="croque-monsieur-cocktail-menu" class="btn-red">
              <p><strong>View Menu</strong></p>
            </a>
            <a href="croque-monsieur-gallery" class="btn-red">
              <p><strong>View Gallery</strong></p>
            </a>
          </div>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      </div>
<!-- Info -->
      <div class="story grid">
        <div class="storyImage">
          <img src="<?php the_post_thumbnail_url(); ?>"/>
        </div>
     
        <div class="storyImageFull">
          <img src="<?php echo get_template_directory_uri(); ?>/img/blood.png" alt="">
        </div>
        <div class="storyContentFull">
          <div class="dottedBottom">
            <?php the_content(); // Dynamic Content ?>
          </div>
          <div class="dottedBottom grid" id="book">
              <div class="d1-12">
                <h2>Book a table</h2>
              </div>
              <div class="d1-12 floatRight">
                 <div id="TA_cdsratingsonlynarrow604" class="TA_cdsratingsonlynarrow"><ul id="82KmYW4cW" class="TA_links KpMugLWq"><li id="Ijp1f9pjdCZ" class="eGqju7Qrmz"><a target="_blank" href="https://www.tripadvisor.co.uk/"><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=604&amp;locationId=12620661&amp;lang=en_UK&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
              </div>
              <div class="box6">
               
              
            <?php echo do_shortcode('[contact-form-7 id="345" title="Contact Form Croque Monsieur"]'); ?>
<!--
    <p><strong>
                    <a href="mailto:ABSINTHEBAR@LOSTBOYSPIZZA.COM?Subject=BITE%20ME!" target="_top"><small>ABSINTHEBAR@LOSTBOYSPIZZA.COM</small></a>
                  </strong></p>
                -->
              </div>

          </div>
        </div>
      </div>
    </section>

    <section class="padSection">
      <!-------- Google Reviews -->
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
     </section>

<!--Section BLOG -->
    <section class="grid padSection">
       <div class="dottedBottom grid box6">
                 <div class="box6"><h2>News & Events</h2></div>



                 <?php
  // The Query
                 $the_query = new WP_Query( 'posts_per_page=3' );

  // The Loop
                 if ( $the_query->have_posts() ) {
                  while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    ?>        <div class="d1-4">
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
          
<!--Section C -->


              <!-- Info -->

            <?php endwhile; ?>

            <?php else: ?>

              <!-- article -->
              <article>

                <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

              </article>
              <!-- /article -->

            <?php endif; ?>
      </div>
     </section>
<!-- SECTION FIND -->
     <section class="padSection grid" id="find">
             <div class="dottedBottom grid box6">
              <div class="d1-4 padTop">
                <div class="box6">
                  <h2>FIND ABSINTHE</h2></div>
                  <!-- wp:paragraph -->
                  <p><strong>CROQUE MONSIEUR - CAMDEN </strong></p>
                  <!-- /wp:paragraph -->

                  <!-- wp:paragraph -->
                  <p>245 Eversholt St</p>
                  <!-- /wp:paragraph -->

                  <!-- wp:paragraph -->
                  <p>London NW1 1BA</p>
                  <!-- /wp:paragraph -->

                  <!-- wp:paragraph -->
                  <p><strong>
                    <a href="mailto:ABSINTHEBAR@LOSTBOYSPIZZA.COM?Subject=BITE%20ME!" target="_top"><small>ABSINTHEBAR@LOSTBOYSPIZZA.COM</small></a>
                  </strong></p>
                  <!-- /wp:paragraph -->

              

                </div>
                  <!-- Google Map -->
                  <div class="d1-8b padTop">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9927.55421435781!2d-0.1378751!3d51.5336039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52667f38962a51ce!2sCroque+Monsieur+Absinthe+Bar!5e0!3m2!1sen!2suk!4v1551292581171" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
<div class="box6">

    <p><small>CROQUE MONSIEUR ABSINTHE BAR is located on Eversholt St off Euston Road. The nearest underground station is Mornington Crescent (Northern Line) also close by is Camden Road (Overground). Nearby National Rail Stations are London Euston, Kings Cross and St Pancras International.  The London Borough of Camden is a borough in North West London, and forms part of Inner London. Nearby attractions include the famous Camden Market, Regent's Park and  London Zoo.</small></p>

   </div>
              </section> 
            <!-- /SECTION FIND -->
</main>


  <link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">

  <script src="https://cdn.jsdelivr.net/gh/stevenmonson/googleReviews@6e8f0d794393ec657dab69eb1421f3a60add23ef/google-places.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCVFBdQrw5q49Hzg1cytkmfKDvxUpDIuSI&signed_in=true&libraries=places"></script>

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
 <?php get_footer(); ?>

