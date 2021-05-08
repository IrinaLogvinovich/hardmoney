const sliderContainer = document.querySelector('.types__container');

if (sliderContainer) {
  const swiper = new Swiper(".types__container", {
    slidesPerView: 3,
    spaceBetween: 12,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 12,
      },
    },
  });
}
