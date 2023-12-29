<?php

/*
mt_rand(int 1st, int 2nd) diye random number generate kora jay



*/


$numbers = range(0,50);

$random = mt_rand(0,49); 

echo $numbers[$random],PHP_EOL;

// chaile akibar php script run korar somoy  aker odik random number print kora jay

$random = mt_rand(0,49); 

echo $numbers[$random],PHP_EOL;



/*

shuffle function original array element ke change kore return kore



*/
echo 'akhon shuffle() diye example deya holo',PHP_EOL;


$originalArray = [1, 2, 3, 4, 5];

// Shuffle the array
shuffle($originalArray);

// Output the shuffled array
print_r($originalArray);
