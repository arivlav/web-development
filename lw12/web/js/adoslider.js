const sliderDefaultAttributes = {'loop': 1, 'autoplay': 1, 'duration': 5000};
const disableButtonClass = 'button_disabled';
let slide = 0;
let timer;

function nextSlide(slider, event) {
  let slidesArr = slider['slides'];
  let loop = !!slider['loop'];
  let width = parseInt( window.getComputedStyle(slidesArr[0])['maxWidth'] );

  if (slider['autoplay']) slider['makeTimer']();

  if (event) event.preventDefault();
  if (loop) {
    if (slide + Math.trunc(100/width - 1) === slidesArr.length - 1) moveSlides(slide = 0, slidesArr);
    else moveSlides(slide = slide + 1, slidesArr);
  } else {
    moveSlides(slide = slide + 1, slidesArr);
    slider['prevButton'].classList.remove(disableButtonClass);
    if (slide + Math.trunc(100/width - 1) === slidesArr.length - 1) {
      slider['nextButton'].classList.add(disableButtonClass);
      if (slider['autoplay']) clearInterval(timer);
    }
  }
}

function prevSlide(slider, event) {
  let slidesArr = slider['slides'];
  let loop = !!slider['loop'];
  let width = parseInt( window.getComputedStyle(slidesArr[0])['maxWidth'] );

  if (slider['autoplay']) slider['makeTimer']();

  event.preventDefault();
  if (loop) {
    if (slide === 0) moveSlides(slide = slider['slides'].length - Math.trunc(100/width), slidesArr);
    else moveSlides(slide = slide - 1, slidesArr);
  } else {
    moveSlides(slide = slide - 1, slidesArr);
    slider['nextButton'].classList.remove(disableButtonClass);
    if (slide === 0) slider['prevButton'].classList.add(disableButtonClass);
  }
}

function moveSlides(newSlide, slidesArr) {
  slidesArr.forEach( slide => slide.style.transform = `translateX(${-newSlide * 100}%)` );
}

function initSlider() {
  let sliders = Array.from(document.querySelectorAll('.adoslider'));

  for (let i = 0; i < sliders.length; i++) {
    for (let attribute in sliderDefaultAttributes) {
      if (sliders[i].hasAttribute('data-' + attribute)){
        sliders[i][attribute] = parseInt( sliders[i].getAttribute('data-' + attribute), 10);
      } else {
        sliders[i][attribute] = sliderDefaultAttributes[attribute];
      }
    }
    sliders[i]['slides'] = Array.from(sliders[i].querySelectorAll('.adoslider__item'));
    sliders[i]['nextButton'] = sliders[i].querySelectorAll('.adoslider__next-button')[0];
    sliders[i]['prevButton'] = sliders[i].querySelectorAll('.adoslider__prev-button')[0];

    sliders[i]['nextButton'].addEventListener( 'click', nextSlide.bind(null, sliders[i]) );
    sliders[i]['prevButton'].addEventListener( 'click', prevSlide.bind(null, sliders[i]) );
    if (!sliders[i]['loop']) sliders[i]['prevButton'].classList.add(disableButtonClass);
    if (sliders[i]['autoplay'] && sliders[i]['duration']) {
      sliders[i]['makeTimer'] = function makeTimer(){
        clearInterval(timer);
        timer = setInterval(function(){
          nextSlide(sliders[i]);
        },sliders[i]['duration']);
      };
      sliders[i]['makeTimer']();
    }
  }
}

initSlider();