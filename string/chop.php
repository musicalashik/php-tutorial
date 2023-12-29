<?php
/*
The chop() function removes whitespaces or other predefined characters from the right end of a string.
অর্থাৎ chop() function ‍স্ট্রিং থেকে whitespaces এবং অন্যান্য predefined characters যেমন escap character like \n \t
*/
$str = "Hello World!\n\n";
echo $str;
echo chop($str);
echo $str;

/*
উপরের $str = "Hello World!\n\n"; থেকে \n\n মুছে আউটপুট দেখালো
*/
?>


