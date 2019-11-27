// window.addEventListener('resize', event => {
//   console.log(window.innerWidth);
//   let sm = window.innerWidth < 572;
//   if (sm) {
//     $('.cards-slider').slick({
//       dots: true,
//       infinite: true,
//       speed: 500,
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       arrows: false,
//       autoplay: false,
//       autoplaySpeed: 2000
//     });
//   } else {
//     $('.cards-slider').unslick();
//   }
// });

$('.cards-slider').slick({
  dots: true,
  mobileFirst: true,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: false,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 600,
      settings: 'unslick'
    }
  ]
});
$('.carousel').slick({
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  autoplay: false
});
(function($) {
  var $window = $(window),
    $cards = $('.cards');

  $window
    .resize(function resize() {
      if ($window.width() < 514) {
        return $cards.addClass('cards-slider');
      }
      $cards.removeClass('cards-slider');
    })
    .trigger('resize');
})(jQuery);
$('.selector').slick({
  nextArrow: '<i >next</i>',
  prevArrow: '<i class="fa fa-arrow-left"></i>'
  // add the rest of your options here
});
