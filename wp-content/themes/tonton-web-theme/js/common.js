// header menu
const responsive_menu_btn = document.querySelector('.responsive-btn');
responsive_menu_btn.addEventListener('click', menuToggle);

function menuToggle() {
  const header_menu_detail = document.querySelector('.header-nav');
  const body = document.querySelector('body');
  header_menu_detail.classList.toggle('menu-active');
  body.classList.toggle('no-scroll');
  $(this).toggleClass('active');
}

//swiper top
window.addEventListener("DOMContentLoaded", () => {
  const infiniteSlider = new Swiper(".infinite-slider", {
    loop: true,
    slidesPerView: 3,
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    breakpoints: {
      768: {
        slidesPerView: 6,
      },
    },
  });
});

//モーダル
$(function(){
  let open = $('.kv-modal-open'),
    close = $('.kv-modal-close'),
    container = $('.kv-modal-container');

  open.on('click',function(){     
    container.addClass('active');
    return false;
  });

  close.on('click',function(){  
    container.removeClass('active');
  });

  $(document).on('click',function(e) {
    if(!$(e.target).closest('.kv-modal-body').length) {
      container.removeClass('active');
    }
  });
});