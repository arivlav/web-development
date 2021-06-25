<?php
$country = [
    'ru' => 'Россия', 
    'de' => 'Германия', 
    'fr' => 'Франция', 
    'vn' => 'Венгрия'
];
$country_list='';
foreach($country as $key => $val)
{
    $country_list .= '<option value="'.$key.'">'.$val.'</option>'.PHP_EOL;
}
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Напиши мне" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Напиши мне</title>
  <script src="js/index.js" defer></script>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <div class="form" id="write_me">
    <div class="form__inside">  
      <form method="post" name="write_me_form" action="savefeedback.php">
        <div class="form__title__section">
          <h2 class="form__title">НАПИШИ МНЕ</h2>
        </div>  
        <div class="form__section">  
          <label for="name" class="form__label">Ваше имя <span class="form__alert">*</span></label>
          <input type="text" class="form__input_text" id="name" name="name" value="">
          <span id="nameError" class="form__error"></span>
        </div>  
        <div class="form__section">  
          <label for="email" class="form__label">Ваш email <span class="form__alert">*</span></label>
          <input type="text" class="form__input_email" id="email" name="email" value="">
          <span id="emailError" class="form__error"></span>
        </div>  
        <div class="form__section">  
          <label for="country" class="form__label">Откуда вы?</label>
          <select class="form__select" id="country" name="country">
            <?php echo $country_list;?>
          </select>
        </div>  
        <div class="form__section_label_radio">  
          <label class="form__label">Ваш пол</label> 
        </div>
        <div class="form__section_radio">  
          <label for="male"  class="form__label_radio">
            <input type="radio" name="gender" value="male" id="male">
            Мужской
          </label>
          <label for="female" class="form__label_radio">
            <input type="radio" name="gender" value="female" id="female">
            Женский
          </label>
        </div>  
        <div class="form__section">  
          <label for="message" class="form__label">Ваше сообщение  <span class="form__alert">*</span></label>
          <textarea  id="message" name="message" rows="10"  class="form__textarea"></textarea>
          <span id="messageError" class="form__error"></span>
        </div>
        <div class="form__section form__section__send">
          <div class="form__section_button">
            <input type="submit" name="send" id="buttonSend" class="form__btn" value="Отправить" />
          </div>
          <div class="form__send_success" id="sendSuccess">
            <img src="images/galochka.png" alt="галочка" class="form__send_success__img">
            <p class="form__send_success__msg">Ваше сообщение успешно отправлено</p>
          </div>
        </div>      
      </form>
    </div>    
  </div>     
</body>
</html>
