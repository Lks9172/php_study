<?php


/**
 * Define Array.
 */
$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

// $message = array('Hello, world', 'Who are you?', 'Bye');

 /**
  * Define Array with key.
  */
$messages = [
  0         => 'Hello, world',
  'message' => 'Who are you?',
  'Bye'
];

// php에서 배열은 위와 같이 크게 기본 배열, 키와 값을 가진 해시형 배열?로 쓰인다.

/**
 * Destructuring. -> 비구조화 할당 -> 배열을 분해해서 변수에 담는다는 정도로 이해
 */
[ 'message' => $message ] = $messages;

var_dump($message);