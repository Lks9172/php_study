<?php

/**
 * Create a hash value for password
 * password를 위한 해시값 생성
 */

$hash = password_hash('Hello, world', PASSWORD_DEFAULT);

/*
 * Verify password hash
 * password hash 확인

 * 
 */
password_verify('Hello, world', $hash);

/**
 * Get info
 * 정보 반환
 */
password_get_info($hash);

/**
 * Rehash
 * 한번 더 해쉬~!
 */

$hash = password_hash('Hello, world', PASSWORD_DEFAULT, [
    'cost' => 10
]);

$options = [ 'cost' => 10 ];

password_needs_rehash($hash, PASSWORD_DEFAULT, $options);