<?php

function getGETParameter($parameter): ?string
{
    return $_GET[$parameter] ?? null;
}

function getPOSTParameter($parameter): ?string
{
    return $_POST[$parameter] ?? null;
}

function getRequestMethod(): ?string
{
    return $_SERVER['REQUEST_METHOD'] ?? null;
}