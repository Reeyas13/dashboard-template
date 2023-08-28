<?php
$conn = new mysqli("localhost", "root", "", "tpr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTableQuery = "CREATE TABLE IF NOT EXISTS students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    class_role VARCHAR(255) NULL,
    faculty_id INT NOT NULL,
    semester_id INT NOT NULL,
    roll_no int NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (faculty_id) REFERENCES faculty(id),
    FOREIGN KEY (semester_id) REFERENCES semesters(id)
)";
if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
