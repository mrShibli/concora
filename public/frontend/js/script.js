// let nav = document.querySelector('.header .header-menu .navbar');
// let menu = document.querySelector('.header .header-middle #menu');

// menu.onclick = () =>{
//   nav.classList.toggle('active'); 
//   menu.classList.toggle('fa-times');
// }

// window.onscroll = () =>{
//   menu.classList('remove');
// };


let tab1 = document.querySelector('.about .content .tab1');
let tab2 = document.querySelector('.about .content .tab2');
let tab3 = document.querySelector('.about .content .tab3');
let show1 = document.querySelector('.about .content .show1');
let show2 = document.querySelector('.about .content .show2');
let show3 = document.querySelector('.about .content .show3');

tab1.onclick = () =>{ 
  tab1.classList.add('active');
  tab2.classList.remove('active');
  tab3.classList.remove('active');
  show1.classList.add('active');
  show2.classList.remove('active');
  show3.classList.remove('active');
}

tab2.onclick = () =>{  
  tab1.classList.remove('active');
  tab2.classList.add('active');
  tab3.classList.remove('active');
  show1.classList.remove('active');
  show2.classList.add('active');
  show3.classList.remove('active');
}
tab3.onclick = () =>{  
  tab1.classList.remove('active');
  tab2.classList.remove('active');
  tab3.classList.add('active');
  show1.classList.remove('active');
  show2.classList.remove('active');
  show3.classList.add('active');
}

 


var swiper = new Swiper(".hero-slider", {
    slidesPerView: 1,
    loop:true, 
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },

    breakpoints: {
        640: {
          slidesPerView: 1, 
        },
        768: {
          slidesPerView: 1, 
        },
        1024: {
          slidesPerView: 1, 
        },
      },

      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      }, 

  });

 

  

  // company-logo 

  var swiper = new Swiper(".company", { 
    spaceBetween: 10,
    loop:true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }, 
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      350: {
        slidesPerView: 3, 
      },
      450: {
        slidesPerView: 4, 
      },
      768: {
        slidesPerView: 5, 
      },
      1024: {
        slidesPerView: 6, 
      },
    },
  });


// ======

  
  // var swiper = new Swiper(".our-teams", {
  //   slidesPerView: 1, 
  //   spaceBetween: 10,
  //   loop:true,
  //   autoplay: {
  //     delay: 3500,
  //     disableOnInteraction: false,
  //   },
   
  //   breakpoints: { 
  //     450: {
  //       slidesPerView: 1, 
  //     },
  //     768: {
  //       slidesPerView: 2, 
  //     },
  //     1024: {
  //       slidesPerView: 3, 
  //     },
  //   },

  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   }, 
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },


  // });