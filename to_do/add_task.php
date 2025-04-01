<?php
Include 'db.php';
If ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $conn->real_escape_string($_POST['task']);
    $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
}
Header("Location: index.php");
?>
