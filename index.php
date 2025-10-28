<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="todo-container">
        <h1>📝 My To-Do List</h1>
        <div class="input-section">
            <input type="text" id="taskInput" placeholder="Enter a new task...">
            <button id="addBtn">Add</button>
        </div>
        <ul id="taskList"></ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
