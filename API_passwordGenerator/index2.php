<?php
    
    $password_length = $_GET['length'];
    $include_special_characters = $_GET['include_special_characters'];

    $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    if ($include_special_characters) {
        $characters .= "!@#$%^&*()_-=+;:,.?";
    }
    
    $password = "";

    for($i = 0; $i < $password_length; $i++) {

        $index = mt_rand(0, strlen($characters) - 1);

        $password .= $characters[$index];
    }

    header('Content-Type: application/json');
    echo json_encode(array("password" => $password));
    exit;
?>
