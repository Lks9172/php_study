<?php

/**
 * foreach (as [$key => ] $value).
 * 클래식한 배열과 사용할 때 자주 사용하는 for_each문입니다.
 */

$response = [
    // 'name'       => 'PHP',
    // 'categoryId' => 0,
    'messages'   => [
        'Hello, world',
        'Who are you?',
        'Bye',
    ]
];

foreach ($response as $key => $value) {
    foreach ($value as $msg) {
        echo $msg . PHP_EOL;
    }
}