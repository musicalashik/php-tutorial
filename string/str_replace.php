<!DOCTYPE html>
<html>
<body>

<p>str_replace(
    array|string $search,
    array|string $replace,
    string|array $subject,
    int &$count = null
): string|array

/*
This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.

To replace text based on a pattern rather than a fixed string, use preg_replace().
*/

</P>

<h1>First Example</h1>
<?php
$x = "Hello {{name}} World! {{age}}   {{name}}";

$text = array('{{name}}'=>'ashik','{{age}}'=>'27');

echo str_replace(array_keys($text),array_values($text), $x);

echo "\n";

//print_r(array_keys($text));

//print_r(array_values($text));
?> 



<h1>Second Example</h1>
<?php
$x = "Hello {{name}} World! {{age}}   {{name}}";

$text = array('{{name}}'=>'ashik','{{age}}'=>'27');

echo str_replace(array_keys($text),$text, $x);

echo "\n";
?> 


</body>
</html>