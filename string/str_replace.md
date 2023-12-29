# php str_replace() in depth tutorial

```php
str_replace(
    array|string $search,
    array|string $replace,
    string|array $subject,
    int &$count = null
): string|array
```

This function returns a string or an array with all occurrences of search in subject replaced with the given replace value.

To replace text based on a pattern rather than a fixed string, use preg_replace().

First Example

```php
<?php
$x = "Hello {{name}} World! {{age}}   {{name}}";

$text = array('{{name}}'=>'ashik','{{age}}'=>'27');

echo str_replace(array_keys($text),array_values($text), $x);

echo "\n";

//print_r(array_keys($text));

//print_r(array_values($text));
?>

 Second Example
<?php
$x = "Hello {{name}} World! {{age}}   {{name}}";

$text = array('{{name}}'=>'ashik','{{age}}'=>'27');

echo str_replace(array_keys($text),$text, $x);

echo "\n";
?>
```

array_keys($text) মানে $text অ্যারে থেকে array keys গুলির একটা ইনডেক্সড অ্যারে

array_values($text) মানে $text অ্যারে থেকে array values গুলির একটা ইনডেক্সড অ্যারে

সুতরাং str_replace(array_keys($text),array_values($text), $x) মানে হলো প্রথম প্যারামিটার array_keys($text) এর ইনডেক্সড অ্যারে থেকে
সার্চ প্যার্টান নিয়ে  ২য় প্যারামিটার array_values($text) এর ইনডেক্সড অ্যারের ভ্যালু গুলি কে রিপ্লেস করা। ৩য় প্যারামিটার সাবজেক্ট বা টার্গেট $x এর মাঝে প্রয়োগ করা।

সহজ ভাষায় বললে str_replace(এখানে string অথবা array, এখানে string অথবা array , এখানে string অথবা array);
১ম প্যারামিটার হলো search টেক্সট, ২য় প্যারামিটার হলো replace ৩য় প্যারামিটার হলো subject or target

## 2 Examples of potential str_replace() gotchas

```php
<?php
// Order of replacement
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';

// Processes \r\n's first so they aren't converted twice.
$newstr = str_replace($order, $replace, $str);

// Outputs F because A is replaced with B, then B is replaced with C, and so on...
// Finally E is replaced with F, because of left to right replacements.
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject);

echo "\n\n";
// Outputs: apearpearle pear
// For the same reason mentioned above
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;
?>
```

উপরের কোডে  $output  = str_replace($letters, $fruit, $text);
থেকে letters array থেকে
'a' র্বনটি  $text = 'a p' তে খুজে পেলো

তাই এটি এখন  replace হয়ে  'a p'  থেকে 
'apple p' এরকম হয়েগেছে।
এখন পরের array element 'p' কে  search করলো $text এর ভিতরে তারপর দেখলো apple শব্দটিতে ২টি P আছে তারপর একটি স্পেস আছে তারপরে আবার একটি p আছে।

আমরা জানি যে  $letter[1] 'p' =  $fruit[1] 'pear'
তাই  $text = 'a p'  প্রথমে 'apple p'  তারপর 'apearpear p' তে রিপ্লেস হয়ে গেছে
