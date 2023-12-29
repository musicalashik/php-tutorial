<?php

// splice diye array theke element delete kore new array bananu jay
// abar chaile je array theke kete ana hocche oikhane abar aksathe 
// array element add o kore deya jai


$fruits = array ('apple','banana','orange','plum','dates','mango');

$newFruits = array('jackfruit','tamarind','pineapple');

$someFruits = array_splice($fruits,-5,2);

echo "after cutting \$fruits array \n";

print_r($fruits);


echo "\nafter making \$someFruits array from cutting \$fruits array \n";

print_r($someFruits);



$fruits2 = array ('apple','banana','orange','plum','dates','mango');

$newFruits2 = array('jackfruit','tamarind','pineapple');

$someFruits2 = array_splice($fruits2,-5,2,$newFruits2);  // akhane 3rd parameter a $newFruits2 diye bujulam 
//je $fruits2 theke element delete howar pro atite new array gula insert o hoye jabe

print_r($fruits2);

print_r($someFruits2);




/*

array_splice original array ke modified kore 
kintu array_slice original array ke unmodified rakhe



*/