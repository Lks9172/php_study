<?php

/**
 * if.
 */
// false값이 되는 애들 -> [], '', 0, null

if (true) {
    echo 'Hello, world';
}
echo "\n";
/**
 * if ~ else.
 */
if (false) {
    echo 'Hello, world';
}
else {
    echo 'Bye';
}
echo "\n";


/**
 * if ~ elseif ~ else.
 */
if (false) {
    echo 'Hello, world';
} elseif (true) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}
echo "\n";


/**
 * Define Variables in If Context.
 */
if ($message = 'Hello, worls') {
    echo 'Hello, world';
} else {
    echo '비어있습니다.';
}

echo "\n";
// 대체 문법
if (true):
    echo 'Hello, world';
elseif (true):
    echo 'Hello, world';
else:
    echo 'Bye';
endif;