<?php


 $person = ['fname'=>'ashik','lname'=>'ahmed','subject'=>'marketing'];

 $new_person = $person; // deep copy or copy by value 

 $new_person['lname'] = 'mia';

 echo "from \$person array\n";

 print_r($person);

 echo "from \$new_person array\n";

 print_r($new_person);






$student = ['fname'=>'mostafa','lname'=>'ahmed','subject'=>'marketing'];


$new_student = &$student; // copy by reference or memory address or shallow copy

$new_student['fname'] = 'hasan';


echo "\n\nfrom \$student array\n";

 print_r($student);

 echo "from \$new_student array\n";

 print_r($new_student);






 /*
 upore $new_student = &$student;   ata mulloto call by reference ba shallow copy 


 ai rokom way te copy korle value cope na hoye oi mane `$student` atar memory address copy hoye jai
 tokhon ata jei variable a store kora holo oi new variable ar majhe kichu change korleo 
 main variable or array value change hoye jabe



 */

