<?php

/**
 * Print formatted string
 *
 * -> %s String
 * -> %d Int
 * -> %f Float
 * 
 * c언어랑 똑같넴
 * vprintf는 배열을 인자로 받습니다.
 */
$message = 'Hello, world';

// printf("%s, %d", $message, 10);
// printf("%s, %d", ...[ $message, 10 ]);
// vprintf("%s, %d", [
//     $message, 10
// ]);

/**
 * Buffering
 */

echo $buf = sprintf("%s", "Hello, world");
echo "\n";
echo sprintf("%s, %d", ... [ $message, 10 ]).PHP_EOL; // 구분자는 ,입니다.
echo vsprintf("%s, %d", [
    $message, 10
]);