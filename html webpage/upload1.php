<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $target_dir = 'uploaded/';
    $target_file = $target_dir . basename($_FILES['myfile']['name']); // basename extruct filename with extension only

    if (file_exists($target_file)) {

        echo "your file was not uploaded!";
    } else {

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $target_file)) {
            echo "your file " . basename($_FILES['myfile']['name']) . "has been uploaded successfully";
        } else {
            echo "your file was not uploade successfully";
        }
    }
}
