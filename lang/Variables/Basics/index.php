<?php

/**
 * Define Variables.
 * 
 * http://docs.php.net/manual/en/language.types.php
 */

$message = 'Hello, world'; // String
$userCount = 0; // Int
$pi = 3.14; // Double
$is_visited = false;
$temp = null; //NULL


/**
 * Using Variables.
 */
$message;

/**
 * Using Variables in String.
 */
// ->  The message is Hello, world
echo "The message is {$message}";
echo "\n";
echo 'The message is {$message}';
echo "\n";

/** 
 * Here Doc, Now Doc.
*/
// echo '<html><head></head></html>';
// echo <<<'HTML'
// <html>
//     <head>
//         <title>$message </title>
//     </head>
// </html>
// 
// HTML;   -> 근데 잘 안씀

/**
 * Free.
 */
// unset($message);
echo $message;