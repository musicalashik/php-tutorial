# htmlentities function to encode html tag syntax to entity

### Example[Get your own PHP Server](https://www.w3schools.com/php/php_server.asp "W3Schools Spaces")

Convert some characters to HTML entities:

```php
<?php
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
?>
```

The HTML output of the code above will be (View Source):

&lt;a href=&quot;https://www.w3schools.com&quot;&gt;Go to w3schools.com&lt;/a&gt;

The browser output of the code above will be:

<a href\="https://www.w3schools.com"\>Go to w3schools.com</a\>


Definition and Usage
--------------------

The htmlentities() function converts characters to HTML entities.

**Tip:** To convert HTML entities back to characters, use the [html\_entity\_decode()](https://www.w3schools.com/php/func_string_html_entity_decode.asp) function.

**Tip:** Use the [get\_html\_translation\_table()](https://www.w3schools.com/php/func_string_get_html_translation_table.asp) function to return the translation table used by htmlentities().

* * * *

Syntax
------

htmlentities(*string,flags,character-set,double\_encode*)

Parameter Values
----------------

| Parameter | Description |
| --- |  --- |
| *string* | Required. Specifies the string to convert |
| *flags* | Optional. Specifies how to handle quotes, invalid encoding and the used document type.The available quote styles are:-   ENT\_COMPAT - Default. Encodes only double quotes-   ENT\_QUOTES - Encodes double and single quotes-   ENT\_NOQUOTES - Does not encode any quotesInvalid encoding:-   ENT\_IGNORE - Ignores invalid encoding instead of having the function return an empty string. Should be avoided, as it may have security implications.-   ENT\_SUBSTITUTE - Replaces invalid encoding for a specified character set with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD; instead of returning an empty string.-   ENT\_DISALLOWED - Replaces code points that are invalid in the specified doctype with a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;Additional flags for specifying the used doctype:-   ENT\_HTML401 - Default. Handle code as HTML 4.01-   ENT\_HTML5 - Handle code as HTML 5-   ENT\_XML1 - Handle code as XML 1-   ENT\_XHTML - Handle code as XHTML |
| *character-set* | Optional. A string that specifies which character-set to use.Allowed values are:-   UTF-8 - Default. ASCII compatible multi-byte 8-bit Unicode-   ISO-8859-1 - Western European-   ISO-8859-15 - Western European (adds the Euro sign + French and Finnish letters missing in ISO-8859-1)-   cp866 - DOS-specific Cyrillic charset-   cp1251 - Windows-specific Cyrillic charset-   cp1252 - Windows specific charset for Western European-   KOI8-R - Russian-   BIG5 - Traditional Chinese, mainly used in Taiwan-   GB2312 - Simplified Chinese, national standard character set-   BIG5-HKSCS - Big5 with Hong Kong extensions-   Shift\_JIS - Japanese-   EUC-JP - Japanese-   MacRoman - Character-set that was used by Mac OS**Note:** Unrecognized character-sets will be ignored and replaced by ISO-8859-1 in versions prior to PHP 5.4. As of PHP 5.4, it will be ignored an replaced by UTF-8. |
| *double\_encode* | Optional. A boolean value that specifies whether to encode existing html entities or not.-   TRUE - Default. Will convert everything-   FALSE - Will not encode existing html entities |

### Example

Convert some characters to HTML entities:

```php
<?php
$str = "Albert Einstein said: 'E=MC²'";
echo htmlentities($str, ENT\_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlentities($str, ENT\_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlentities($str, ENT\_NOQUOTES); // Does not convert any quotes
?>
```

The HTML output of the code above will be (View Source):

Albert Einstein said: 'E=MC&sup2;'<br\>
Albert Einstein said: &#039;E=MC&sup2;&#039;<br\>
Albert Einstein said: 'E=MC&sup2;'

The browser output of the code above will be:

Albert Einstein said: 'E=MC²'
Albert Einstein said: 'E=MC²'
Albert Einstein said: 'E=MC²'


### Example

Convert some characters to HTML entities using the Western European character-set:

```php
<?php
$str = "My name is Øyvind Åsane. I'm Norwegian.";
echo htmlentities($str, ENT\_QUOTES, "UTF-8"); // Will only convert double quotes (not single quotes), and uses the character-set Western European
?>
```

The HTML output of the code above will be (View Source):

<!DOCTYPE html\>
<html\>
<body\>
My name is &Oslash;yvind &Aring;sane. I&#039;m Norwegian.
</body\>
</html\>

The browser output of the code above will be:

My name is Øyvind Åsane. I'm Norwegian.
