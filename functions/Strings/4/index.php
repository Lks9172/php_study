<?php

/**
 * Sub String
 * -> // 포함한 뒷부분 출력
 */
strstr('http://example.com', '//');

/*
 * Token
 * -> // 앞쪽 출력
 */
strtok('http://example.com', '//');

/*
 * Slice
 * 부분 문자열 반환 
 */
substr('Hello, world', 7);

/*
 * Compare
 * 비교 아래 code는 -5인덱스 부터 비교합니다.
 * 같으면 0!
 */
substr_compare('Hello, world', 'world', -5);

/*
 * Replace
 * 바꾸기
 */
substr_replace('Hello, world', 'Hi', 0, 5);

/*
 * Count
 * 
 * 해당 문자를 몇개 포함하고 있는지 반환합니다.
 */
substr_count('Hello, world', 'l', 0);

/*
 * Wrapping
 * 5글자씩 짤라서 반환합니다.
 * 
 * 선택 파라미터를 주면 \n도 포함시켜 자를 수 있습니다. -> 자르는 조건이 더 많아짐!
 */
echo wordwrap('Hello, world', 5);