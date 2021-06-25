<?php
$form = $args['data']['form'];
$errors = $args['data']['errors'];
$message = $args['data']['message'];
$country = [
    'ru' => 'Россия', 
    'de' => 'Германия', 
    'fr' => 'Франция', 
    'vn' => 'Венгрия'
];
$male = [
  'male' => 'мужской',
  'female' => 'женский'
];
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Страничка обо мне" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Письма</title>
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <div class="form" id="write_me">
    <div class="form__inside">  
      <form method="get" action="feedbacks.php">
        <div class="form__title__section">
          <h2 class="form__title">Письма</h2>
        </div>    
        <div class="form__section">  
          <label for="email" class="form__label">Ваш email <span class="form__alert">*</span></label>
          <input type="email" class="form__input_email" id="email" name="email" value="<?php echo $form['email'];?>">
          <?php if ($errors['email'] != '') echo '<span class="form__error">'.$errors['email'].'</span>';?>
        </div>  
        <div class="form__section_button">
          <input class="form__btn" type="submit" value="Найти" name="send">
        </div>    
      </form>
      <div class="result">
        <?php if ($message['found']) {?>
          <table>
            <tr>
              <td><b>Имя:</b></td>
              <td><?php echo $message['content']['name'];?></td>
            </tr>
            <tr>
              <td><b>email:</b></td>
              <td><?php echo $message['content']['email'];?></td>
            </tr>
            <tr>
              <td><b>Страна:</b></td>
              <td><?php if ($message['content']['country'] != '') echo $country[$message['content']['country']];?></td>
            </tr>
            <tr>
              <td><b>Пол:</b></td>
              <td><?php if ($message['content']['gender'] != '')  echo $male[$message['content']['gender']];?></td>
            </tr>  
            <tr>
              <td><b>Сообщение:</b></td>
              <td><?php echo $message['content']['message_text'];?></td>
            </tr>
          </table  
        <?php } ?>
        <?php if (!$message['found'] && $message['status'] != '') echo 'Ничего не найдено!';?> 
      </div>
    </div>    
  </div>
     
</body>
</html>
