<?php
/*
Definition and Usage
The html_entity_decode() function converts HTML entities to characters.

The html_entity_decode() function is the opposite of htmlentities().

Syntax
html_entity_decode(string,flags,character-set)
*/



$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);

?>