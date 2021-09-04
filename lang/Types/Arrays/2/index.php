<?php

$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

/**
 * Insert
 */
$messages[3] = 'whoops';


/**
 * Select
 */

/**
 * Update
 */
$messages[3] = 'Do you know?';

/**
 * Delete
 */
unset($messages[3]);


var_dump($messages);