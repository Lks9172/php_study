<?php

/**
 * For
 */
for ($i= 0; $i <= 10; $i++) {
    echo $i; // 1-> 10 까지 출력을 해줍니다.
}
echo "\n";

 /**
  * for with array
  */

  $message = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

for ($i= 0; $i < 3; $i++) {
    echo $message[$i] . PHP_EOL; // 1-> 10 까지 출력을 해줍니다.
}
