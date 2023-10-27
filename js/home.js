"use strict";

let mainSwiper = () => {
  let mainSlider = new Swiper(".main-slider__swiper", {
    loop: true,
    slidesPerView: 1,
    lazy: true,
    pagination: {
      el: ".main-slider__swiper .swiper-pagination",
      dynamicBullets: false,
      clickable: true,
      slidesPerView: "3"
    },
    navigation: {
      nextEl: ".main-slider__swiper .swiper-button-next",
      prevEl: ".main-slider__swiper .swiper-button-prev"
    },
    breakpoints: {
      640: {
        autoHeight: true
      },
      768: {},
      1024: {}
    }
  });
};
document.addEventListener("DOMContentLoaded", mainSwiper);
"use strict";

let productSwiper = () => {
  var swiper = new Swiper(".swiper-tab", {
    loop: false,
    freeMode: true,
    spaceBetween: 0,
    watchSlidesProgress: true,
    breakpoints: {
      1024: {
        slidesPerView: 4
      },
      1280: {
        slidesPerView: 5
      }
    }
  });
  var swiper2 = new Swiper(".swiper-content", {
    loop: false,
    spaceBetween: 0,
    lazy: true,
    autoHeight: true,
    navigation: {
      nextEl: ".product-slider .swiper-button-next",
      prevEl: ".product-slider .swiper-button-prev"
    },
    pagination: {
      el: ".product-slider .swiper-pagination",
      dynamicBullets: true
    },
    thumbs: {
      swiper: swiper
    }
  });
};
document.addEventListener('DOMContentLoaded', productSwiper);