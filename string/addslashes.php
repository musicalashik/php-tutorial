<?php

/*
Definition and Usage
The addslashes() function returns a string with backslashes in front of predefined characters.

The predefined characters are:

single quote (')
double quote (")
backslash (\)
NULL


Syntax
addslashes(string);
*/


$str = "government of the People's Republic of bangladesh";
$str2 = 'the double quoted string like "and"  ';

echo addslashes($str) . " this tagline is the header part of nid.<br>";

echo addslashes($str2);


?>
