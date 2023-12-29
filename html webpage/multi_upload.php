<?php

if( isset($_FILES['myphoto']) && is_array($_FILES['myphoto']['name']) ){
  
    $allowed_types = ['image/jpeg','image/jpg','image/png']; // make array of allowed file extension for later multiple upload file type checking
    $target_source = "uploaded/";
    $total_count = count($_FILES['myphoto']['name']);
    for($i = 0;$total_count > $i; $i++){

        if(in_array( $_FILES['myphoto']['type'][$i], $allowed_types) ){  // here check file type 

            move_uploaded_file($_FILES['myphoto']['tmp_name'][$i] , $target_source. $_FILES['myphoto']['name'][$i] ); 
            echo "the file ".$_FILES['myphoto']['name'][$i] ."uploaded successfully";
        }
        else{
            echo "Sorry you uploaded wrong file type\n";
        }
    }
}

?>