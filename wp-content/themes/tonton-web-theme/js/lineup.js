$(function(){
  const close = $('.modal-close');
  const search = $('.search-icon');

  $(search).on('click', function() {
    var num = $(this).data('num');
    console.log(999,num);
    var container = $(`.modal-container-${num}`);
    $(container).addClass('active');

    //サムネイル
    var sliderThumbnailLineupList = new Swiper(`.lineup-sliderModal .slider-thumbnail-${num}` , {
      slidesPerView: 3,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      spaceBetween: 10,
      breakpoints: {
        600: {
          slidesPerView: 8,
        },
      },
    });

    //スライダー lineup
    var slider = new Swiper(`.lineup-sliderModal .slider-${num}`, {
      navigation: {
        nextEl: '.swiper-modal-next',
        prevEl: '.swiper-modal-prev',
      },
      thumbs: {
        swiper: sliderThumbnailLineupList,
      }
    });

    return false;
  })

  $(close).on('click',function(){
    var num = $(this).data('num');
    var container = $(`.modal-container-${num}`);
    $(container).removeClass('active');
  });

  $(document).on('click',function(e) {
    var container = $(`.modal-container`);
    if(!$(e.target).closest('.modal-body').length) {
      $(container).removeClass('active');
    }
  });
});
