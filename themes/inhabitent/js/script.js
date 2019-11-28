// (function($) {
//   $(function() {
//     // your code here
//   });
// })(jQuery);

(function($) {
  $(document).ready(function($) {
    $('.search-submit').click(function(event) {
      event.preventDefault();
      $('.search-field')
        .css('display', 'inline-block')
        .animate({ width: 300, opacity: 1 }, 1000);
      $('.search-field')
        .toggle()
        .focus();
    });
    $('.search-field').blur(function() {
      // TODO: only close if empty
      $('.search-field').animate({ width: 0, opacity: 0 }, 1000);
    });
  });
})(jQuery);
