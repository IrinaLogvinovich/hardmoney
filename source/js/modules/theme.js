const body = document.querySelector('.page-body');
const durationOfChangeAnimation = 0;
const durationOfAnimations = 20;
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

for (let i = 0; i < colorParameters.length; i++) {
  gsap.set(body, {
    '--start-color': colorParameters[i].start,
    '--second-color': colorParameters[i].second,
    '--change-text': colorParameters[i].text,
    '--current-color': colorParameters[i].color,
    delay: i * durationOfAnimations,
    repeat: -1,
    repeatDelay: colorParameters.length * durationOfAnimations - durationOfChangeAnimation,
    repeatRefresh: true,
  });
}

