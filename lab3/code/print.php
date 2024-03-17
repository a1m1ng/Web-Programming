<?php
session_start();

$surname = $_SESSION['surname'];
$name = $_SESSION['name'];
$age = $_SESSION['age'];

echo "<p>Фамилия: $surname</p>";
echo "<p>Имя: $name</p>";
echo "<p>Возраст: $age</p>";
?>
