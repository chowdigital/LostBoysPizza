(function ($, root, undefined) {

  $(function () {

    'use strict';
    
    // DOM ready, take it away




    $('.isotopeGrid').isotope({
      itemSelector: '.grid-item',
    });

// filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $('.isotopeGrid').isotope({ filter: filterValue });
  $('.filter-button-group button').removeClass('active');
  $(this).addClass('active');
});


    // END Script
  });
  
})(jQuery, this);

