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
$('.iphone-slider').slick({
  dots: true,
  mobileFirst: true,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerMode: true,
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
  prevArrow: $('.prevto'),
  nextArrow: $('.nexto'),
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  autoplay: false
});
