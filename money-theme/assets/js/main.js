const body = document.querySelector('.page-body');
const durationOfChangeAnimation = 2;
const durationOfAnimations = 10;
const colorParameters = [
  {
    'start': '#D7FF01',
    'second': '#FAFF01',
    'text': '#202020',
    'color': '#97E11D'
  },
  {
    'start': '#FFE202',
    'second': '#FDFE00',
    'text': '#202020',
    'color': '#FDC603'
  },
  {
    'start': '#B1D8F8',
    'second': '#5E8CDB',
    'text': '#F9F9F9',
    'color': '#4578CF'
  },
  {
    'start': '#321397',
    'second': '#7B48F6',
    'text': '#F9F9F9',
    'color': '#331495'
  },
];
const animationElements = ['.promo__decor-color', '.promo__contacts-color', '.contacts__item-color', '.form__decor-color',];

for (let i = 0; i < animationElements.length; i++) {
  let currentElement = body.querySelector(animationElements[i]);
  gsap.to( currentElement, {
      rotate: 360,
      duration: durationOfAnimations,
      ease: 'linear',
      repeat: -1,
    }
  );
}

for (let i = 0; i < colorParameters.length; i++) {
  gsap.to(body, {
    '--start-color': colorParameters[i].start,
    '--second-color': colorParameters[i].second,
    '--change-text': colorParameters[i].text,
    '--current-color': colorParameters[i].color,
    delay: i * durationOfAnimations,
    duration: durationOfChangeAnimation,
    repeat: -1,
    repeatDelay: colorParameters.length * durationOfAnimations - durationOfChangeAnimation,
    repeatRefresh: true,
  });
}
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

  gsap.to('.page-body--contacts .header__phone-link', {
    color: '#f9f9f9',
    delay: 1,
    duration: 0.5
  });

  burgerButton.style.display = 'none';
  closeButton.style.display = 'block';
}

function removeProps(){
  document.querySelector('.header__nav').style.display = 'none';
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
    console.log('сработка');
    removeProps();
  }
});
const Canvas = document.querySelector('.background');

if (Canvas) {
    let ctx = Canvas.getContext('2d');

  let resize = function() {
      Canvas.width = Canvas.clientWidth;
      Canvas.height = Canvas.clientHeight;
      console.log('resize')
  };
  window.addEventListener('resize', resize);
  resize();

  let elements = [];
  let presets = {};

  presets.o = function (x, y, s, dx, dy) {
      return {
          x: x,
          y: y,
          r: 12 * s,
          w: 5 * s,
          dx: dx,
          dy: dy,
          draw: function(ctx, t) {
              this.x += this.dx;
              this.y += this.dy;

              ctx.beginPath();
              ctx.arc(this.x + + Math.sin((50 + x + (t / 10)) / 100) * 3, this.y + + Math.sin((45 + x + (t / 10)) / 100) * 4, this.r, 0, 2 * Math.PI, false);
              ctx.lineWidth = this.w;
              ctx.strokeStyle = '#fff';
              ctx.stroke();
          }
      }
  };

  presets.x = function (x, y, s, dx, dy, dr, r) {
      r = r || 0;
      return {
          x: x,
          y: y,
          s: 20 * s,
          w: 5 * s,
          r: r,
          dx: dx,
          dy: dy,
          dr: dr,
          draw: function(ctx, t) {
              this.x += this.dx;
              this.y += this.dy;
              this.r += this.dr;

              let _this = this;
              let line = function(x, y, tx, ty, c, o) {
                  o = o || 0;
                  ctx.beginPath();
                  ctx.moveTo(-o + ((_this.s / 2) * x), o + ((_this.s / 2) * y));
                  ctx.lineTo(-o + ((_this.s / 2) * tx), o + ((_this.s / 2) * ty));
                  ctx.lineWidth = _this.w;
                  ctx.strokeStyle = c;
                  ctx.stroke();
              };

              ctx.save();

              ctx.translate(this.x + Math.sin((x + (t / 10)) / 100) * 5, this.y + Math.sin((10 + x + (t / 10)) / 100) * 2);
              ctx.rotate(this.r * Math.PI / 180);

              line(-1, -1, 1, 1, '#fff');
              line(1, -1, -1, 1, '#fff');

              ctx.restore();
          }
      }
  };

  for(let x = 0; x < Canvas.width; x++) {
      for(let y = 0; y < Canvas.height; y++) {
          if(Math.round(Math.random() * 8000) == 1) {
              let s = ((Math.random() * 5) + 1) / 10;
              if(Math.round(Math.random()) == 1)
                  elements.push(presets.o(x, y, s, 0, 0));
              else
                  elements.push(presets.x(x, y, s, 0, 0, ((Math.random() * 3) - 1) / 10, (Math.random() * 360)));
          }
      }
  }

  setInterval(function() {
      ctx.clearRect(0, 0, Canvas.width, Canvas.height);

      let time = new Date().getTime();
      for (let e in elements)
      elements[e].draw(ctx, time);
  }, 10);
}