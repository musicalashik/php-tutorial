<?php

 /*

array_intersect() ar rules holo duita parameter ar value compare korbe 

tarpor 1st parameter ar value gula second parameter a check korbe 

tarpor je value gula match korbe sei gula return korbe shudu matro first parameter theke agular index soho return hobe, 

arekti important concept holo first parameter a 12 onekbar thake and second paramter a ati akbar tahole first parameter a jotobar ache totota value oi index soho first parameter theke return korbe


 */


 $numbers1 = [12,41,13,25,64,12,35,25,20];
 $numbers2 = [52,41,23,12,32,41,25];

 $fruits1 = ['a'=>'pineapple','b'=>"malta","c"=>'grapes','d'=>'malta'];
 $fruits2 = ['a'=>'malta','b'=>'grapes','c'=>'banana','d'=>'apple'];



 $numbers_result1 = array_intersect($numbers2,$numbers1);  // result asbe 12 , 25
 $numbers_result2 = array_intersect($numbers1,$numbers2);  // result asbe 12,25 12, 25

 $fruits_result1 = array_intersect($fruits2,$fruits1);
 $fruits_result2 = array_intersect($fruits1,$fruits2);



echo "result from \$numbers_result1",PHP_EOL;

print_r($numbers_result1);


echo "result from \$numbers_result2",PHP_EOL;
print_r($numbers_result2);




echo "result from \$fruits_result1",PHP_EOL;

print_r($fruits_result1); // array_intersect value compare kore kintu key jai howk value milbe first array thekei one or multi value return korbe


echo "result from \$fruits_result2",PHP_EOL;

print_r($fruits_result2); // array_intersect value compare kore kintu key jai howk value milbe first array thekei one or multi value return korbe



 /*

array_intersect($numbers2,$numbers1); akhane 1st parameter a numbers2 te  `12` akta `25` akta and 
2nd parameter numbers1 a  value `12`, `25` beshi ache kintu ar result  12 25 return koreche first parameter theke index soho

jeheto first parameter a akta 12 ar akta 25 ache tai r array_intersect() function match value return kore kintu first parameter theke atai niyom


 */



 echo "showing result using  array_intersect_assoc \n";


 $numbers_result1 = array_intersect_assoc($numbers2,$numbers1); 
 $numbers_result2 = array_intersect_assoc($numbers1,$numbers2);  

print_r( $numbers_result1); // 41 dekhabe karon  karon `array_intersect_assoc()` key value pair a match kore jeheto `41` value ti duti array te index 1 a ache
// tai key value hisebe 41 value ti duti array tei mill ache



print_r( $numbers_result2); 



 $fruits_result1 = array_intersect_assoc($fruits2,$fruits1);
 $fruits_result2 = array_intersect_assoc($fruits1,$fruits2);






 