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

  function iniciarMap(){
    var coord = {lat:-31.3904614 ,lng: -64.1862264};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}