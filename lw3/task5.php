<?php
/*
Разработайте PHP приложение Survey Info, 
которое выводит данные анкеты пользователя, 
сохраненные в задании 4. Если значение отсутствует, 
выводить вместо него пробел.
Выводить данные необходимо в виде:
First Name: <name>
Last Name: ...
Email: <email>
Age: 30
В GET параметрах запроса передается email в виде ?email=ivan@mail.com
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
        if (file_exists($file)) 
        {
            $content = file_get_contents($file);
            $content = explode(";", $content);
            echo "First Name: " . $content[1];
            echo "Last Name: " . $content[2];
            echo "Email: " . $content[0];
            echo "Age: " . $content[3]; 
        }
        else 
        {
            echo "File \"" . $file . "\" not found!";
        }
    }
}