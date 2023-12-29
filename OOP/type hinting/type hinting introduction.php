<?php
// declare(strict_types=1);
function sum1($number)
{

    echo $number + 8;
}

// sum1("simple string pass"); ai line execute hole line number 3 te error show korbe.
// tar mane atir madhome function ar vitore duke tarpor error dora porche


function sum2(int $number)
{
    echo $number + 9;
}

sum2("5"); // ati kaj korbe jodio 5 number ti "5" likhe deyar karone string hoye geche but ati kaj korbe
// kintu strict mode on korle ata fatal error dekhabe


function checkname(array $names)
{
    foreach ($names as $name) {
        echo $name . " ";
    }
}

$names =  "ashik ahmed";
$names2 =  ["ashik ahmed"];
checkname($names2);
checkname(str_split($names));
checkname(explode(" ",$names));
?>