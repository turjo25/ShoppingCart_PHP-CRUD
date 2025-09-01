<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "shopping_cart";

$connection = new mysqli($host, $user, $password, $db);
if ($connection->connect_error) {
    die("Connection error");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial;
            background: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #27ae60;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background: #219150;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Add Product</h2>
        <form method="POST">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="price">Price ($):</label>
            <input type="number" name="price" id="price" step="0.01" required>

            <button type="submit">Save Product</button>
        </form>
    </div>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];

    $connection->query("INSERT INTO products(name,price) VALUES('$name','$price')");
    header("Location: index.php");
    exit;
}
?>