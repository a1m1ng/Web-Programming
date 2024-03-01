<?php
// Task 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:

$order =& $very_bad_unclear_name;
$order .= " python top";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

// Task 2

$intVar = 42;
echo $intVar;
echo "\n";

$floatVar = 13.45;
echo $floatVar;
echo "\n";

echo 6 + 6;  // Result: 12
echo "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "Разница в расходах: " . ($last_month - $this_month) . "\n";

//Task 11

$num_languages = 4;

$months = 11;

$days = $months * 16;

$days_per_language = $days / $num_languages;

echo "Среднее количество дней на изучение каждого языка: $days_per_language" . "\n";

// Task 12

echo 8**2;
echo "\n";

// Task 13
$my_num = 88;

$answer = $my_num;

$answer += 2;

$answer *= 2;

$answer -= 2;

$answer /= 2;

$answer -= $my_num;

echo $answer;  // Result: 1
echo "\n";

// Task 14

// Работа с %
$a = 10;
$b = 3;
$rem = $a % $b;
echo "Остаток от деления {$a} на {$b}: {$rem}\n";

$a = 48;
$b = 18;
if ($a % $b === 0) {
    $result = $a / $b;
    echo "Делится: $result\n";
} else {
    $rem = $a % $b;
    echo "Делится с остатком: $rem\n";
}

// Работа со степенью и корнем
$st = pow(2, 10);
echo "2^10 = $st\n";

$sq = sqrt(245);
echo "√245 = $sq\n";

$array = [4, 2, 5, 19, 13, 0, 10];
$sum_of_squares = 0;
foreach ($array as $value) {
    $sum_of_squares += pow($value, 2);
}
$root_of_sum_of_squares = sqrt($sum_of_squares);
echo "√(4^2 + 2^2 + 5^2 + 19^2 + 13^2 + 0^2 + 10^2) = $root_of_sum_of_squares\n";

// Работа с функциями округления
$sq = sqrt(379);
echo "√379 ≈ " . round($sq) . " или " . round($sq, 1) . "или " . round($sq, 2) . "\n";

$sq = sqrt(587);
$rounded_result = [
    'floor' => floor($sq),
    'ceil' => ceil($sq)
];
echo "√587 ≈ " . $rounded_result['floor'] . " или " . $rounded_result['ceil'] . "\n";

// Работа с min и max
$numbers = [4, -2, 5, 19, -130, 0, 10];
$min = min($numbers);
$max = max($numbers);
echo "Минимальное число: $min, максимальное число: $max\n";

// Работа с рандомом
$random_number = rand(1, 100);
echo "Случайное число от 1 до 100: $random_number\n";

$random_array = [];
echo "10 случайных чисел: ";
for ($i = 0; $i < 10; $i++) {
    $random_array[$i] = rand();
    if ($i != 9) {
        echo $random_array[$i] . ", ";
    } else {
        echo $random_array[$i];
    }
}
echo "\n";

// Работа с модулем
$a = rand(-100, 100);
$b = rand(-100, 100);
$abs = abs($a - $b);
echo "Модуль разности {$a} и {$b}: {$abs}\n";

$arr1 = [1, 2, -1, -2, 3, -3];
$arr2 = [];
foreach ($arr1 as $val){
    array_push($arr2, abs($val));
}
echo "Новый массив с положительными значениями: " . json_encode($arr2) . "\n";

// Общее
$number = 30;
$div = [];
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i === 0) {
        $div[] = $i;
    }
}
echo "Массив делителей $number: " . json_encode($div) . "\n";

$limit = 10;
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($array as $value) {
    $sum += $value;
    $count++;
    if ($sum > $limit) {
        break;
    }
}
echo "Количество первых элементов массива для суммы больше {$limit}: {$count}\n";

// Task 15

function printStringReturnNumber() {
    echo "пыхтон топ из 100 на ";  // Печать строки
    return 11_11_11;
}

// Вызываем функцию и записываем результат в переменную
$my_num = printStringReturnNumber();

// Выводим результат
echo $my_num . "\n";

// Task 16

function increaseEnthusiasm($string) {
    return $string . '!';
}

$result = increaseEnthusiasm(".");
echo $result . "\n";

function repeatThreeTimes($string) {
    return $string . $string . $string;
}

$result = repeatThreeTimes("Пыхтон");
echo $result . "\n";

$result = increaseEnthusiasm(repeatThreeTimes("ha"));
echo $result . "\n";

function cut($string, $length = 10) {
    return substr($string, 0, $length);
}

$result = cut("Looooooooooooooooooooonnnnnnngggggggg", 6);
echo $result . "\n";

function recursion_print($arr, $index = 0) {
    if ($index < count($arr)) {
        echo $arr[$index] . "\n";
        recursion_print($arr, $index + 1);
    }
}

$array = [1, 2, 3, 4, 5];
echo "Рекурсия массива:\n";
recursion_print($array);

function sum_digits($number) {
    $sum = 0;
    while ($number > 0 || $sum > 9) {
        if ($number == 0) {
            $number = $sum;
            $sum = 0;
        }
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

$num = 876;
$result = sum_digits($num);
echo "Странная сумма цифр числа {$num}: $result\n";

// Task 17

$array = [];
for ($i = 1; $i <= 5; $i++) {
    $array[] = str_repeat('x', $i);
}
echo json_encode($array);

function arrayFill($value, $count) {
    return array_fill(0, $count, $value);
}

$result = arrayFill('x', 5);
print_r($result);


$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($array as $sub) {
    $sum += array_sum($sub);
}
echo "Сумма элементов двухмерного массива: $sum\n";

$array = [];
$num = 1;
for ($i = 0; $i < 3; $i++) {
    $temp_array = [];
    for ($j = 0; $j < 3; $j++) {
        $temp_array[] = $num;
        $num++;
    }
    $array[] = $temp_array;
}
echo json_encode($array) . "\n";

$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];
echo "{$array[0]} * {$array[1]} + {$array[2]} * {$array[3]} = $result\n";

$user = [
    'name' => 'Alexandr',
    'surname' => 'Smidt',
    'patronymic' => 'Ivanovitch'
];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "\n";

$date = [
    'year' => 5,
    'month' => 11,
    'day' => 1987
];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Количество элементов в массиве: " . count($arr) . "\n";
echo "Последний элемент массива: " . $arr[count($arr) - 1] . "\n";
echo "Предпоследний элемент массива: " . $arr[count($arr) - 2] . "\n";

// Task 18

function is_sum_greater_than_ten($num1, $num2) {
    return ($num1 + $num2) > 10;
}

function is_equal($num1, $num2) {
    return $num1 === $num2;
}

$test = 0;
if ($test == 0) echo 'верно';

echo "\n";

$age = 33;
if ($age < 10 || $age > 99) {
    echo "Число не входит в диапазон от 10 до 99.\n";
} else {
    $digit_sum = array_sum(str_split($age));
    if ($digit_sum <= 9) {
        echo "Сумма цифр однозначна: $digit_sum\n";
    } else {
        echo "Сумма цифр двузначна: $digit_sum\n";
    }
}

$arr = [1, 2, 3];
if (count($arr) == 3) {
    echo "Сумма элементов массива: " . array_sum($arr) . "\n";
}
