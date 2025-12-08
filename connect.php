<?php
$server_name = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password (empty)
$database_name = "conference_db";

// Create connection
$conn = mysqli_connect($server_name, $username, $password, $database_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$create_db = "CREATE DATABASE IF NOT EXISTS $database_name";
mysqli_query($conn, $create_db);
mysqli_select_db($conn, $database_name);

// Create table if it doesn't exist
$create_table = "CREATE TABLE IF NOT EXISTS registrations (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    affiliation VARCHAR(255) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    transaction_id VARCHAR(255) NOT NULL,
    payment_receipt VARCHAR(255) NOT NULL,
    abstract VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $create_table)) {
    // Table created successfully or already exists
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>