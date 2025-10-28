<?php
include 'db.php';
$result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['task']} <span class='delete-btn' data-id='{$row['id']}'>✖</span></li>";
}
?>
