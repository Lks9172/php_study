<?php

/**
 * Access Global Variables.
 * 
 * php에는 전역 스코프와 함수 스코프가 있습니다.
 */
if (true) {
    $message = 'Hello, world';
}

echo $message.PHP_EOL;

function foo()
{
    // 1번째 방법
    // global $message;
    // 2번째
    $message = $GLOBALS['message'];

    // 하지만 2번째 방법으로는 접근은 가능하나 참조는 불가능하다 -> 값을 읽을수는 있으나 수정은 불가능!
    echo $message.PHP_EOL;
}
foo();


/**
 * Static variables.
 * 정적 변수 - 함수호출이 끝나도 값을 유지하는 변수입니다.
 */
function foo2()
{
    static $count = 0;
    return $count++;
}

echo foo2().PHP_EOL;
echo foo2().PHP_EOL;
/**
 * Clousre.
 * 바깥 영역의 변수에 접근!
 */
function foo3($arg)
{
    return function () use($arg){
        return $arg;
    };
}

$func = foo3('Hello, world');
echo $func();