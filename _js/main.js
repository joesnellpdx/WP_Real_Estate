// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++
// 

// @codekit-prepend "fitvids.js"

jQuery(document).ready(function($) {

  $('body').addClass('js');
    var $menu = $('#menu'),
      $menulink = $('.menu-link');
      $containerfluid = $('.container-fluid');
    
  $menulink.click(function() {
    $menulink.toggleClass('active');
    $menu.toggleClass('active');
    $containerfluid.toggleClass('active');
    return false;
  });


  $(window).load(function() {
      $('.flexslider').flexslider({
      animation: "slide",
      prevText: "&lt; Previous",
      nextText: "Next &gt;"

     });
    
  });

  setTimeout(function () {
    window.scrollTo(0, 1);
  }, 1000);
  $( ".textwidget" ).fitVids();
  $( ".post" ).fitVids();


});