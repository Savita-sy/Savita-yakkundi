<?php
$conn = new mysqli("localhost", "root", "", "to_do");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
