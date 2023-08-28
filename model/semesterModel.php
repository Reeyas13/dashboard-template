<?php
    $conn = new mysqli("localhost", "root", "", "tpr");
    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $createTableQuery = "CREATE TABLE IF NOT EXISTS semesters(
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if($conn->query($createTableQuery) === FALSE) {
        echo "Error creating table: " . $conn->error;
    }
    $conn->close();
?>