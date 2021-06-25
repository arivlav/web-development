<?php

function validateSure($parameter): string
{
    return ($parameter == '') ? 'Поле обязательно для заполнения!' : '';
}

function validateEmail($parameter): string
{
    return ($parameter == ''  && !preg_match(EMAIL_MASK, $parameter)) ? 'Неверный формат email!' : '';
}

function validateName($parameter): string
{
    return ($parameter != '' && !preg_match(NAME_MASK, $parameter)) ? 'Имя должно содержать только буквы!' : '';
}