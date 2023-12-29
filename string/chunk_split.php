<?php

/*
The chunk_split() function splits a string into a series of smaller parts.

Note: This function does not alter the original string.

Syntax
chunk_split(string,length,end)  

end এর জায়গায় যেকোনো delimiter,  length এর জায়গায় কতো character নিয়ে split হবে সেটা

*/
?>

<?php
$str = "Hello world!";
echo chunk_split($str,1,".");
echo PHP_EOL;
echo PHP_EOL;

echo chunk_split($str,2,".");

echo PHP_EOL;
echo PHP_EOL;

echo chunk_split($str,1,"/");


echo PHP_EOL;
echo PHP_EOL;

echo chunk_split($str,3,"{}");
?>

