<?php

/**
 * Arrow Functions
 * https://wiki.php.net/rfc/arrow_functions_v2
 *
 * PHP 7.4 <=
 */

 // original
$message = 'Hello, world';
 function foo($callback)
 {
    echo $callback().PHP_EOL;
 }

 foo(function () use($message) {
    return $message;
});

// 7.4부터 추가된 화살표함수 그치만 한줄로 다 작성해야함..., return문 사용불가 불편
// foo(fn() => $message);

foo(function () use ($message) {
    return $message;
});
foo(fn () => $message);