<?php
include_once('select.php');

$fruits = ['mango','pineapple','banana','graps'];

function displayOptions($options)
{

    foreach($options as $option){
        printf("<option value='%s'>%s</option>\n",strtolower($option) ,ucwords($option) );

    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>
        form with php
    </title>
    <link rel="stylesheet" href="normalize.css">
</head>

<body>

    <script>
        // prevent resubmit issue when user refresh the page
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <?php form_value('name'); ?>



    <h2>HTML Forms</h2>

    <form action="/form.php" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="name[]" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="name[]" value="Doe"><br><br>

        <label for="occupation">Occupation: </label>
        <input type="text" name="occupation" id="occupation">

        <br>
        <br>
        
        <select name="foods[]" id="foods" multiple>
            <option value='' disabled>select foods</option>
            <?php displayOptions($fruits);?>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>



</body>

</html>