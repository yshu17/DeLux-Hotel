new Swiper(".homes-swiper",
{
  speed: 700,
  slidesPerView: 4,
  slidesPerGroup: 1,
  loop: true,
  allowTouchMove: false,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoplay: {
    delay: 3000,
    pauseOnMouseEnter: true,
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      slidesPerGroup: 1,
      allowTouchMove: true,
    },
    // when window width is >= 480px
    764: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      allowTouchMove: true,
    },
    // when window width is >= 640px
    1300: {
      slidesPerView: 4,
      slidesPerGroup: 1,
    }
  }
});
new Swiper(".comments-swiper", 
{
  slidesPerView: 2,
  slidesPerGroup: 2,
  spaceBetween: 50,
  loop: true,
  loopFillGroupWithBlank: false,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var map = L.map('map').setView([48.99006396190157, 37.737753903577996], 16);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
    minZoom: 14,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
var marker = L.marker([48.99006396190157, 37.737753903577996]).addTo(map);

let a = document.querySelector(".leaflet-pane");
let timerId1, timerId2, timerId3, timerId4;
a.addEventListener("mouseenter", function(e){
  clearTimeout(timerId3); clearTimeout(timerId4);
  let infoBoxCL = document.querySelector(".info-box").classList;
  if(document.querySelector(".info-box").style.display== "none"){
    document.querySelector(".info-box").style.display= "inline-block";
  }
  document.querySelector(".info-box").style.display= "inline-block";
  infoBoxCL.add("animate__zoomIn");

  timerId1 = setTimeout(()=> infoBoxCL.replace("animate__zoomIn", "animate__zoomOut"), 2000);
  timerId2 = setTimeout(()=> { 
    infoBoxCL.remove("animate__zoomOut"); 
    document.querySelector(".info-box").style.display = "none"
  }, 2500);

});
a.addEventListener("click", function(e){
  clearTimeout(timerId1); clearTimeout(timerId2);
  document.querySelector(".info-box").style.display= "inline-block";
  timerId3 =setTimeout(()=>  document.querySelector(".info-box").classList.add("animate__zoomOut"), 10 * 1000)
  timerId4 =setTimeout(()=>  document.querySelector(".info-box").style.display = "none", 10 * 2000)
});