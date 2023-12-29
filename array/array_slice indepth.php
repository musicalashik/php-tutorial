<?php

$fruits = ['banana','mango','pineaple','jackfruit','apple'];

$someFruits = array_slice($fruits,1,-1); // 1 mane mango r -1 mane apple so ati apple ar age sesh hobe

print_r($someFruits);

$someFruits2 = array_slice($fruits,-3); // last 3 number theke baki sob element

print_r($someFruits2);


$someFruits3 = array_slice($fruits,-3,-1);  // last 3 number theke last ar ager element porjonto

print_r($someFruits3);



$someFruits3 = array_slice($fruits,-3,-1,true);  // array index ta preserve rekhe array element extruct korte chaile

print_r($someFruits3);

/*
    array index ta preserve rekhe array element extruct korte chaile 

    array_slice($fruits,-3,-1,true);

*/


$foods = ['capcicum'=>50,'brinjal'=>40,2=>'mula 2','tomato'=>60,'cucumber'=>30]; // akhane 2=>'mula 2' part tate  offset hisebe 2 set korechi akhon ata index 2 diye access kora jabe

print_r(array_slice($foods,0,-1,true));


$foods = ['capcicum'=>50,'brinjal'=>40,'mula 2','tomato'=>60,'cucumber'=>30]; // mula 2 ta only index style value

print_r(array_slice($foods,0,-1,true));