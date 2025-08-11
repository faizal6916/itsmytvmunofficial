<?php
require_once 'dbConfig.php';
$sql = "SELECT id,place_name, description, your_name, image_path, created_at FROM places ORDER BY created_at ASC";
$result = $conn->query($sql);
$places = [];
while ($row = $result->fetch_assoc()) {
    $places[] = $row;
}
echo json_encode($places);
$conn->close();
?>
