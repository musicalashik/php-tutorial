<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $target_dir = 'uploaded/';

    $file_name = $_POST['fileName'];

    $tmp_name = $_FILES['myfile']['name'];  // actual filename when it was uploaded  

    $typelist = ['image/jpeg','image/png'];

    $uploaded_file_extention = substr($tmp_name, strpos($tmp_name,'.' ) ) ;  // strpos find dot inside the $tmp_name string and return first matched index
    // substr return string from $tmp_name using index which is extructed by strpos($tmp_name,'.' )


    $target_file = $target_dir . $file_name .  $uploaded_file_extention; // here complete file name 

    if (file_exists($target_file)) {

        echo "your file was not uploaded!";
    } 
    
    // in_array function return true if first parameter value exists into second parameter array
    else if(in_array($_FILES['myfile']['type'],$typelist ) == false){
        echo $_FILES['myfile']['type']. ' file type not allowed';  
    }else {

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target_file)) {
            echo "your file " . $_FILES['myfile']['type'] . "and Size " .$_FILES['myfile']['size']. " has been uploaded successfully";
        } else {
            echo "your file was not uploade successfully";
        }
    }
}
