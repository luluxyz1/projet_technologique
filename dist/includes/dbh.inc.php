<?php

$host = "localhost";
$dbName = "db_captech";
$dbUsername = "root";
$dbPassword = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
