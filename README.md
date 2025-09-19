# 🛒 Shopping Cart

A simple shopping cart application built using PHP and MySQL, demonstrating CRUD operations (Create, Read, Update, Delete) for products.

## 🌟 Features

- 🛍️ Add / Remove Products

- ✏️ Update product quantities

- 🗑️ Delete products from the cart

- 📦 Persistent storage using MySQL

## 🗄️ Database Setup

1. Open phpMyAdmin in XAMPP (usually http://localhost/phpmyadmin
).

2. Create a new database, for example: shopping_cart.

3. Import the SQL file (if provided) or create a table manually:
```sql
CREATE TABLE `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `price` DECIMAL(10,2) NOT NULL,
  `quantity` INT NOT NULL
);
```

Make sure to update database connection details in your PHP files (usually config.php or db.php):
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
```
## 🚀 How to Run Locally (XAMPP)

1. Copy the project folder into htdocs (e.g., C:\xampp\htdocs\ShoppingCart_PHP-CRUD).

2. Start Apache and MySQL in XAMPP control panel.

2. Open your browser and navigate to:
http://localhost/ShoppingCart_PHP-CRUD/index.php


The application should load. You can add, update, and delete products using the web interface.

## 🗂️ Project Structure
```csharp
ShoppingCart_PHP-CRUD/
├── index.php       # Main shopping cart page
├── create.php      # Add new products
├── update.php      # Edit products
├── delete.php      # Remove products
├── db.php          # Database connection file
└── README.md       # Project documentation
```
# 🔧 Technologies Used

- Backend: PHP

- Database: MySQL

- Frontend: HTML / CSS (basic styling)

- Server: XAMPP

# 🤝 Contributing

Contributions are welcome!
Fork the repository, 
Create a branch (git checkout -b feature-name), 
Commit your changes (git commit -am 'Add new feature'), 
Push to the branch (git push origin feature-name), 
Create a Pull Request

## 📄 License

MIT License © 2025 Turjo