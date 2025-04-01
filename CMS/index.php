

<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>📇 Contact Manager</h2>

        <form action="add_contact.php" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <button type="submit">➕ Add Contact</button>
        </form>

        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            <?php
            $result = $conn->query("SELECT * FROM contacts");
            While ($row = $result->fetch_assoc()) {
                Echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>
                            <a href='edit_contact.php?id={$row['id']}'>✏ Edit</a>
                            <a href='delete_contact.php?id={$row['id']}' class='delete-btn'>❌ Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

