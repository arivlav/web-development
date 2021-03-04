<?php
/*
Разработайте PHP приложение Check Identifier, 
которое проверяет является ли переданный в GET параметр 
identifier идентификатором по правилу SR3. 
Программа должна выводить yes или no, 
а также поясняющую информацию в том случае, если переданная строка не является идентификатором.
*/
header("Content-Type: text/plain");
if (!isset($_GET['identifier']))
{
    echo 'Parameter "identifier" not found';
}
else 
{
    $identifier = $_GET['identifier'];
    echo 'Value: "' . $identifier . '" is ';
    if (preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/", $identifier))
    {
        echo 'identifier.';
    }    
    else
    {
        echo 'not identifier (The identifier must contain only letters and numbers. The first character cannot be a number. The identifier must contain at least one letter. ).';
    }
}