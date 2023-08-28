<?php

$conn = new mysqli("localhost", "root", "", "tpr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTableQuery = "CREATE TABLE IF NOT EXISTS votingData(
    id INT AUTO_INCREMENT PRIMARY KEY,
    votingCandidate_id INT NOT NULL,#candidate id or who is voted
    user_id INT NOT NULL,#  who voted or voter id
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    Foreign KEY (votingCandidate_id) REFERENCES votingCandidates(id),
    Foreign KEY (user_id) REFERENCES users(id)

   
)";
if ($conn->query($createTableQuery) === FALSE) {
    echo "Error creating table: " . $conn->error;
}
$conn->close();

    ?>