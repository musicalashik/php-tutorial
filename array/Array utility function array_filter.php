<?php

/*

array_filter($array,'callback Function')

array_filter ar callback function a je condition diye return kora hoy ati shudu 
original array theke matched element niye new array return kore

*/

function myFunction($value){


    return $value[0] == 's'; // akhane $value hisebe protita array element key catch korbe 
    //and string ke jeheto array hisebe use kora jay taito $value[0] expression ti $person[] theke  match korbe  `[1] => sadik` ati


}

$persons = ['ashik','sadik','hridoy','Sadik'];

$result = array_filter($persons,'myFunction');

print_r($result) ;

