<?php
$host = "localhost";
$username = "root";
$password = "mysql";
$database = "task";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Ошибка подключения" . $connection->connect_error);
}