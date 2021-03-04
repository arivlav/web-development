<?php
/*
Разработайте PHP приложение Survey Saver, которое сохраняет анкеты пользователей в файловой системе. 
Данные передаются в строке запроса. Возможные параметры запроса: first_name, last_name, email, age. 
Все файлы необходимо сохранять в директорию data. 
Название файла: <email>.txt 
Некоторые параметры могут отсутствовать, параметр email обязательный. 
В случае если такой файл <email>.txt уже существует, данные в этом файле обновляются.
*/
header("Content-Type: text/plain");
if (!isset($_GET['email']))
{
    echo 'Parameter "email" not found';
}
else 
{
    $email = $_GET['email'];
    if (!preg_match("/^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/", $email))
    {
        echo 'The specified email address is not valid.';
    }    
    else
    {
        $file = 'data/' . $email . '.txt';
        $content = $email . ';';
        $first_name = (isset($_GET['first_name'])) ? str_replace(' ', '', $_GET['first_name']) : '';
        $last_name = (isset($_GET['last_name'])) ? str_replace(' ', '', $_GET['last_name']) : '';
        $age = (isset($_GET['age'])) ? (int)$_GET['age'] : '';
        $content .= PHP_EOL . $first_name . ';' . PHP_EOL . $last_name . ';' . PHP_EOL . $age . ';'; 
        file_put_contents($file, $content);
        echo $content . PHP_EOL . 'Data is saved in file!';    
    }
}