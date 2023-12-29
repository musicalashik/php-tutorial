<?php


$numbers = [25,35,65,80];

list($ashik,$roman,$sagor, $mikail) = $numbers; // ক্রমানুসারে 25 , 35 , 65 , 80 এসাইন হবে $ashik,$roman,$sagor, $mikail তে

echo $ashik,PHP_EOL;



list($hasan,$roman) = $numbers;  // list() এ প্যারমিটার কম দিয়ে ভ্যারিয়েবল এসাইন করলেও হবে।

echo $hasan;

$foo = array(2 => 'a', 1 => 'b', 0 => 'c');


list($x, $y, $z) = $foo;


var_dump($foo, $x, $y, $z);




