<form class="contacts-form" action="" method="post" id="contact-form">
  <?php if (isset($args['name_error_msg'])): ?>
    <div class="form-error-message"><?php echo $args['name_error_msg']; ?></div>
  <?php endif; ?>
  <input type="text" id="name" name="name" placeholder="Name" class="contacts-form__input 
  <?php if (isset($args['name_error_msg'])) echo "contacts-form__input_error"; ?>" required
  <?php if (isset($args['name'])) echo "value=\"" . $args['name'] . "\""; ?>/>

  <?php if (isset($args['email_error_msg'])): ?>
    <div class="form-error-message"><?php echo $args['email_error_msg']; ?></div>
  <?php endif; ?>
  <input type="email" id="email" name="email" placeholder="Email" class="contacts-form__input 
  <?php if (isset($args['email_error_msg'])) echo "contacts-form__input_error"; ?>" required 
  <?php if (isset($args['email'])) echo "value=\"" . $args['email'] . "\""; ?>/>

  <?php if (isset($args['subject_error_msg'])): ?>
    <div class="form-error-message"><?php echo $args['subject_error_msg']; ?></div>
  <?php endif; ?>
  <input type="text" id="subject" name="subject" placeholder="Subject" class="contacts-form__input 
  <?php if (isset($args['subject_error_msg'])) echo "contacts-form__input_error"; ?>" required 
  <?php if (isset($args['subject'])) echo "value=\"" . $args['subject'] . "\""; ?>/>

  <?php if (isset($args['message_error_msg'])): ?>
    <div class="form-error-message"><?php echo $args['message_error_msg']; ?></div>
  <?php endif; ?>
  <textarea id="message" name="message" placeholder="Message" class="contacts-form__input contacts-form__input_area 
  <?php if (isset($args['message_error_msg'])) echo "contacts-form__input_error"; ?>" required><?php if (isset($args['message'])) echo $args['message'] ?></textarea>
  <?php if (isset($args['submited']) && $args['submited'] === true): ?>
    <input type="submit" disabled class="contacts-form__button button button_theme_island button_submited" value="MESSAGE SENDED" />
  <?php else: ?>
    <input id="contacts-form__button" type="submit" class="contacts-form__button button button_theme_island" value="SEND MESSAGE" />
  <?php endif; ?>
</form>