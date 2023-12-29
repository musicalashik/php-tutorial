<?php

$test = 0;

if(isset($test)){

    echo "it set the value\n";
}

else{

    echo "it  not set value\n";

}

if(empty($test)){

    echo "it is empty\n";
}
else{
    echo "it is not empty\n";
}


/*

when value set 0 it say empty but when it check with isset() it say set

when empty string set '' it shown set but empty

so we check more accurate way  

*/



if(isset($test) && (is_numeric($test) || $test != '')){


    echo ' it is set and not empty value';

}

else {
    echo "it is empty or not set";
}