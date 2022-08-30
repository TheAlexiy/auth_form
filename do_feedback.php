<?php

require_once __DIR__ . '/boot.php';

$stmt = pdo()->prepare(
    "INSERT INTO `feedback` (`username`, `name`, `country`, `age`, `desire`, `info`) 
                VALUES (:user, :name, :country, :radio, :checkbox, :info)"
);
$stmt -> execute([
    'user' => $_SESSION['username'],
    'name' => $_POST['name'],
    'country' => $_POST['country'],
    'radio' => $_POST['radio'],
    'checkbox' => join(", ", $_POST['checkbox']),
    'info' => $_POST['info'],
]);
header('Location: final.php');