// jQuery.noConflict()
  jQuery(document).ready(function($) {

$('.slider').slick({
  centerMode: true,
  slidesToShow: 3,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

 $('.slider_catalog').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});


  $('.map_dell').hover(function(z) {
        z.preventDefault();
        $(".map_layer").toggleClass('map_active');
    });
 $('.map_dell2').hover(function(z) {
        z.preventDefault();
        $(".footer_logo").toggleClass('map_active');
    });


  // $(".slick-center > div > div").children(".slider_layer").css("background", "transparent");

});
  $(".modal").each( function(){
  $(this).wrap('<div class="overlay"></div>')
});
$(".open-modal").on('click', function(e){
  e.preventDefault();
  e.stopImmediatePropagation;
  var $this = $(this),
      modal = $($this).data("modal");
  $(modal).parents(".overlay").addClass("open");
  setTimeout( function(){
    $(modal).addClass("open");
  }, 50);
  
  $(document).on('click', function(e){
    var target = $(e.target);
    
    if ($(target).hasClass("overlay")){
      $(target).find(".modal").each( function(){
        $(this).removeClass("open");
      });
      setTimeout( function(){
        $(target).removeClass("open");
      }, 350);
    }
  });
});
$(".close-modal").on('click', function(e){
  e.preventDefault();
  e.stopImmediatePropagation;
  var $this = $(this),
      modal = $($this).data("modal");
  $(modal).removeClass("open");
  setTimeout( function(){ 
    $(modal).parents(".overlay").removeClass("open");
  }, 350);
  
});
// var slider = $(".people_part,  .people_part_second, .last_article_content");
// slider.on('wheel', (function(e) {
//   e.preventDefault();
//   scroll = setTimeout(function(){scrollCount=0;}, 200);
//   if(scrollCount) return 0;
//   scrollCount=1;
//   if (e.originalEvent.deltaY < 0) {
//     $(this).slick('slickNext');
//   }
//   else {
//     $(this).slick('slickPrev');
//   }
// }));

