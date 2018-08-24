(function($) {
  $(document).ready(function() {
    $('.view-foundation-documents').before("<div class='foundation-document-image'></div>");

    $('.contact-card .views-field-body').after('<div class="contact"></div>');
    let contacts = $('.contact-card .contact');
    var i;

    for (i = 1; i <= contacts.length; i++) {
      let contact = $('.views-row-' + i + ' .contact-card .contact');
      let phone = $('.views-row-' + i + ' .contact-card .views-field-field-phone');
      let email = $('.views-row-' + i + ' .contact-card .views-field-field-e-mail');
      let location = $('.views-row-' + i + ' .contact-card .views-field-field-room-number');

      contact.append(phone).append(location).append(email);
    }
  });
})(jQuery);