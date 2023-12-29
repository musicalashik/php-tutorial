<?php
/*
convert_uuencode($str); এটি একটি স্ট্রিংকে পিএইচপি প্রিডিফাইন কি দিয়ে এনকোড করে
আর এনকোড করা স্ট্রিং কে  convert_uudecode($encodeString); ডিকোড করে আগের রুপে 
রিটার্ন করে।
*/
?>


Encode a string and then decode it:

<?php
$str = "Hello world!";
// Encode the string
$encodeString = convert_uuencode($str);
echo $encodeString . "<br>";

// Decode the string
$decodeString = convert_uudecode($encodeString);
echo $decodeString;
?>

