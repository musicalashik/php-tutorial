<?php


$students = [
    'fname' => 'ashik',
    'lname' => 'ahmed',
    'age' => '26',
    'subject' => 'marketing',
    'choice_list'=>['bangla','english','math']
];


print_r($students) ."\n";

echo "json_encode result \n";

$json_encoded = json_encode($students);
printf("%s" ,$json_encoded);

echo "\njson_decode as associative array result \n";


/*
$json_decoded = json_decode($json_encoded);

print_r($json_decoded);     jodi arokom kore json theke array korte chai tahole php json ke std class a convert kore felbe

kintu amra jodi chai class or object hisebe use na kore sorasori associative array banabo tahole

amra    $json_encoded = json_encode($students,true);  arkomm kore json_decode function a second parameter a true pass korbo jate ati associative array hoye jai

*/

$json_decoded = json_decode($json_encoded,true);

print_r($json_decoded); 


$serialize_data = serialize($students);

echo "\nserialize result \n";

echo $serialize_data ;

echo "\nunserialize data result \n";
print_r(unserialize($serialize_data));



?>