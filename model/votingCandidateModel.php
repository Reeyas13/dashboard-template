<?php
$conn = new mysqli("localhost", "root", "", "tpr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTableQuery = "CREATE TABLE IF NOT EXISTS votingCandidates(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    description VARCHAR(255) NOT NULL,
    status BOOLEAN NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)


   
)";
if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
