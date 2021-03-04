<?php
/*
Разработайте программу для проверки надежности пароля Password Strength. 
В GET параметре password передается пароль для анализа. 
Пароль может состоять только из английских символов в верхнем и нижнем регистрах, а также из цифр.
Надежность пароля вычисляется по следующему принципу, (len это длинна пароля)
- Изначально считаем надежность равной 0.
- К надежности прибавляется (4*n), где n - количество всех символов пароля
- К надежности прибавляется +(n*4), где n - количество цифр в пароле
- К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в верхнем регистре
- К надежности прибавляется +((len-n)*2) в случае, если пароль содержит n символов в нижнем регистре
- Если пароль состоит только из букв вычитаем число равное количеству символов.
- Если пароль состоит только из цифр вычитаем число равное количеству символов.
- За каждый повторяющийся символ в пароле вычитается количество повторяющихся символов
Например: abcd1a, вычитаем -2 поскольку символ a встречается дважды. Программа должна выводить на экран надежность пароля в виде числа.
*/
header("Content-Type: text/plain");
if (!isset($_GET['password']))
{
    echo 'Parameter "password" not found';
}
else 
{
    $password = $_GET['password'];
    if (!preg_match("/^[a-zA-Z0-9]{1,}$/", $password))
    {
        echo 'The password can only contain English uppercase and lowercase characters and numbers.';
    }    
    else
    {
        $reliability = 0;
        $len = strlen($password);
        $reliability += 4 * $len; //количество всех символов пароля
        preg_match_all("/[0-9]/", $password, $countDigits);
        $reliability += 4 * count($countDigits[0]); //количество цифр в пароле
        preg_match_all("/[A-Z]/", $password, $upperCaseLetters);
        $countUpperCaseLetters = count($upperCaseLetters[0]); //количество символов в верхнем регистре
        if ($countUpercaseLetters > 0) 
        {
            $reliability += 2 * ($len - $countUpperCaseLetters);
        }    
        preg_match_all("/[a-z]/", $password, $lowerCaseLetters);
        $countLowerCaseLetters = count($lowerCaseLetters[0]); //количество символов в нижнем регистре
        if ($countLowerCaseLetters > 0) 
        {
            $reliability += 2 * ($len - $countLowerCaseLetters);
        }
        if (preg_match("/^[a-zA-Z]{1,}$/", $password)) 
        {
            $reliability -= $len;
        }    
        if (preg_match("/^[0-9]{1,}$/", $password)) 
        {
            $reliability -= $len;
        }
        foreach (count_chars($password, 1) as $i => $val)
        {
            if ($val > 1) 
            {
                $reliability -= $val;
            }    
        }
        echo 'Reliability of password "' . $password . '" is ' . $reliability;    
    }
}