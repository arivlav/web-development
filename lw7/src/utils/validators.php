<?php
const EMAIL_MASK = "/^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/";
const NAME_MASK = "/^[а-яА-ЯёЁ]+$/u";

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