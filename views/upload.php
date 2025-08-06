<?php
// $host = 'localhost';
// $db = 'itsmytvm';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

// $conn = new mysqli($host, $user, $pass, $db);
// $conn->set_charset($charset);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
require_once 'dbConfig.php';
$place_name = $conn->real_escape_string($_POST['place_name']);
$description = $conn->real_escape_string($_POST['description']);
$your_name = $conn->real_escape_string($_POST['your_name']);

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $upload_dir = 'uploads/';
    if (!is_dir($upload_dir)) mkdir($upload_dir, 0777, true);

    $image_name = uniqid() . '_' . basename($_FILES['image']['name']);
    $target_file = $upload_dir . $image_name;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        $sql = "INSERT INTO places (place_name, description, your_name, image_path) 
                VALUES ('$place_name', '$description', '$your_name', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "Upload successful!";
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Image upload failed.";
    }
} else {
    echo "Invalid image upload.";
}

$conn->close();
?>
