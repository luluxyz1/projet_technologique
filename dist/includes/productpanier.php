<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_quantity = $_POST["product_quantity"];
    $product_size = $_POST["product_size"];
    $product_image = $_POST["product_image"];

    try {
        require_once "dbh.inc.php";
        
        
        



    }
    catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}