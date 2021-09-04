<?php

/**
 * return value.
 *
 * function <name>(...)[: <return_type>]
 */
function foo()
{
    return 'Hello, world'.PHP_EOL;
}

echo foo();



/**
 * return with context.
 */
function foo2(bool $is)
{
    if ($is) {
        return 'Hello, world';
    }
    return 'Bye';
}

echo foo2(true).PHP_EOL;
echo foo2(false).PHP_EOL;


/**
 * return variables
 */

 function foo3($arg)
 {
     return $arg;
 }

 echo foo3('Hello, world');