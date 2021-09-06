<?php

/**
 * Add slashes at Quotes.
 */
// Add
$slashe = addslashes("'");
// Remove
stripslashes($slashe);

/**
 * Binary to Hex
 */
$bytes = random_bytes(32);

// echo $hex = bin2hex($bytes);
// echo "\n";
// echo hex2bin($hex). PHP_EOL;

/*
 * One way hash (Encryption)
 *
 * sha1, md5 Not recommended
 * 해쉬를 사용한 암호화 알고리즘
 * crypt를 추천
 */
crypt('Hello, world', 'secret');

/**
 * Split, Join
 */
$url = 'http"//example.com';

// Split
$exp = explode('//', $url);
// var_dump($exp);

// Join
// var_dump(implode('//', $exp));

/**
 * HTML entities
 */
$html = <<<'HTML'
<html>
    <body>
        <h1>Hello, world</h1>
    </body>
</html>
HTML;

// $encode = htmlentities($html);
// var_dump($encode); 
$encoded = htmlspecialchars($html);

htmlspecialchars_decode($encoded);

/*
 * Strip HTML Tags
 */
strip_tags($html);

/*
 * \n -> <br> tag
 */
nl2br("Hello,\n world");

/*
 * Char
 */
// char -> num
ord('A'); // -> 65
// num -> char
chr(65); // -> A

/**
 * Parse Query string
 */
$qs = 'lang=php&addr=127.0.0.1';
parse_str($qs, $arr);
var_dump($arr);
/*
 * Number Format
 */
number_format(123456789);


/**
 * Case
 */
// Upper
strtoupper('Hello, world');
// Lower
strtolower('HELLO, WORLD');

/*
 * Remove spaces
 */
echo trim(' Hello, world ');


/*
 * Replace
 */
echo strtr('Hello, world', [
    'Hello, world' => '안녕하세요'
]);