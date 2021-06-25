<?php

function database(): PDO
{
    static $connection = null;
    if ($connection === null)
    {
        $connection = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        $connection->query('set names utf8');
    }

    return $connection;
}

function saveFeedback(array $feedback): void
{
    $connection = database();
    $sql = "REPLACE INTO " . DB_TABLE . " (name, email, subject, message) VALUES (
        {$connection->quote($feedback['name'])},
        {$connection->quote($feedback['email'])},
        {$connection->quote($feedback['subject'])},
        {$connection->quote($feedback['message'])});";
    $connection->query($sql);
}

function getFeedback(string $email): array
{
    $connection = database();
    $sql = "SELECT * FROM " . DB_TABLE . " WHERE email = " . $connection->quote($email) . ";";
    $stmt = $connection->query($sql);
    $result = $stmt->fetch();

    return $result ? $result: [];
}