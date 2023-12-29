
<?php

/*
এই ফাংশনে একটি প্যারামিটার নেয় যেটিতে ASCII value যেমন  Decimal value, Octal value , Hex value প্রদান করলে 
এই ভ্যালুর সমান character return করবে
*/
//Return characters from different ASCII values:

echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
?>


<?php
/*
Definition and Usage
The ord() function returns the ASCII value of the first character of a string.
এই ফাংশন দিয়ে যেকোনো স্ট্রিং থেকে প্রথম ক্যারাক্টার টির ASCII value রিটার্ন করবে তবে decimal value টা

*/


// Return the ASCII value of "h":
echo ord("h")."<br>";  //output 104
echo ord("hello")."<br>"; //output 104





?>