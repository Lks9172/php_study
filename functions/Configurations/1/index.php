<?php

/**
 * PHP Extension.
 */

 //Loaded
 // extension 불러오기 반환값은 boolean형
// var_dump(extension_loaded('mbstring'));

// load된 익스텐션들을 반환합니다.
// var_dump(get_loaded_extensions());

/**
 * include Path.
 */
// Set
set_include_path(__DIR__ . '/mylib');
include 'mylib/HelloWorld.php'; //-> Hello, world

//Get - 경로를 반환합니다!
// var_dump(get_include_path());

// reset
// restore_include_path();
// include 'mylib/HelloWorld.php'; -> Error

/**
 * Get included Files.
 */
// include된 파일들을 반환합니다.
// var_dump(get_included_files());

/**
 * Get php information.
 */
// output stream으로 바로 출력됨
// phpinfo();

/**
 * php.ini
 */
// Set
// ini_set('session.gc_maxlifetime', 1440);
// Get
// ini_get('session.gc_maxlifetime'); // -> 1440
// Reset
// ini_restore('session.gc_maxlifetime');

/**
 * Environment Variables.
 */

/**
 * Case 1. put, getenv
 */
// Set
putenv('APP_ENV=' . 'production');
// Get
var_dump(getenv('APP_ENV')); //-> production


/**
 * Case 2. $_ENV
 */
// Set
$_ENV['APP_ENV'] = 'development';
// Get
var_dump($_ENV['APP_ENV']); // -> development
