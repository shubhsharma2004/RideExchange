let menuBtn = document.querySelector("#menu-btn");
let navBar = document.querySelector(".navBar");



menuBtn.onclick = () => {
    menuBtn.classList.toggle("fa-times");
    navBar.classList.toggle("active");
}


document.querySelector("#login-btn").onclick=()=>{
    document.querySelector(".login-form-container").classList.toggle("active");
}
document.querySelector("#close-login-form").onclick=()=>{
    document.querySelector(".login-form-container").classList.toggle("active");
}

window.onscroll = () => {
    if(window.scrollY > 0){
        document.querySelector(".header").classList.add("active");
    }
    else{
        document.querySelector(".header").classList.remove("active");
    }
    menuBtn.classList.remove("fa-times");
    navBar.classList.remove("active");
}

window.onload= () => {
    if(window.scrollY > 0){
        document.querySelector(".header").classList.add("active");
    }
    else{
        document.querySelector(".header").classList.remove("active");
    }  
}


// Initialize Swiper
var swiper = new Swiper(".vehicles-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    grabCursor:true,
    autoplay: {
        delay: 5000,  // delay time of images 
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
    },
  });


  var swiper = new Swiper(".featured-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    grabCursor:true,
    autoplay: {
        delay: 5000,  // delay time of images 
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1040: {
        slidesPerView: 3,
      },
    },
  });

  var swiper = new Swiper(".reviews-slider", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    grabCursor:true,
    autoplay: {
        delay: 3000,  // delay time of images 
        disableOnInteraction: false,
      },
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1040: {
        slidesPerView: 3,
      },
    },
  });