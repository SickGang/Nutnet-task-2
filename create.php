<?php
require_once 'config/connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = validate($_POST["name"]);
    $surname = validate($_POST["surname"]);
    $age = validate($_POST["age"]);
}

mysqli_query($connect, "INSERT INTO `task-2`.`form` (`id`, `name`, `surname`, `age`) VALUES (NULL, '$name', '$surname', '$age')");

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

