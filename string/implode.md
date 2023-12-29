# Definition and Usage of php implode function

--------------------

The implode() function returns a string from the elements of an array.

**Note:** The implode() function accept its parameters in either order. However, for consistency with [explode()](https://www.w3schools.com/php/func_string_explode.asp), you should use the documented order of arguments.

**Note:** The separator parameter of implode() is optional. However, it is recommended to always use two parameters for backwards compatibility.

**Note:** This function is binary-safe.

* * * *

Syntax
------

implode(*separator,array*)

### Example

Separate the array elements with different characters:

```php

<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."<br>";
echo implode("+",$arr)."<br>";
echo implode("-",$arr)."<br>";
echo implode("X",$arr);
?>

```
