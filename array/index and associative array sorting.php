<?php

$fruits = array('apple', 'f' => 'banana', 'plum', 'dates', 'mango', 'jackfruit');

$numbers = array(12, 23, 25, 65, 70);

print_r($fruits);

sort($fruits);

print_r($fruits);


for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "\n";
}

/*
 upore $fruits array ti sort korar age 'f' key ti preserve korechilo kintu
 sort() use korar por key ta fele diye index set kore diche
*/


$fruits = array('apple', 'f' => 'banana', 'plum', 'dates', 'mango', 'jackfruit');

asort($fruits);  // asort() function use korar karone 'f' key ta preserve koreche

print_r($fruits);


/*
  please point to be noted that jokhon associative array take asort kora hobe ati tokhon sort korbe thik e
  kintu for loop diye sort korle asort korar age je arra take for loop use korar karone je result chilo 
  setai hobe

  shudu foreach loop diye asort ar pore sort ar asol result ta asbe
*/
