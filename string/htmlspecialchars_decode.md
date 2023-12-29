# Definition and Usage of php htmlspecialchars_decode() function

--------------------

The htmlspecialchars\_decode() function converts some predefined HTML entities to characters.

HTML entities that will be decoded are:

-   &amp; becomes & (ampersand)
-   &quot; becomes " (double quote)
-   &#039; becomes ' (single quote)
-   &lt; becomes < (less than)
-   &gt; becomes > (greater than)

The htmlspecialchars\_decode() function is the opposite of [htmlspecialchars()](https://www.w3schools.com/php/func_string_htmlspecialchars.asp).

* * * *

Syntax
------

htmlspecialchars\_decode(*string,flags*)

Parameter Values
----------------

| Parameter | Description |
| --- |  --- |
| *string* | Required. Specifies the string to decode |
| *flags* | Optional. Specifies how to handle quotes and which document type to use.The available quote styles are:-   ENT\_COMPAT - Default. Decodes only double quotes-   ENT\_QUOTES - Decodes double and single quotes-   ENT\_NOQUOTES - Does not decode any quotesAdditional flags for specifying the used doctype:-   ENT\_HTML401 - Default. Handle code as HTML 4.01-   ENT\_HTML5 - Handle code as HTML 5-   ENT\_XML1 - Handle code as XML 1-   ENT\_XHTML - Handle code as XHTML |

## Example1

Convert the predefined HTML entities "&lt;" (less than) and "&gt;" (greater than) to characters:

```php

<?php
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars\_decode($str);
?>
```

The browser output of the code above will be:

This is some **bold** text.