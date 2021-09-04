<?php

/**
 * Define function with Parameters.
 * 인자와  함께 함수 정의하기
 * function <name>([[datatype] <param_name> [= defualt value], ...])
 */
function foo0(string $arg)
{
    echo $arg;
}
foo0('Hello, world'); // -> Hello, world
echo "\n";


 function foo($arg) {
     echo $arg;
 }

foo('Hello, world'); // -> Hello, world
echo "\n";
 /**
 * Default Parameter
 * Default Parameter와 일반 인자를 섞어 쓸때는 Default Parameter를 뒤쪽에 위치시켜준다.(생략을 할 수 있도록 약속한것!)
 */
function foo2($arg = 'Hello, world') {
    echo $arg. PHP_EOL;
}

foo2();
foo2('Who are you?');

 /**
 * Define function with Rest parameters.
 */
function foo3($arg1, $arg2, $arg3)
{
    var_dump($arg1, $arg2, $arg3).PHP_EOL;
}

foo3('Hello, world', 'Who are you?', 'Bye');

 /**
 * Call function with Spread.
 */
function foo4(...$arg1)
{
    var_dump(...$arg1).PHP_EOL;
}
$args = [ 'Hello, world', 'Who are you?', 'Bye' ];

foo4(...$args);