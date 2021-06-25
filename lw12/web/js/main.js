const inputsClass = 'contacts-form__input';
const inputErrorClass = 'contacts-form__input_error';
const errorMsgClass = 'form-error-message';
const errorMsgKey = '_error_msg';
const submitedButtonClass = 'button_submited';
const disabledButtonClass = 'button_disabled';
const submitedButtonText = 'Message sended';
const contactButtonId = 'contacts-form__button';

function initMobileMenu() {
  let menuButton = document.getElementById('menu_button');
  let menu = document.getElementById('menu');
  let menuLinks = menu.querySelectorAll('.menu__link');
  let body = document.getElementsByClassName('main')[0];
  let header = document.getElementById('header');
  let backgrounds = Array.from( document.querySelectorAll('.promo-slider__background') );
  let arrows = document.getElementsByClassName('promo-slider__arrows');

  function checkHidden(element) {
    let displayStyle = window.getComputedStyle(element).display;

    if (displayStyle === 'none') {
      menu.classList.remove('menu_hidden');
      backgrounds.forEach( function(background) {
        background.classList.remove('promo-slider__background_on-top');
      });
    } else {
      menu.classList.add('menu_hidden');
      menuButton.classList.remove('burger-button_active');
      body.classList.remove('main_without-overflow');
      arrows[0].classList.remove('promo-slider__arrows_hidden');
      backgrounds.forEach( function(background) {
        background.classList.remove('promo-slider__background_on-top');
      });
      header.classList.remove('header_fixed');
    }
  }

  function toggleMenuClasses() {
    menuButton.classList.toggle('burger-button_active');
    menu.classList.toggle('menu_hidden');
    body.classList.toggle('main_without-overflow');
    arrows[0].classList.toggle('promo-slider__arrows_hidden');
    backgrounds.forEach( function(background) {
      background.classList.toggle('promo-slider__background_on-top');
    });
    header.classList.toggle('header_fixed');
  }

  checkHidden(menuButton);
  menuButton.onclick = toggleMenuClasses;
  menuLinks.forEach(link => link.onclick = toggleMenuClasses);
  window.onresize = function() {checkHidden(menuButton);}
}

function renderForm(data) {
  let form = document.getElementById('contact-form');
  let inputs = form.querySelectorAll('.' + inputsClass);
  let submitButton = document.getElementById(contactButtonId);
  let errorBlocks = form.querySelectorAll('.' + errorMsgClass);

  errorBlocks.forEach( (element) => element.remove() );

  if (data['submited']) {
    inputs.forEach( (input) => {
        input.classList.remove(inputErrorClass);
        input.setAttribute('readonly', true);
    });
    submitButton.classList.add(submitedButtonClass);
    submitButton.value = submitedButtonText;
    submitButton.disabled = true;
  } else {
    inputs.forEach( (input) => {
      if ((input.name + errorMsgKey) in data) {
        let errorMsg = data[(input.name + errorMsgKey)];
        let errorBlock = document.createElement('div');

        errorBlock.classList.add(errorMsgClass);
        errorBlock.innerHTML = errorMsg;
        input.before(errorBlock);
        input.classList.add(inputErrorClass);
      }
      else {
        input.classList.remove(inputErrorClass);
      }
    });
  }
}

function togglebuttonDisabled(button) {
  button.disabled = !button.disabled;
  button.classList.toggle(disabledButtonClass);
}

function initAjaxForm() {
  let form = document.getElementById('contact-form');
  let submitButton = document.getElementById(contactButtonId);

  form.onsubmit = async (event) => {
    event.preventDefault();
    togglebuttonDisabled(submitButton);

    let response = await fetch('handler.php', {
      method: 'POST',
      body: new FormData(form)
    });
    let json = await response.json();

    togglebuttonDisabled(submitButton);
    renderForm(json);
  }
}

function init() {
  initMobileMenu();
  initAjaxForm();
}

window.onload = init;