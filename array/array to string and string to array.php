<?php

 
// here string to array conversion based on delimiter comma
 $students = explode (',','ashik, kabir, sabbir');

print_r($students) ;

?>

another example

<?php

 $fruits = "mango - banana -pineaple";

 $new_fruits = explode('-',$fruits);

  print_r($new_fruits);
 ?>

 here i show array to string conversion and set delimiter command

 <?php

   $fruits = ['jackfruit','banana'];

   $string = implode(',',$fruits);

   echo $string;
   ?>