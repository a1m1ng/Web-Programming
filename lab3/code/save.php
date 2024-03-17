<?php
function redirectToHome(): void
{
    header('Location: /');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

mkdir("categories/{$category}/{$email}");
$filePath = "categories/{$category}/{$email}/{$title}.txt";

$fp = fopen($filePath, 'w');
fwrite($fp, $desc);
redirectToHome();