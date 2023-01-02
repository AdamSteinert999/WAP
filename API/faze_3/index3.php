<?php

$data = file_get_contents('php://input');
$request = json_decode($data);

$operation = $request->operation;
$numbers = $request->numbers;

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

$dttm = date('Y-m-d H:i:s');

echo json_encode(array('result' => $result, 'dttm' => $dttm));

?>
