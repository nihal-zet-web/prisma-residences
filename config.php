<?php

try {
    $pdo = new PDO("mysql:hostname=127.0.0.1;port=3306;dbname=prisma_residences", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!";
} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "Connection error. Could not connect to the server.";
    echo $e->getMessage();
}