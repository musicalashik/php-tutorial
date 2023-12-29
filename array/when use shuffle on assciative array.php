<?php


$fruits = ['a'=>'mango','b'=>'banana','c'=>'dates'];

shuffle($fruits); // akhane print_r kora jabena tahole ati 1 return korbe karon ati array modifie kore return korena

print_r($fruits); // akhon dekha jabe shuffle korar pore array key gula loos hoye indexd array hoye geche

/*
akhon jodi amra array key gula preserve kore shuffle korte chai tahole 
techniques kore orginal array key gula random vabe  copy kore arrayNames[$key] amon kore kora jabe
*/


$fruits = ['a'=>'mango','b'=>'banana','c'=>'dates'];
$key = array_rand($fruits);

echo $fruits[$key];


// abar original array ti ke akti temporary arra te copy kore kora jay jate original array key gula loos na hoy

$fruits = ['a'=>'mango','b'=>'banana','c'=>'dates'];
$_fruits = $fruits;

shuffle($_fruits);


var_dump($_fruits);

var_dump($fruits);