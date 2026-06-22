<?php

try {
    $pdo = new PDO("mysql:hostname=localhost;port=3307;dbname=prisma_residences", "my_user", "-phpPassword-");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connected successfully!";
} catch (PDOException $e) {
    error_log($e->getMessage());
    echo "Connection error. Could not connect to the server.";
}