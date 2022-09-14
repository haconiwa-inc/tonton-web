$(function(){
  const open = $('.more-button span');
  const close = $('.modal-close');
  const container = $('.modal-container');
  const search = $('.search-icon')
  $(open).on('click', function() {
    $(container).addClass('active');
    return false;
  });

  $(search).on('click', function() {
    $(container).addClass('active');
    return false;
  })

  $(close).on('click',function(){
    $(container).removeClass('active');
  });

  $(document).on('click',function(e) {
    if(!$(e.target).closest('.modal-body').length) {
      $(container).removeClass('active');
    }
  });

});

// swiper lineup
const thumbLineup = document.querySelectorAll('.lineupDetail-slider .thumb-media');

const switchThumbLineup = (index) => {
  document.querySelector('.lineupDetail-slider .thumb-media-active').classList.remove('thumb-media-active');
  thumbLineup[index].classList.add('thumb-media-active');
}

const mySwiperLineup = new Swiper('.lineupDetail-slider .swiper', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  on: {
    afterInit: (swiper) => {
      thumbLineup[swiper.realIndex].classList.add('thumb-media-active');
      for (let i = 0; i < thumbLineup.length; i++) {
        thumbLineup[i].onclick = () => {
          swiper.slideTo(i);
        };
      }
    },
    slideChange: (swiper) => {
      switchThumbLineup(swiper.realIndex);
    },
  },
});

// swiper chintai
const thumbChintai = document.querySelectorAll('.chintaiDetail-slider .thumb-media');

const switchThumbChintai = (index) => {
  document.querySelector('.chintaiDetail-slider .thumb-media-active').classList.remove('thumb-media-active');
  thumbChintai[index].classList.add('thumb-media-active');
}

const mySwiperChintai = new Swiper('.chintaiDetail-slider .swiper', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true,
  },
  on: {
    afterInit: (swiper) => {
      thumbChintai[swiper.realIndex].classList.add('thumb-media-active');
      for (let i = 0; i < thumbChintai.length; i++) {
        thumbChintai[i].onclick = () => {
          swiper.slideTo(i);
        };
      }
    },
    slideChange: (swiper) => {
      switchThumbChintai(swiper.realIndex);
    },
  },
});




// modal lineup
//サムネイル
var sliderThumbnailLineup = new Swiper('.lineupDetail-sliderModal .slider-thumbnail', {
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
var slider = new Swiper('.lineupDetail-sliderModal .slider', {
  navigation: {
    nextEl: '.swiper-modal-next',
    prevEl: '.swiper-modal-prev',
  },
  thumbs: {
    swiper: sliderThumbnailLineup,
  }
});

//サムネイル
var sliderThumbnailLineupList = new Swiper('.lineup-sliderModal .slider-thumbnail', {
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
var slider = new Swiper('.lineup-sliderModal .slider', {
  navigation: {
    nextEl: '.swiper-modal-next',
    prevEl: '.swiper-modal-prev',
  },
  thumbs: {
    swiper: sliderThumbnailLineupList,
  }
});

// modal chintai
//サムネイル
var sliderThumbnailChintai = new Swiper('.chintaiDetail-sliderModal .slider-thumbnail', {
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

//スライダー chintai
var slider = new Swiper('.chintaiDetail-sliderModal .slider', {
  navigation: {
    nextEl: '.swiper-modal-next',
    prevEl: '.swiper-modal-prev',
  },
  thumbs: {
    swiper: sliderThumbnailChintai,
  }
});

//サムネイル
var sliderThumbnailChintaiList = new Swiper('.chintai-sliderModal .slider-thumbnail', {
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

//スライダー chintai
var slider = new Swiper('.chintai-sliderModal .slider', {
  navigation: {
    nextEl: '.swiper-modal-next',
    prevEl: '.swiper-modal-prev',
  },
  thumbs: {
    swiper: sliderThumbnailChintaiList,
  }
});
