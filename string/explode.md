# php explode function

```php
<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str,3));
?> 
```

উপরের কোডে explode(" ",$str,3) মানে হলো এটি স্পেস কে ভিত্তি হিসেবে নিয়ে ৩ টি ওয়ার্ড বানাবে
যেহেতু এটিতে legnth 3 দেয়া আছে তাই  ইনডেক্স[0] তে Hello  ইনডেক্স[1] তে world. ইনডেক্স[2] তে It's a beautiful day.

Example
Input:
explode(" ", "Hello, what is your name?")

Output:
Array

(
    [0] => Hello
    [1] => What
    [2] => is
    [3] => your
    [4] => name?
)

Input:
explode(" ", "Hello, what is your name?", 3)

Output:
Array

(
    [0] => Hello,
    [1] => What
    [2] => is your name?
)

Input:
explode(" ", "Hello, what is your name?", -1)

Output:
Array

(
    [0] => Hello,
    [1] => What
    [2] => is
    [2] => your
)

The following example illustrates the working of the explode() function to convert string to array in PHP.

```php

<?php

    // define a string

    $my_string = 'red, green, blue';

    // passing "," as the delimiter

    $my_array1 = explode(",", $my_string);

    // print the array

    echo "The converted Sarray is: <br>";

    print_r($my_array1); // red, green, blue

?>
```
