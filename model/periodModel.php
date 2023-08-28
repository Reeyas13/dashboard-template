<?php
$conn = new mysqli("localhost", "root", "", "tpr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTableQuery = "CREATE TABLE IF NOT EXISTS periods(
    id INT AUTO_INCREMENT PRIMARY KEY,
    faculty_id INT NOT NULL,
    semester_id INT NOT NULL,
    subject_id INT NOT NULL,
    starting_time VARCHAR(255) NOT NULL,
    end_time VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (faculty_id) REFERENCES faculty(id),
    FOREIGN KEY (semester_id) REFERENCES semesters(id),
    FOREIGN KEY (subject_id) REFERENCES subjects(id)
)";
if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
