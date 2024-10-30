(function($) {
    $('.js-share-twitter-link').click(function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      window.open(href, "Twitter", "height=700,width=550,resizable=1");
    });
    $('.js-share-facebook-link').click(function(e) {
      e.preventDefault();
      var href = $(this).attr('href');
      window.open(href, "Facebook", "height=700,width=550,resizable=1");
    });
    $('.js-share-linkedin-link').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        window.open(href, "LinkedIn", "height=700,width=550,resizable=1");
      });
    $('.js-share-telegram-link').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        window.open(href, "Telegram", "height=700,width=550,resizable=1");
      });
    $('.js-share-whatsapp-link').click(function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        window.open(href, "WhatsApp", "height=700,width=550,resizable=1");
      });
  })(jQuery);