$(document).ready(function() {
  $('[data-action="see-password"]').on('click', function() {
      var el = '#' + $(this).attr('data-toggle');
      var icon = $(this).find('i');
      if ($(el).attr('type') == 'password') {
          icon.removeClass('bi-eye-fill').addClass('bi-eye-slash-fill');
          $(el).attr('type', 'text');
      } else {
          icon.removeClass('bi-eye-slash-fill').addClass('bi-eye-fill');
          $(el).attr('type', 'password');
      }
      $(el).focus();
  });
});