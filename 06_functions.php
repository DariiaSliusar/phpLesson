<?php

// function registerUser() {
//     echo 'User registered';
// }

// registerUser();

function registerUser($email) {
    echo $email . ' registered';
}

// registerUser('Dariia');

function sum($n1, $n2) {
    return $n1 + $n2;
}

// echo sum(5, 5);
// $number = sum(5, 5);
// echo $number;

// $substract = function($n1, $n2) {
//     return $n1 - $n2;
// };

// echo $substract(10, 5);

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(9, 9);