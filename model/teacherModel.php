<?php
$conn = new mysqli("localhost", "root", "", "tpr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTableQuery = "CREATE TABLE IF NOT EXISTS teachers(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    faculty_id INT NOT NULL,
    subject_id INT NOT NULL,
    qualification VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (faculty_id) REFERENCES faculty(id),
    FOREIGN KEY (subject_id) REFERENCES subjects(id)
)";
if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>