<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "shopping_cart";

$connection = new mysqli($host, $user, $password, $db);
if ($connection->connect_error) {
    die("Connection error");
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $connection->query("DELETE FROM products WHERE id=$id");
    header("Location: index.php");
    exit;
} else {
    echo "Invalid request!";
}
