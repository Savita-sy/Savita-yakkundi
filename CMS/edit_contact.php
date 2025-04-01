<?php
Include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM contacts WHERE id=$id");
$contact = $result->fetch_assoc();

If ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "UPDATE contacts SET name='name', email='$email', phone='$phone' WHERE id=$id";
    If ($conn->query($sql) === TRUE) {
        Header("Location: index.php");
        Exit();
    } else {
        Echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Contact</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Contact</h2>
        <form action="" method="POST">
            <input type="text" name="name" value="<?= $contact['name'] ?>" required>
            <input type="email" name="email" value="<?= $contact['email'] ?>" required>
            <input type="text" name="phone" value="<?= $contact['phone'] ?>" required>
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
