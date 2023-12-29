# string to array and array to string conversion

** amra jani array data structure ti database a sorasori store kora jayna tai atike string a convert kore nite hoy

** abar string theke array kore php te nana rokom operation kora hoy

** json_encode($arrayName); diye array to json a conver kora hoy

** json_decode($json_encodededData,true); diye json data ti ke array te convert kora hoy

```php
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




$json_decoded = json_decode($json_encoded,true);

print_r($json_decoded); 


$serialize_data = serialize($students);

echo "\nserialize result \n";

echo $serialize_data ;

echo "\nunserialize data result \n";
print_r(unserialize($serialize_data));



?>
```



