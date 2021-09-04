<?php

$context = 1;

/**
 * Switch ~ case.
 */
switch ($context) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    default:
        echo 'Hi';
}


switch ($context):
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    default:
        echo 'Hi';
    endswitch;
/**
 * Switch ~ case -> If.
 */
if ($context == 1) {
    echo "1";
} elseif ($context == 1) {
    echo "2";
} else {
    echo 'Hi';
}