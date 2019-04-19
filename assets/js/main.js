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
      $bgobj.css({ backgroundPosition: coords });

    }); // end window scroll

  });
  
});
