<?php
$ashik = 'my name';
function getName(){
    return 'ashik';
}

echo "This is the value of the var named by the return value of getName(): {${getName()}}";

echo "This is the value of the var named by the return value of getName(): {getName()}";



/*
upore {${getName()}}  dollar sign ar pore curly braces thakle 

php parser ta curly braces ar vitor ja thake ta parse korar try kore 

sejonno  getName() function ta run hoye  return hoye ashik word ti chole aslo tarpor ati akhon {$ashik} arokom hoye geche

tai {$ashik} ar result my name aslo

atake reflection o bole onek language a


*/

?>



<?php


// another example of this concept
class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";
?>