<?php

/**
<<<<<<< HEAD
 * Spread Operator in Array Expression
 * https://wiki.php.net/rfc/spread_operator_for_array
 *
 * PHP 7.4 <=
 */

$messages = [
    'Hello, world'
];

// $messages = [
//     'Hello, world',
//     'Who are you?',
//     'Bye',
// ];
=======
 * spread_operator_in_array_Expression
 * https://wiki.php.net/rfc/spread_operator_for_array
 * 
 * PHP 7.4
 * 
 * -> 배열을 합칠때 간편하게 합칠 수 있습니다.
 */

$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];
var_dump($messages);
$messages = [
    'Hello, world'
];
var_dump($messages);
>>>>>>> main
$messages = [
    ...$messages,
    'Who are you?',
    'Bye'
];
<<<<<<< HEAD
=======

var_dump($messages);
>>>>>>> main
