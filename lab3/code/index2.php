<?php
session_start();

if(isset($_POST['submit'])) {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $_SESSION['surname'] = $surname;
    $_SESSION['name'] = $name;
    $_SESSION['age'] = $age;

    header("Location: /print.php");
    exit;

}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаба 3 №2(б)</title>
</head>
<body>
    <form method="post">
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" required><br>
        <label for="name">Имя:</label>
        <input type="text" name="name" required><br>
        <label for="age">Возраст:</label>
        <input type="number" name="age" required><br>
        <button type="submit" name="submit">Отправить</button>
    </form>
</body>
</html>

