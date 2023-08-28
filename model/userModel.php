<?php
$conn = new mysqli("localhost", "root", "", "tpr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTableQuery = "CREATE TABLE IF NOT EXISTS users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL default 'user',
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>

