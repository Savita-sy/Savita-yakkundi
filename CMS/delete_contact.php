<?php
Include 'db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM contacts WHERE id=$id");

Header("Location: index.php");
Exit();
?>
