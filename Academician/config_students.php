<?php
// Öğrenci veritabanı bağlantı bilgileri
$student_db_host = 'localhost';
$student_db_username = 'aiiovdft_neudc';
$student_db_password = 'aiiovdft_neudc';
$student_db_name = 'aiiovdft_reservations_students';

// Öğrenci veritabanı bağlantısı
$connection_students = new mysqli($student_db_host, $student_db_username, $student_db_password, $student_db_name);

// Bağlantıyı kontrol et
if ($connection_students->connect_error) {
    die("Connection failed: " . $connection_students->connect_error);
}
?>
