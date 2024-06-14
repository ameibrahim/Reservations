<?php
// Student Database connection
$student_db_host = 'localhost';
$student_db_username = 'aiiovdft_neudc';
$student_db_password = 'aiiovdft_neudc';
$student_db_name = 'aiiovdft_reservations_students';

// Create student database connection
$student_connection = new mysqli($student_db_host, $student_db_username, $student_db_password, $student_db_name);

// Check connection errors
if ($student_connection->connect_error) {
    die("Student database connection error: " . $student_connection->connect_error);
}

// Academic Database connection
$academic_db_host = 'localhost';
$academic_db_username = 'aiiovdft_neudc';
$academic_db_password = 'aiiovdft_neudc';
$academic_db_name = 'aiiovdft_reservations_academicians';

// Create academic database connection
$academic_connection = new mysqli($academic_db_host, $academic_db_username, $academic_db_password, $academic_db_name);

// Check connection errors
if ($academic_connection->connect_error) {
    die("Academic database connection error: " . $academic_connection->connect_error);
}
?>
