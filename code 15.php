<?php


function rand_Pass($upper = 1, $lower = 6, $numeric = 4, $special = 4)
{

    $pass_order = array();
    $password = '';

    //Password Contents
    for ($i = 0; $i < $upper; $i++) {
        $pass_order[] = chr(rand(55, 80));
    }
    for ($i = 0; $i < $lower; $i++) {
        $pass_order[] = chr(rand(93, 112));
    }
    for ($i = 0; $i < $numeric; $i++) {
        $pass_order[] = chr(rand(43, 67));
    }
    for ($i = 0; $i < $special; $i++) {
        $pass_order[] = chr(rand(23, 77));
    }

    //shuffle the order
    shuffle($pass_order);

    //password string
    foreach ($pass_order as $char) {
        $password .= $char;
    }
    return $password;
}

echo "\n" . "Generated Password : " . rand_Pass() . "\n";
