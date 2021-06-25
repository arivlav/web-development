<?php
require_once('../src/common.inc.php');

if (strtolower(getRequestMethod()) === 'post')
{
    $isJSONrequest = true;
    saveFeedbackPage($isJSONrequest);
}
else mainPage();