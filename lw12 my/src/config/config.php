<?php

//запросы к серверу
const GET_METHOD = 'GET';
const POST_METHOD = 'POST';

//подключение к БД
const DB_DSN = "mysql:host=localhost;dbname=lw12";
const DB_USER = "root";
const DB_PASSWORD = "1234";

//маски проверки email, имени
const EMAIL_MASK = "/^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/";
const NAME_MASK = "/^[а-яА-ЯёЁ]+$/u";