<?php

$numbers = range(2,30); // এখানে ৩য় প্যারামিটার  এ স্টেপিং উল্লেখ করিনি তাই ডিফল্টভাবে ১ করে বাড়বে 2 - 30 পর্যন্ত
print_r($numbers);

$numbers = range(2,30,3); // এখানে স্টেপিং 3
print_r($numbers);



// range function টি নিজে কি করে বানানো যায় তা দেখানো হলো।
function myRange($start,$end,$default=1){

    $rangeArray = [];
    for($start; $start < $end; $start += $default){

        $rangeArray[] = $start;
    }

    return $rangeArray;
}


$numbers = myRange(2,30,3);
print_r($numbers);