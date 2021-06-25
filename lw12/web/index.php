<?php
require_once('../src/common.inc.php');

if (strtolower(getRequestMethod()) === 'post') saveFeedbackPage();
else mainPage();