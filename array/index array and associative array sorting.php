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


echo "number array ke asort() function diye associative array te sort korle  ati print_r korle sort dekhabe kintu for loop diye print korle 

sort dekhabe na. tai amra foreach loop diye korbo jate ati sort howa result show kore \n";


$numbers = array(12, 2, 5, 1, 23, 25, 65, 70);

asort($numbers);  

print_r($numbers);
echo '------------------',PHP_EOL;

$count = count($numbers);

for($i = 0 ;$count > $i; $i++){


  echo $numbers[$i] . "\n";

}
echo "\n-----------------\n";
foreach($numbers as $number){

  echo "$number \n";

}



/*

সর্টিং করলে মূলত যেটা হয় সেটা হলো ভ্যালু গুলি সাজানো হয় কোন একটা বিষয়কে ভিত্তি করে।
যেমন র্সট যদি হয় By Name তাহলে যে ভ্যালুর বর্নতে A b c এরকম আছে সেখান থেকে a তারপর b তারপর c এরকম হবে।

উপরে ইনডেক্স অ্যারে তে asort ফাংশন ব্যবহার করাতে এটি সর্ট হয়েছে ঠিকই কিন্তু যেহেতু asort মূল অ্যারে কে র্সট করার সময় key গুলিকে সংরক্ষন করে তাই 12 এর ইনডেক্স 0 হয়ে আছে 

যেটা মূল অ্যারেতেও ছিল।  সেজন্য for loop দিয়ে প্রিন্ট করার পরেও দেখা যায় সর্ট করার আগে মূল অ্যারের মত রেজাল্ট আসে  
এটি foreach loop দিয়ে করলেই ঠিক হয়।


$numbers = array(12, 2, 5, 1, 23, 25, 65, 70);

asort($numbers);  



*/