<?php

$fruits = ['banana','mango','pineaple','jackfruit','apple'];

$random = array('a'=>12,'b'=>45,'c'=>34,'d'=>22,'e'=>77,'f'=>31,12=>78,'g'=>87);

// $newFruits1 = array_slice($fruits,1,2);

// $newFruits2 = array_slice($fruits,2);

// $newFruits = array_merge($newFruits1,$newFruits2);

// echo "\n after merger with array_merge function\n";

// print_r($newFruits1);

// print_r($newFruits2);

// print_r($newFruits);

// echo "\n after merger with plus sign\n";

// $newFruits = $newFruits1 + $newFruits2;

// print_r($newFruits);


$r1 = array_slice($random,0,2,true);

// $r2 = array_slice($random,4,true); // ati korle 12=>78 and 'g'=87 duti bad pore kintu
$r2 = array_slice($random,4,null,true);  //  akhane 12=>78 ai 12 offset tao presever korbe
$r3 = array('j'=> 45,'k'=>12);

$randomDataCorrectWay = $r1 + $r2 + $r3;
print_r($randomDataCorrectWay);


?>