<?php


$host = 'localhost';
$db = 'itsmytvm';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Set character set
$conn->set_charset($charset);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>