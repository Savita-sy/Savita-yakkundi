<?php
Include 'db.php';

If ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
    If ($conn->query($sql) === TRUE) {
        Header("Location: index.php");
        Exit();
    } else {
        Echo "Error: " . $conn->error;
    }
}