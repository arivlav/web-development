<?php
  require_once('../src/common.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
  <title>OWP LabWork 7, Task 3</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
</head>
<body>
  <?php
    if (strtolower(getRequestMethod()) === 'post') feedbackListPage();
    else renderTemplate('get_feedback_form.tpl.php');
  ?>
</body>
</html>