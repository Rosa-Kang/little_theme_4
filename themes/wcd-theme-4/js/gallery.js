/**
 * File: gallery.js
 *
 * Templates:
 *
 * Slider (swiper.js)
 *
 */
(function ($) {
  $(function () {
    // Start of Slider - Testimonials -----------
    var testimonialSwiper = new Swiper('.testimonial-swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      speed: 2000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.testimonial-next',
        prevEl: '.testimonial-prev',
      },
    });
    // End of Slider - Testimonials -------------

    // Start of Our Clients Slider --------------------
    var clientSwiper = new Swiper('.client-swiper', {
      slidesPerView: 4,
      spaceBetween: 8,
      centeredSlides: false,
      loop: true,
      speed: 2000,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.client-btn-next',
        prevEl: '.client-btn-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 8,
          centeredSlides: true,
        },
      },
    });
    // End of Our Clients Slider ------------------------
  }); // End of Doc Ready -------------------
})(jQuery);
