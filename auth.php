<?php
include 'db_config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "Login successful.";
} else {
    echo "Login failed.";
}

$conn->close();
?>
