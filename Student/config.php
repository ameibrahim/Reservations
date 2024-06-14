<?php
// Database connection variables
$student_db_host = 'localhost';
$student_db_username = 'aiiovdft_neudc';
$student_db_password = 'aiiovdft_neudc';
$student_db_name = 'aiiovdft_reservations_students';

// Create database connection
$connection = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection errors
if ($connection->connect_error) {
    die("Database connection error: " . $connection->connect_error);
}


?>
