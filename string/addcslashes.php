<?php

/*
Definition and Usage
The addcslashes() function returns a string with backslashes in front of the specified characters.

Note: The addcslashes() function is case-sensitive.

Note: Be careful using addcslashes() on 0 (NULL), r (carriage return), n (newline), f (form feed), t (tab) and v (vertical tab). In PHP, \0, \r, \n, \t, \f and \v are predefined escape sequences.



Syntax
addcslashes(string,characters)

The addcslashes() function টি ২টি প্যারামিটার নেয় প্রথমটাতে ‍ ‍স্ট্রিং ২য়টাতে স্পেসিফিক ক্যারাক্টার 

২য় প্যারামিটার এ যতগুলা র্বন চিহ্ন উল্লেখ করে দেয়া হবে

সে সবগুলি ই যদি  প্রথম প্যারামিটারে উল্লেখিত স্ট্রিংয়ে পায় তাহলে  এগুলার সামনে ব্যাকস্লেশ `\`
আউটপুট দেখাবে

নিচে উদাহরণ দিয়ে বুঝানো হলো
*/


 
$str = addcslashes("Hello World!","W");

$str2 = addcslashes("<div></div>","<>");

$str3 = addcslashes('<?php $test = "hello"','=<?$');


echo $str, PHP_EOL; 

echo($str2), PHP_EOL; 

echo($str3); 



?>
