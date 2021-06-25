function initAjaxForm() {
  // получаем объект формы
  sendSuccess.style.display = 'none';
  let form = document.forms.write_me_form; 
  
  form.onsubmit = async (event) => {
    event.preventDefault();
    let sendSuccess = document.getElementById('sendSuccess');
    let nameError = document.getElementById('nameError');
    let emailError = document.getElementById('emailError');
    let messageError = document.getElementById('messageError');

    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let message = document.getElementById('message');
  
    let response = await fetch(form.action, {
      method: 'POST',
      body: new FormData(form)
    });
    let json = await response.json();
    name.classList.remove("form__input_text__error");
    email.classList.remove("form__input_email__error");
    message.classList.remove("form__textarea__error");
    if (json.errors.noError) {
      sendSuccess.style.display = 'block';
    }
    else {
      sendSuccess.style.display = 'none';
      if (json.errors.name != '') {
        nameError.textContent = json.errors.name;
        name.classList.add("form__input_text__error");
      }
      if (json.errors.email != '') {
        email.classList.add("form__input_email__error");
        emailError.textContent = json.errors.email;
      }  
      if (json.errors.message != '') {
        messageError.textContent = json.errors.message;
        message.classList.add("form__textarea__error");
      }
    }      
  }
} 
  
window.onload = initAjaxForm();