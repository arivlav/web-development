<div class="container contacts-block__container">
  <form class="feedbacks" action="feedbacks.php" method="post">
    <?php if (isset($args['not_found_msg'])): ?>
      <div class="form-error-message"><?php echo $args['not_found_msg']; ?></div>
    <?php endif; ?>
    <input type="email" name="email" placeholder="Email" class="contacts-form__input 
    <?php if (isset($args['not_found_msg'])) echo "contacts-form__input_error"; ?>" required 
    <?php if (isset($args['email'])) echo "value=\"" . $args['email'] . "\""; ?>/>
    <input type="submit" class="contacts-form__button button button_theme_island" value="SEARCH MESSAGE" />
  </form>
</div>
