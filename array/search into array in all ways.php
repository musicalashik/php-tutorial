<?php

 $fruits = array('a'=> 'banana','b'=>'mango','c'=>'apple','d'=>'pineaples');
 $numbers = array(5,6,'12',5,40,25,35,40,80);


 if(in_array(12,$numbers)){
    echo "12 is found from first condition\n";
 }


 // akhon in_array function ar 3rd parameter hisebe true pass korbo jate atar string mode default false theke true hoye jay
 // jate kore jokhon php check kore pabe je in_array() te first argument a jeta pass koreche oi value je data type and je array te khujlo and pailo 
 // se array data type exact milese tokhon ata khuje pabe



 if(in_array(12,$numbers,true)){
   echo "12 is found from second condition\n";
  }

 // uporer  in_array(12,$numbers,true) ai line a 3rd argument ta true pass korate ati value sathe data type tao check korbe

 // $numbers array te  value '12' ache kintu in_array(12,$numbers,true) te pass korchi integer 12 ata milbe na tai
 // match dekhabe na



$offset = array_search(12,$numbers); // array search 12 value tike  $numbers array theke search kore atar first matched index number ta return korbe

echo $offset, PHP_EOL;



$offset2 = array_search(12,$numbers,true); // akhon abar 3rd argument true pass kore bujanu holo strict mode true mane akhon value sathe data type check kora hobe

echo $offset2, PHP_EOL;  // akhane kichui show korbena karon array_search(12,$numbers,true) ati te true pass korar jonno $numbers array te string  '12' ta mismatched hobe

// tai ati null return korbe ai jonne echo $offset2,PHP_EOL ta kono result return korbena




if(key_exists('b',$fruits)){
   echo "key is exists";
}


// key_exists function ti key exists ache kina check kore true or false return kore

