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

