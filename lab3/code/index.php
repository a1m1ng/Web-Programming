<?php
// Task 1
// a)
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all('/a..b/', $str, $matches);
echo json_encode($matches[0]) . "<br>";

// b)
$str = 'a1b2c3';

function cube($matches) {
    return pow($matches[0], 3);
}

$result = preg_replace_callback('/[0-9]+/', 'cube', $str);

echo $result;
?>

<p>Task 2(a)<br></p>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>3 лабораторная по вебу (таск 1, 2(а))</title>
</head>
<body>
    <form method="post">
        <textarea name="textArea" rows="4" cols="70" required></textarea><br>
        <button type="submit" name="submit">Подсчитать слова и символы</button><br>
    </form>

<?php
if(isset($_POST['submit'])) {
    $text = $_POST['textArea'];
    $wordCount = str_word_count($text);
    $charCount = strlen($text);

    echo "<p>Количество слов: $wordCount</p>";
    echo "<p>Количество символов: $charCount</p>";
}
?>

</body>
</html>


