<?php

/**
 * break [Level].
 * 
 * 브레이크 문에 레벨을 주는건 다른언어와 다른 php의 특징!
 */

for ($i = 0; $i < 10; $i++) {
    for ($j = 4; $j < 10; $j++) {
        break 2;
    }
    echo $i;
}


/**
 * break [Level].
 * 
 */
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        continue 2;
    }
    $sum += $i;
}

echo $sum;