<?php
$names = [];

$names['first name'] = "ashik";
$names['last name'] = "mia";

echo $names['first name'];

?>

# another example 

<?php


$foods = ['vegetables'=>['carrot','brinjal','capsicum'], 'fruits'=>['mango','jackfruit','banana']];


echo $foods['fruits'][0];


?>


<?php


$employe = ['manager'=>['junior'=>'hridoy','senior'=>'ashik'], 'seller'=>['junior'=>'tahsan','senior'=>'mahmudul']];


echo $employe['manager']['senior'];


?>