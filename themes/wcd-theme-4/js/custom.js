/**
 * File: custom.js
 *
 * Templates: All
 *
 */
(function ($) {
  $(function () {
    // Start of Auto Add Rel to External Links -------------------
    addTargetBlankToExternalLinks();
    function addTargetBlankToExternalLinks() {
      $('a[href^="http"]')
        .not('a[href*="' + location.hostname + '"]')
        .attr({ target: '_blank', rel: 'noopener noreferrer' });
    }

    // Open all pdfs in a new tab
    $('a[target!="_blank"][href$=".pdf"]').attr({
      target: '_blank',
      title: 'Opens in a new window',
      rel: 'noopener noreferrer',
    });
    // End of Auto Add Rel to External Links ----------------
    // Start of Modals ----------------------
    $('.modal').each(function (i) {
      var modalContainerId = $(this).attr('data-modal', 'modal-' + (i + 1));
    });

    $('.show-modal-btn').each(function (i) {
      var modalId = $(this).attr('id', 'modal-' + (i + 1));

      $(modalId).click(function () {
        $('[data-modal="' + $(this).attr('id') + '"]').addClass('is-active');
      });
    });

    // Close Modal
    $('.modal-close-star').click(function () {
      $('.modal').removeClass('is-active');
    });

    $(document).mouseup(function () {
      $('.modal').removeClass('is-active');
    });
    // End of Modals ------------------------

    // Start of FAQ Accordion --------------------
    $('.schema-faq').addClass('my-5');
    $('.schema-faq-answer').addClass('has-background-light');
    $('.schema-faq-answer').css('display', 'none');
    $('.schema-faq-question').addClass(
      'faq-closed bg-light-bis has-text-primary card-title has-text-weight-normal is-flex'
    );
    $('.schema-faq-question').click(function () {
      if ($(this).next().is(':visible')) {
        $(this).next().slideUp();
        $(this).removeClass('faq-opened');
        $(this).addClass('faq-closed');
      } else {
        $('.schema-faq-answer').slideUp();
        $(this).removeClass('faq-closed');
        $(this).next().slideDown();
        $(this).addClass('faq-opened');
        $('.schema-faq-question').not(this).removeClass('faq-opened');
        $('.schema-faq-question').not(this).addClass('faq-closed');
      }
    }); // End of FAQ Accordion ----------------

    // mailchimp change attributes
    $('input#mc-embedded-subscribe').attr('value', 'Sign Up');
    $('input#mce-FNAME').attr('placeholder', 'First Name');
    $('input#mce-EMAIL').attr('placeholder', 'Email');
    // End of mailchimp
  }); // End of Doc Ready -------------------
})(jQuery);
