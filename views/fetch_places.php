<?php
$host = 'localhost';
$db = 'itsmytvm';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset($charset);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,place_name, description, your_name, image_path, created_at FROM places ORDER BY created_at ASC";
$result = $conn->query($sql);

$places = [];

while ($row = $result->fetch_assoc()) {
    $places[] = $row;
}

echo json_encode($places);

$conn->close();
?>
