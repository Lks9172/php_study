<?php

/**
 * include(_once).
 */
// include 'HelloWorld.php'; -> 중복으로 불러오면 에러!
// include_once 'HelloWorld.php';


/**
 * require(_once).
 */
// 불러올 파일이 존재하지 않으면 에러!
// require 'HelloWorld.php';
// require_once 'HelloWorld.php';
// var_dump($message);
// foo();

/**
 * Return
 */
$arg = include 'HelloWorld.php';
var_dump($arg);