var swiper = new Swiper(".mySwiper", {
  preloadImages: false,
            loop:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },lazy:{
      loadPrevNext: true,
  },
  autoplay:{
      delay: 7000
  },
  speed: 1000,
  effect: 'fade'
  });