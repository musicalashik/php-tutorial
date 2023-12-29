
<?php
/*
array_walk($array,'callbackfunction',optional parameter);  
array_walk() দিয়ে অ্যারে তে থাকা প্রতিটা  এলিমেন্টের উপর বিভিন্ন অপারেশন চালানো যায় ইউজার ডিফাইন ফাংশন ব্যবহার করে।
যেমন $numbers = [1,2,3,4,5,6,7,8,9,10]; অ্যারে তে  নিজের বানানো ফাংশন প্রয়োগ করা যাবে।
আর যে ইউজার ডিফাইন ফাংশন বানাবো, সেটাতে প্যারামিটার হিসেবে  array value প্রথম প্যারামিটার হিসেবে 
array key দিতীয় প্যারামিটার হিসেবে আর সবশেষে optional প্যারামিটার নিতে পারি নিজরে প্রয়োজন মতো মনগড়া

বিঃদ্রঃ array_walk() দিয়ে যে ফাংশন ব্যবহার করা হবে সেটাতে কোন কিছু রির্টান করা যাবে না।

শুধুমাত্র echo print এসব করা যাবে অর্থাৎ array_walk($array,'callbackfunction',optional parameter); এখানে যে ফাংশন আছে 
ঐটাতে return ব্যবহার করে  কোন কিছু করা যাবে না।  রিটার্ন করতে হলে array_walk  এর পরিবর্তে array_map ব্যবহার করা লাগবে

*/


$numbers = [1,2,3,4,5,6,7,8,9,10];

 function square($n){

     echo $n ** 2 .",";
 }

array_walk($numbers,'square');
?>



<?php
/*
এখানে myfunction function এ প্রথম প্যারামামিটার $value  দ্বিতীয়টি  $key
আর  এটাই নিয়ম কলব্যাক ফাংশন হিসেবে যে ফাংশনটি ব্যবহার করা হয় সেটা প্রথম প্যারামামিটার হিসেবে $value  দ্বিতীয়  $key গ্রহন করতে পারবে
*/

function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
?>


<?php

/*
এখানে দেখানো হলো myfunction2($value,$key,$p) কলব্যাক ফাংশনটিতে $p হল অপশনাল প্যারামিটার এটিতে একের 
অধিক প্যারামিটার সেট ও আরগুমেন্ট রিসিভ করা যাবে।

অর্থাৎ প্রথম দুটি প্যারামিটার  এর পর পরে যত থাকবে সব সেগুলি অপশনাল

*/


function myfunction2($value,$key,$p)
{
echo "$key $p $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction2","has the value");
?>




<?php

/*

আমরা চাইলে array_walk() দিয়ে array এলিমেন্ট পরির্বতন করতে পারি 

শুধুমাত্র  callback function এর প্রথম parameter এ &value এরকম মানে address of `&` অপারেটর দিলে

*/



function myfunction3(&$value,$key)
{
$value="yellow";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction3");
print_r($a);
?>