<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "shopping_cart";

$connection = new mysqli($host, $user, $password, $db);
if ($connection->connect_error) {
    die("connection error");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        header {
            background: #2c3e50;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .container {
            width: 90%;
            margin: 20px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background: #3498db;
            color: white;
        }

        a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            background: #3498db;
            color: white;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .btn:hover {
            background: #2980b9;
        }
    </style>
</head>

<body>
    <header>
        <h1>🛒 Online Shopping Cart</h1>
    </header>
    <div class="container">
        <a href="create.php" class="btn">➕ Add Product</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price ($)</th>
                <th>Action</th>
            </tr>
            <?php
            $data = $connection->query("SELECT * FROM products");
            while ($row = $data->fetch_assoc()) {
                echo "<tr>
                    <td>{$row["id"]}</td>
                    <td>{$row["name"]}</td>
                    <td>{$row["price"]}</td>
                    <td>
                        <a href='update.php?id={$row['id']}'>✏ Update</a> | 
                        <a href='delete.php?id={$row['id']}'>❌ Delete</a>
                    </td>
                </tr>";
            }
            ?>
            <?php
            $total = $connection->query("SELECT SUM(price) AS total_price FROM products")->fetch_assoc();

            echo "<tr>
        <td style='font-weight:bold;'>Total:</td>
        <td></td>
        <td><strong>{$total['total_price']}</strong></td>
        <td></td>
      </tr>";
            ?>

        </table>
    </div>
</body>

</html>