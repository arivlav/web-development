const number_of_display_images = 4;

let images = document.querySelectorAll('.movies__list__film');
let number_of_images = images.length;
let left_btn = document.querySelector('.movies__list__btn_left');
let right_btn = document.querySelector('.movies__list__btn_right');


function courusel(step) {
  let start, finish, content;
  switch (step) {
    case -1:
      start = number_of_images - 1;
      finish = 0;
      break;
    case 1:
      start = 0;
      finish = number_of_images - 1; 
      break;
  }
  content = images[start].innerHTML;
  let j = start;
  while(j != finish + step) {
    images[j].innerHTML = (j == finish) ? content : images[j+step].innerHTML;  
    j = j + step;
  }
  
}

left_btn.onclick = function () {
  courusel(-1);
}

right_btn.onclick = function () {
  courusel(1);
}

window.onload = function () {
  for (let i = 0; i < number_of_images; i++) {   
    images[i].style.display = 'none';
    if (i >= 0 && i < number_of_display_images) {
      images[i].style.display = 'block';
    }
  }
};