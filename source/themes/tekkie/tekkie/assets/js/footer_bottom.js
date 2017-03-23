jQuery(document).ready(function(){
function FooterBottom() {
   var docHeight = $(window).height();
   var footerHeight = $('#footer').height();
   var footerTop = $('#footer').position().top + footerHeight;

   if (footerTop < docHeight) {
     jQuery('#footer').css('margin-top', (docHeight - footerTop) + 0 +  'px');
   }
 }

  jQuery(window).resize(function() {
   new FooterBottom();
 });
 new FooterBottom();
});

// Back to top link
if (jQuery('#back-to-top').length) {
  var scrollTrigger = 100, // px
      backToTop = function () {
          var scrollTop = $(window).scrollTop();
          if (scrollTop > scrollTrigger) {
              jQuery('#back-to-top').addClass('show');
          } else {
              jQuery('#back-to-top').removeClass('show');
          }
      };

  backToTop();
  $(window).on('scroll', function () {
      backToTop();
  });
  jQuery('#back-to-top').on('click', function (e) {
      e.preventDefault();
      jQuery('html,body').animate({
          scrollTop: 0
      }, 700);
  });
}