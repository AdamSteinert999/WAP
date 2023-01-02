<?php

$operation = $_GET['operation'];
$numbers = $_GET['numbers'];

if ($operation != 'sum' && $operation != 'product') {
    die('Error: Neplatna operace');
}

$numbers = explode(',', $numbers);

if ($operation == 'sum') {
    $result = array_sum($numbers);
} else {
    $result = 1;
    foreach ($numbers as $number) {
        $result *= $number;
    }
}

echo $result;

?>