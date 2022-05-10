var swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
  });


  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 40,
    grabCursor: true,
    loop: true,
       autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    allowSlideNext:true,
    allowSlidePrev:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },

      426: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
        spaceBetween:10,
      },
      1024: {
        slidesPerView: 2,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });
  var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 3,
    spaceBetween: 20,
    loop: true,

    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },

      426: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".mySwiper4", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },

      426: {
        slidesPerView: 3,
      },
    },
  });



//   order form start
     function close1(){
     document.getElementById('order-form-wrapper').style.display="none";
 }


 function open1(){
    document.getElementById('order-form-wrapper').style.display="block";
}
// order form end