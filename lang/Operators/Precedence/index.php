<?php

/**
 * Operator Precedence.
 * php에서 연산자의 우선순위
 * Comparison > Logical
 */


true && 10 < 20 == true && 10 > 20; // -> true && true == true && false -> true && true && false -> true && false -> false
