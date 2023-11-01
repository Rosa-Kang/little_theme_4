/**
 * File animations.js.
 *
 * Settings for Animate on Scroll (aos) and Mobile Menu.
 * https://github.com/michalsnik/aos/tree/v2
 */
(function ($) {
  $(function () {
    // Start of Popout Menu -------------------------
    $('#toggle').click(function () {
      $(this).toggleClass('toggled');
      if ($(this).hasClass('toggled')) {
        $('.dimmed').fadeIn(200);
        $('#popout').css({
          '-webkit-transform': 'translateX(0)',
          transform: 'translateX(0)',
        });
      } else {
        $('.dimmed').fadeOut(200);
        $('#popout').css({
          '-webkit-transform': 'translateX(100%)',
          transform: 'translateX(100%)',
        });
      }
    });

    // Detect click outside mobile menu
    $(document).mouseup(function (e) {
      var menu = $('.popout-menu');
      if (!menu.is(e.target) && menu.has(e.target).length === 0) {
        $('.dimmed').fadeOut(200);
        $('#popout').css({
          '-webkit-transform': 'translateX(100%)',
          transform: 'translateX(100%)',
        });
      }
    });

    $('#close-popout').click(function () {
      $('.dimmed').fadeOut(200);
      $('#popout').css({
        '-webkit-transform': 'translateX(100%)',
        transform: 'translateX(100%)',
      });
    });
    // End of Popout Menu -----------------------

    // Start of Animate on Scroll ---------------------
    // Animations added to elements without data-aos attribute in html element
    AOS.init({
      duration: 1300,
      once: true,
      mirror: true,
    });

    $(window).on('load', function () {
      AOS.refresh();
    });
    // End of Animate on Scroll ----------------------
  }); // end of doc ready
})(jQuery);
