//Burger Menu
document.getElementById("hamburger").addEventListener("click",()=> {
  document.getElementById("hamburger").classList.toggle('open');
  document.getElementById("menu").classList.toggle("change-opacity");
})

//Plugin Swiper.js
var swiper = new Swiper(".homes-swiper",
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
      slidesPerView: 1,
      slidesPerGroup: 1,
      allowTouchMove: true,
      
    },
    // when window width is >= 764px
    550: {
      slidesPerView: 2,
      slidesPerGroup: 1,
      allowTouchMove: true,
      
    },
    764: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      allowTouchMove: true,
      
    },
    // when window width is >= 1300px
    1300: {
      slidesPerView: 4,
      slidesPerGroup: 1,
    }
  }
});
var swiper2 = new Swiper(".comments-swiper", 
{
  slidesPerView: 2,
  slidesPerGroup:1,
  loop:true,
  spaceBetween: 50,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      slidesPerGroup:1,
      
    },
    // when window width is >= 1300px
    700: {
      slidesPerView: 2,
      slidesPerGroup:1,
    }
  }
});

//Plugin Leafletjs Map
var map = L.map('map').setView([48.99006396190157, 37.737753903577996], 16);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 17,
    minZoom: 15,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
var marker = L.marker([48.99006396190157, 37.737753903577996]).addTo(map);

//My Function JS
//ShowInfoOnMap(document.querySelector(".leaflet-pane"),document.querySelector(".info-box"));
function ShowInfoOnMap(markerOnMap,infoBox) {
  let timerId1, timerId2, timerId3, timerId4;
  markerOnMap.addEventListener("mouseenter", function (e) {
    clearTimeout(timerId3); clearTimeout(timerId4);
    let infoBoxCL = infoBox.classList;
    if (infoBox.style.display == "none") {
      infoBox.style.display = "inline-block";
    }
    infoBox.style.display = "inline-block";
    infoBoxCL.add("animate__zoomIn");

    timerId1 = setTimeout(() => infoBoxCL.replace("animate__zoomIn", "animate__zoomOut"), 2000);
    timerId2 = setTimeout(() => {
      infoBoxCL.remove("animate__zoomOut");
      infoBox.style.display = "none";
    }, 2500);

  });
  markerOnMap.addEventListener("click", function () {
    clearTimeout(timerId1); clearTimeout(timerId2);
    infoBox.style.display = "inline-block";
    timerId3 = setTimeout(() => infoBox.classList.add("animate__zoomOut"), 10 * 1000);
    timerId4 = setTimeout(() => infoBox.style.display = "none", 10 * 2000);
  });
}

//My Function on Jq
var btn = $('.scroll-top');
$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});
btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

//Plugin Jq PageScroll2id
$(window).on("load",function(){
    $("[href*='#']").mPageScroll2id();
}); 

