<?php
require 'db.php';

if (
    isset($_POST['task']) && !empty($_POST['task']) &&
    isset($_POST['task_date']) && !empty($_POST['task_date']) &&
    isset($_POST['task_time']) && !empty($_POST['task_time']) &&
    isset($_POST['priority']) && !empty($_POST['priority']) 
);

$task = mysqli_real_escape_string($connection, $_POST['task']);
$task_date = mysqli_real_escape_string($connection, $_POST['task_date']);
$task_time = mysqli_real_escape_string($connection, $_POST['task_time']);
$priority = mysqli_real_escape_string($connection, $_POST['priority']);


$query = "INSERT INTO tasks(task, task_date, task_time, priority) VALUES ('$task', '$task_date', '$task_time', '$priority')";

$result = mysqli_query($connection, $query);

if ($result) {
    header("Location: index.php");
}else {
    echo "Ошибка при добавлении задачи";
};


mysqli_close($connection);