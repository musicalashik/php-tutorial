It is also possible to access class properties using variables within strings using this syntax.

<?php
class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";
?>




Complex (curly) syntax
This isn't called complex because the syntax is complex, but because it allows for the use of complex expressions.

Any scalar variable, array element or object property with a string representation can be included via this syntax. The expression is written the same way as it would appear outside the string, and then wrapped in { and }. Since { can not be escaped, this syntax will only be recognised when the $ immediately follows the {. Use {\$ to get a literal {$. Some examples to make it clear:



<?php
// Show all errors
error_reporting(E_ALL);

$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}";

// Works, outputs: This is fantastic
echo "This is {$great}";

// Works
echo "This square is {$square->width}00 centimeters broad.";


// Works, quoted keys only work using the curly brace syntax
echo "This works: {$arr['key']}";


// Works
echo "This works: {$arr[4][3]}";

// This is wrong for the same reason as $foo[bar] is wrong  outside a string.
// In other words, it will still work, but only because PHP first looks for a
// constant named foo; an error of level E_NOTICE (undefined constant) will be
// thrown.
//echo "This is wrong: {$arr[foo][3]}";

// Works. When using multi-dimensional arrays, always use braces around arrays
// when inside of strings
echo "This works: {$arr['foo'][3]}";

// Works.
echo "This works: " . $arr['foo'][3];

echo "This works too: {$obj->values[3]->name}";

echo "This is the value of the var named $name: {${$name}}";

$ashik = 'my name';
function getName(){
    return 'ashik';
}

echo "This is the value of the var named by the return value of getName(): {${getName()}}";



echo "This is the value of the var named by the return value of \$object->getName(): {${$object->getName()}}";

// Won't work, outputs: This is the return value of getName(): {getName()}
echo "This is the return value of getName(): {getName()}";

// Won't work, outputs: C:\folder\{fantastic}.txt
echo "C:\folder\{$great}.txt";


// Works, outputs: C:\folder\fantastic.txt
echo "C:\\folder\\{$great}.txt";
?>