<?php

// Povolí všem klientům přístup k tomuto API
header('Access-Control-Allow-Origin: *');

// odpověd bude ve formátu json
header('Content-Type: application/json');

$operation = $_GET['operation'];
$operand1 = $_GET['operand1'];
$operand2 = $_GET['operand2'];


$result = null;

switch ($operation) {
  case 'add':
    $result = $operand1 + $operand2;
    break;
  case 'subtract':
    $result = $operand1 - $operand2;
    break;
  case 'multiply':
    $result = $operand1 * $operand2;
    break;
  case 'divide':
    if ($operand2 === 0) {
      // Při pokusu o dělení nulou vrátí chybu
      $result = array('error' => 'Nelze dělit nulou');
    } else {
      $result = $operand1 / $operand2;
    }
    break;
  default:
    // Pokud nerozpozná operaci vrátí error
    $result = array('error' => 'Nerozpoznaná operace');
}

// vrátí výsledek ve formátu json
echo json_encode($result);