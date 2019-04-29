$(function() {

	// Cache the window object
  var $window = $(window);

  // Paralax background effect
  $('section[data-type="background"]').each(function() {

    var $bgobj = $(this); // assigning the object

    $(window).scroll(function() {

      // scroll the background at var speed
      // the yPos is a negative value because we are scrolling it up

      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      // final background position
      var coords = '50% ' + yPos + 'px';

      // move the background
      $bgobj.css({  backgroundPosition: coords });

      // changes navbar position when scrolled on mobile
      if(yPos < -5) {
        if($('body').hasClass('logged-in')) {
          $('nav.navbar-fixed-top').addClass('sticky');
        } else {
          $('nav.navbar-fixed-top').addClass('opacity');
        }
      } else {
        $('nav.navbar-fixed-top').removeClass('sticky opacity');
      }

      // scroll 2 top button
      if(yPos < -20) {
        $('.scroll2Top').addClass('scroll-visible');
      } else {
        $('.scroll2Top').removeClass('scroll-visible');
      }


    }); // end window scroll

  });

  $('.scroll2Top').click(function(e) {
    e.preventDefault();
    $([document.documentElement, document.body]).animate({
      scrollTop: $('body').offset().top
    }, 1000)
  })

});
