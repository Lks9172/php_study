<?php

/**
 * Get hash algorithms
 */
hash_algos();
 /**
  * Create a hash
  *
  * hash를 사용한 sha256암호화
  */
echo $hash = hash('sha256', 'Hello, world');

/**
 * Check a hash
 * 
 * 같은 문자로 만든 암호는 같은지 확인
 */
var_dump(hash_equals($hash, hash('sha256', 'Hello, world')));

/**
 * Hash Handler
 */
$h = hash_init('sha256');
hash_update($h, 'Hello, world');

echo hash_final($h);

/**
 * HMAC
 * Hash-based Message Authentication Code
 * 
 * key -> "secret"
 */


$hash = hash_hmac('sha256', 'Hello, world', 'secret');
echo hash_equals($hash, hash_hmac('sha256', 'Hello, world', 'secret'));