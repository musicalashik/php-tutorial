<?php
/*
array_reduce(array $array, callable $callback, mixed $initial = null): mixed

ai syntax a `: mixed` mane holo jekono data type value return korte parbe

`callable $callback` mane aikhane callback function pass korte hobe

`array $array` mane array data structure dite hobe ati porjaye
*/


$array = [1, 2, 3, 4, 5];

// This callback function sums two numbers
$sumCallback = function ($carry, $item) {
    return $carry + $item;
};

$result = array_reduce($array, $sumCallback, 2); // 3rd argument 2 dichi mane atike initial value dorbe

echo $result,PHP_EOL; // Output: 17 (2 + 1 + 2 + 3 + 4 + 5)


$result2 = array_reduce($array, $sumCallback); // akhane initial value deya hoyni tai ati 0 dore nibe

echo $result2; // Output: 15 ( 1 + 2 + 3 + 4 + 5)



/*
`array_reduce($array, $sumCallback, 2);` যখন কল হবে তখন

$array থেকে একটি ভ্যালু নিবে তারপর ‘2‘ কে প্রাথমিক ভ্যালু হিসেবে নিবে
তারপর `return $carry + $item` তে $carry == 2 বসে যাবে আর অ্যারে থেকে যে ইলিমেন্ট নিলো তা $item এর স্থলে বসে যাবে।


তারপর পরবর্তী কলব্যাবক ফাংশনের কলে  $carray parameter এ এর আগের রেজাল্টা বসে যাবে আর $item এর স্থলে অ্যারের পরবর্তী ইলিমেন্ট বসবে 

এরকম করেই সবগুলি অ্যারে ইলিমেন্ট অবশিষ্ট থাকা পর্যন্ত চলবে।

*/


// Here Checking if All Elements Meet a Condition Example


$array = [10, 20, 30, 40];

// Check if all numbers in the array are greater than 5
$conditionCallback = function ($carry, $item) {
    return $carry && ($item > 5);
};

$result = array_reduce($array, $conditionCallback, true);

var_dump($result); // Output: bool(true)



//  here Sum of Squares example


$array = [1, 2, 3, 4];

// Calculate the sum of squares of numbers in the array
$squareSumCallback = function ($carry, $item) {
    return $carry + ($item * $item);
};

$result = array_reduce($array, $squareSumCallback, 0);

echo $result; // Output: 30 (1 + 2^2 + 3^2 + 4^2)
