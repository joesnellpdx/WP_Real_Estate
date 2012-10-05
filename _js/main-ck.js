// CUSTOM JS ADD
// FOR JOESNELL THEME
// ++++++++++++++++++++++++++++++++++++++++++
jQuery(document).ready(function(e){e("body").addClass("js");var t=e("#menu"),n=e(".menu-link");$containerfluid=e(".container-fluid");n.click(function(){n.toggleClass("active");t.toggleClass("active");$containerfluid.toggleClass("active");return!1});setTimeout(function(){window.scrollTo(0,1)},1e3);e(window).load(function(){e(".flexslider").flexslider({animation:"slide"})})});