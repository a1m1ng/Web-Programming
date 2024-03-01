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