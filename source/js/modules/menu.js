const burgerButton = document.querySelector('.header__burger');
const closeButton = document.querySelector('.header__close');

function setProps() {
  document.querySelector('.header__nav').style.display = 'block';
  gsap.from('.header__nav', {
    'min-height': 0,
    'opacity':'0',
    duration: 0.5,
  });

  gsap.from('.header__menu', {
    'min-height': 0,
    height: 0,
    'opacity':'0',
    delay: 0.5,
    duration: 0.5,
  });

  gsap.from('.header__menu-item', {
    x: 1100,
    delay: 1,
    duration: 0.5,
    stagger: 0.1
  });

  gsap.to('.header__phone-link', {
    color: '#f9f9f9',
    delay: 1,
    duration: 0.5
  });

  if (document.querySelector('.page-body--contacts .header__phone-link')) {
    gsap.to('.page-body--contacts .header__phone-link', {
      color: '#f9f9f9',
      delay: 1,
      duration: 0.5
    });
  }

  document.querySelector('.header__menu-item:last-child a').style = 'color: #f9f9f9';

  burgerButton.style.display = 'none';
  closeButton.style.display = 'block';
}

function removeProps(){
  document.querySelector('.header__nav').style.display = 'none';

  document.querySelector('.header__menu-item:last-child a').style = '';

  gsap.to('.header__nav', {
    clearProps: 'all'
  });

  gsap.to('.header__menu', {
    clearProps: 'all'
  });

  gsap.to('.header__menu-item', {
    clearProps: 'all'
  });

  gsap.to('.header__phone-link', {
    clearProps: 'all'
  });

  gsap.to('.page-body--contacts .header__phone-link', {
    clearProps: 'all'
  });

  closeButton.style.display = 'none';
  burgerButton.style.display = 'block';
}

burgerButton.addEventListener('click', function(){
  setProps();
});

closeButton.addEventListener('click', function(){
  removeProps();
});

window.addEventListener('resize', function(evt){
  if (window.innerWidth > 767) {
    removeProps();
  }
});
