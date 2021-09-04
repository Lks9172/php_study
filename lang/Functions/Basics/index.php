
<?php

/**
 * Define function.
 * 
 * function 함수이름 (인자){
 *  실행부
 * }
 */
function foo()
{
    echo 'Hello, world';
}

foo();

/**
 * Variables function.
 * 
 * 함수를  변수에  넣을 수 있다. -> php에서도  함수는  일급객체취급?
 */

 $fn = 'foo';
 //$fn();
 $fn();