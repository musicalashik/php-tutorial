
<?php
/*
array_map('callbackfunction',$array,optional parameter);  
array_map() দিয়ে অ্যারে তে থাকা প্রতিটা  এলিমেন্টের উপর বিভিন্ন অপারেশন চালানো যায়, ইউজার ডিফাইন ফাংশন ব্যবহার করে।
যেমন $numbers = [1,2,3,4,5,6,7,8,9,10]; অ্যারে তে  নিজের বানানো ফাংশন প্রয়োগ করা যাবে।
আর যে ইউজার ডিফাইন ফাংশন বানাবো, সেটাতে প্যারামিটার হিসেবে  array value প্রথম প্যারামিটার হিসেবে 
array key দিতীয় প্যারামিটার হিসেবে আর সবশেষে optional প্যারামিটার নিতে পারি নিজরে প্রয়োজন মতো মনগড়া

বিঃদ্রঃ array_map() দিয়ে যে ফাংশন ব্যবহার করা হবে সেটাতে রির্টান করা যাবে।

array_map() প্রথম প্যারামিটার  'functionName' তারপর  এক বা একাধিক প্যারামিটার হিসেবে array $a, পাস করা যাবে।



*/


$numbers = [1,2,3,4,5,6,7,8,9,10];

 function square($n){

     return $n ** 2 .",";
 }

$new_array = array_map('square',$numbers,);

print_r($new_array);


?>



<?php
/*
এখানে myfunction function এ প্রথম প্যারামামিটার $value  দ্বিতীয়টি  $key
আর  এটাই নিয়ম কলব্যাক ফাংশন হিসেবে যে ফাংশনটি ব্যবহার করা হয় সেটা প্রথম প্যারামামিটার হিসেবে $value  দ্বিতীয়  $key গ্রহন করতে পারবে
*/

function myfunction($value)
{
   return "The value $value";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
$new_array2 = array_map("myfunction",$a);

print_r($new_array2);


?>







<?php

/*
  নিচে array_map("myfunction2",$a1,$a2) তে  $a1 এবং $a2 দুইটি প্যারামিটার হিসেবে দুইটি অ্যারে গ্রহন করা হয়েছে।



*/
function myfunction2($a1,$a2)
{
if ($a1===$a2)
  {
  return "same";
  }
return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");
print_r(array_map("myfunction2",$a1,$a2));
?>



<?php

 $foods = ['Fruit'=>'mango','Vegetable'=>'tomato'];

 function myFunction3($value){

    $value = strtoupper($value);
    return $value;
 }

 print_r(array_map('myFunction3',$foods));
 ?>


<?php

$foods = ['Fruit'=>'mango','Vegetable'=>'tomato','fruit'=>'banana'];
$foods2 = ['fruit'=>'mango','Vegetable'=>'tomato','fruit'=>'pineaple'];
function myFunction4($value){

   $value = strtoupper($value);
   return $value;
}

print_r(array_map('myFunction4',$foods));
?>
