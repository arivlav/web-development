<?php
function getRequestMethod(): string
{
    return $_SERVER['REQUEST_METHOD'];
}

function getPostParameter($name)
{
    return $_POST[$name] ?? '';
}

function getGetParameter($name)
{
    return $_GET[$name] ?? '';
}