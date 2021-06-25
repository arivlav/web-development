<div class="feedbacks">
  <ul class="feedbacks__list">
    <li class="feedbacks__item">
      <input type="text" name="name" placeholder="Name" class="contacts-form__input" readonly <?php if (isset($args['name'])) echo "value=\"" . $args['name'] . "\""; ?>/>
    </li>
    <li class="feedbacks__item">
      <input type="email" name="email" placeholder="Email" class="contacts-form__input" readonly <?php if (isset($args['email'])) echo "value=\"" . $args['email'] . "\""; ?>/>
    </li>
    <li class="feedbacks__item">
      <input type="text" name="subject" placeholder="Subject" class="contacts-form__input" readonly 
      <?php if (isset($args['subject'])) echo "value=\"" . $args['subject'] . "\""; ?>/>
    </li>
    <li class="feedbacks__item">
      <textarea name="message" placeholder="Message" class="contacts-form__input contacts-form__input_area" readonly><?php if (isset($args['message'])) echo $args['message'] ?></textarea>
    </li>
  </ul>
  <a class="button button_theme_island" href="feedbacks.php">Go back</a>
</div>
