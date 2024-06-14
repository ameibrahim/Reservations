<?php

// Veritabanı bağlantı bilgileri
$servername = 'localhost';
$username = 'aiiovdft_neudc';
$password = 'aiiovdft_neudc';
$dbname = "aiiovdft_reservations_students";

// Veritabanı bağlantısı
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    exit("Connection failed: " . $conn->connect_error);
}
?>
