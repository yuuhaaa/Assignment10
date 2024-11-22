<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=recipe_app', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());

    echo "Connected to the database successfully!";

}

