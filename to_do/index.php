
<?php

$conn = new mysqli("localhost", "root", "", "to_do");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <style>
        Body {
            Font-family: Arial, sans-serif;
            Text-align: center;
            Background: #f0f0f0;
            Margin: 0;
            Padding: 0;
        }
        .container {
            Width: 400px;
            Margin: 50px auto;
            Background: white;
            Padding: 20px;
            Border-radius: 8px;
            Box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        Input, button {
            Padding: 10px;
            Margin: 5px;
            Width: 80%;
            Border: 1px solid #ccc;
            Border-radius: 5px;
        }
        Ul {
            List-style: none;
            Padding: 0;
        }
        Li {
            Padding: 10px;
            Background: #e3f2fd;
            Margin: 5px 0;
            Display: flex;
            Justify-content: space-between;
            Align-items: center;
            Border-radius: 5px;
        }
        .delete-btn {
            Background: red;
            Color: white;
            Border: none;
            Padding: 5px 10px;
            Cursor: pointer;
            Border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>To-Do List</h2>
        <form action="add_task.php" method="POST">
            <input type="text" name="task" placeholder="Enter a task" required>
            <button type="submit">Add Task</button>
        </form>
        <ul>
            <?php
            $result = $conn->query("SELECT * FROM tasks");
            While ($row = $result->fetch_assoc()) {
                Echo "<li>{$row['task']} 
                    <a href='delete.php?id={$row['id']}'><button class='delete-btn'>Delete</button></a>
                </li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>