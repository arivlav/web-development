<?php
/*
Разработайте приложение Remove Extra Blvanks на языке PHP. 
В запросе GET передается параметр text. 
Скрипт выводит в стандартный поток вывода этот же текст без пробелов
в начале и в конце, между словами один пробел.
*/
header("Content-Type: text/plain");
if (!isset($_GET['text']))
{
    echo 'Parameter "text" not found';
}
else 
{
    $text = $_GET['text'];
    echo 'Исходный текст: "' . $text . '"' . PHP_EOL . PHP_EOL;
    $text = preg_replace("/^\s{1,}|\s{1,}$/", '', $text);
    $text = preg_replace("/\s{2,}/", ' ', $text);
    echo 'Форматированный текст: "' . $text . '"';
}