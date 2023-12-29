<?php
/*

array_diff() a first parameter ar array value gula second parameter a check kore first parameter ar je value gula second parameter a milbe na
segula return korbe
*/


$numbers1 = [12,2,13,25,64,12,35,25,20];
$numbers2 = [52,41,23,12,32,41,25];

$fruits1 = ['a'=>'pineapple','b'=>"malta","c"=>'grapes','d'=>'malta', 'e'=>'mango'];
$fruits2 = ['a'=>'malta','b'=>'grapes','c'=>'banana', 'e'=>'mango' ,'d'=>'apple'];


$diff_result1 = array_diff($numbers1,$numbers2);

$diff_result2 = array_diff($numbers2,$numbers1);

echo "showing result from \$diff_result1 \n";
print_r($diff_result1);

echo "showing result from \$diff_result1 \n";
print_r($diff_result2);


echo "result showing from \$diff_result1 using array_diff_assoc() \n";

$diff_result1 = array_diff_assoc($numbers1,$numbers2); // atir result a $numbers1 array te thaka sob value unmatched hisebe print korbe
// karon holo atito index array so atite kono key nai r tai. array_diff_assoc() function ti arokom result dibe
print_r($diff_result1); 


echo "result showing from \$diff_fruits1 using array_diff_assoc() \n";

$diff_fruits1 = array_diff_assoc($fruits1,$fruits2);

print_r($diff_fruits1); 



echo "result showing from \$diff_fruits2 using array_diff_assoc() \n";

$diff_fruits2 = array_diff_assoc($fruits2,$fruits1);

print_r($diff_fruits2); 




/*

uporer 

$fruits1 = ['a'=>'pineapple','b'=>"malta","c"=>'grapes','d'=>'malta', 'e'=>'mango'];
$fruits2 = ['a'=>'malta','b'=>'grapes','c'=>'banana', 'e'=>'mango' ,'d'=>'apple'];


array duita te  key 'e' and value 'mango'  match thakay 

ai key value pair chara baki sob difference or mismatched hisebe

ai duita function ar result dekhaice `array_diff_assoc($fruits1,$fruits2);` and  `array_diff_assoc($fruits2,$fruits1);`





*/

?>