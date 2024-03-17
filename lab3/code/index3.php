<?php
session_start();

if(isset($_POST['submit'])) {
    $data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'other' => $_POST['other']
    );

    $_SESSION['user_data'] = $data;

    header("Location: ul.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лаба 3 №2(в)</title>
</head>
<body>
    <form method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" required><br>
        <label for="age">Возраст:</label>
        <input type="number" name="age" required><br>
        <label for="salary">Зарплата:</label>
        <input type="number" name="salary" required><br>
        <label for="other">Что-нибудь:</label>
        <input type="text" name="other"><br>
        <button type="submit" name="submit">Отправить</button>
    </form>
</body>
</html>
