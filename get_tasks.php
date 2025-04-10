<?php
require 'db.php';

$query = "SELECT * FROM tasks ORDER BY task_date ASC, task_time ASC";

$result = mysqli_query($connection, $query);
print_r($result);
echo "<br>";

$tasks = [];
while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;
}

print_r($tasks);

echo json_encode(($tasks));

mysqli_close($connection);