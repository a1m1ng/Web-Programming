<?php
// Task 1
// a)
$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all('/a..b/', $str, $matches);
echo json_encode($matches[0]) . "\n";

// b)
$str = 'a1b2c3';

function cube($matches) {
    return pow($matches[0], 3);
}

$result = preg_replace_callback('/[0-9]+/', 'cube', $str);

echo $result;
?>