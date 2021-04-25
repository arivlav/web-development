<?php
$form = $args['data']['form'];
$errors = $args['data']['errors'];
$send = $args['data']['send'];
$country = [
    'ru' => 'Россия', 
    'de' => 'Германия', 
    'fr' => 'Франция', 
    'vn' => 'Венгрия'
];
$country_list='';
foreach($country as $key => $val)
{
    $selected = '';
    if ($form['country'] == $key) $selected = 'selected';
    $country_list .= '<option value="'.$key.'"'.$selected.'>'.$val.'</option>'.PHP_EOL;
}
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Страничка обо мне" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Напиши мне</title>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <div class="form" id="write_me">
    <div class="form__inside">  
      <form method="post" action="index.php">
        <div class="form__title__section">
          <h2 class="form__title">НАПИШИ МНЕ</h2>
        </div>  
        <div class="form__section">  
          <label for="name" class="form__label">Ваше имя <span class="form__alert">*</span></label>
          <input type="text" class="form__input_text"  id="name" name="name" value="<?php echo $form['name'];?>"  required>
          <?php if ($errors['name'] != '') echo '<span class="form__error">'.$errors['name'].'</span>';?>
        </div>  
        <div class="form__section">  
          <label for="email" class="form__label">Ваш email <span class="form__alert">*</span></label>
          <input type="email" class="form__input_email" id="email" name="email" value="<?php echo $form['email'];?>"  required>
          <?php if ($errors['email'] != '') echo '<span class="form__error">'.$errors['email'].'</span>';?>
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
            <input type="radio" name="gender" value="male" id="male"  <?php if ($form['gender'] == 'female') echo 'checked';?>>
            Мужской
          </label>
          <label for="female" class="form__label_radio">
            <input type="radio" name="gender" value="female" id="female" <?php if ($form['gender'] == 'female') echo 'checked';?>>
            Женский
          </label>
        </div>  
        <div class="form__section">  
          <label for="message" class="form__label">Ваше сообщение  <span class="form__alert">*</span></label>
          <textarea  id="message" name="message" rows="10"  class="form__textarea"  required><?php echo $form['message'];?></textarea>
          <?php if ($errors['message'] != '') echo '<span class="form__error">'.$errors['message'].'</span>';?>
        </div>
        <div class="form__section_button">
          <input class="form__btn" type="submit" <?php  echo ($send) ? 'value="Отправлено" disabled'  : 'value="Отправить"';?> name="send">
        </div>    
      </form>
    </div>    
  </div>     
</body>
</html>
