<?php

/**
 * First class function.
 */
$foo = function() {
    echo 'Hello, world';
};

// echo $foo().PHP_EOL;

function foo($callback)
{
    echo $callback();
}

// foo (
//     function () {
//         return 'Hello, world';
//     }
// );

/**
 * Higher-order function.
 * 고차함수 함수를 반환?
 */
function foo2()
{
    return function () {
        return 'Hello, world';
    };
}

$func = foo2();
echo $func();