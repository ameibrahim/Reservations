<?php
// Veritabanı bağlantı bilgileri
$servername = 'localhost';
$username = 'aiiovdft_neudc';
$password = 'aiiovdft_neudc';
$dbname = 'aiiovdft_reservations_academicians';

// Veritabanı bağlantısı
$connection_academics = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($connection_academics->connect_error) {
    die("Connection failed: " . $connection_academics->connect_error);
}

?>