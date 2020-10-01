$(document).ready(function(){

  $("#photography-template-portfolio .slider").slick({
    centerMode: true,
    centerPadding: '60px',
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $("#photography-template-testimonials .slider").slick({
    slidesToShow: 1,
    arrows: true,
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 1,
          arrows: false,
          autoplay: true
        }
      }
    ]
  });

  $('#photography-template-portfolio .slider-img').on('click', function(){
    $('.modal').css("display", "block");
  });

  $('.close').on('click', function(){
    $('.modal').css("display", "none");
  });

});
