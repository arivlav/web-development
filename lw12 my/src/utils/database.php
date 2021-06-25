<?php

function DB(): PDO 
{
    try {
        $conn = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
        return $conn;
    } catch (PDOException $pe) {
        die("Could not connect to the database: " . $pe->getMessage());
    }
} 