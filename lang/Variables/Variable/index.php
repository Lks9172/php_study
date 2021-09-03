<?php

/**
 * Variable Variables. -> 가변 변수
 * 값에 따라 변수의 이름이 정해지는 변수라고 이해
 */

 $varName = 'message';
 // $message = 'Hello, world';
 $$varName = 'world';
 // $world = 'world';
 $$$varName ='world';

 echo $world;