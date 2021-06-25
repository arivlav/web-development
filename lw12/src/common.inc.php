<?php
define('SRC_PATH', dirname(__FILE__));

define ('PARAMS_REGEXP', [
    'name' => '/^([ a-zA-Zа-яА-ЯёЁ]){1,255}$/u',
    'email' => '/^[a-zA-Z0-9.!#$%&*+=?^_{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/',
    'subject' => '/^([a-zA-Zа-яА-ЯёЁ 0-9,.:;?!-%#@]){1,255}$/u',
    'message' => '/^(.){1,1000}$/'
]);

require_once(SRC_PATH . '/utils/request.php');
require_once(SRC_PATH . '/utils/template.php');
require_once(SRC_PATH . '/utils/database.php');

require_once(SRC_PATH . '/pages/main_page.php');
require_once(SRC_PATH . '/pages/save_feedback_page.php');
require_once(SRC_PATH . '/pages/feedback_list_page.php');


require_once(SRC_PATH . '/config/config.php');