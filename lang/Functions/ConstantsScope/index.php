<?php


/**
 * Constants Scope.
 * 최상위 scope에서만 const키워드를 사용하여 상수를 선언할 수 있습니다.
 */
function foo()
{
    define('MESSAGE', 'Hello, world');
}
foo();
echo MESSAGE.PHP_EOL;

/**
 * Callbacks (Don't need 'use').
 */
$foo = function () {
    return MESSAGE;
};

echo $foo();