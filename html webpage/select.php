
<?php
function form_value($inputField)
{

    if (isset($_REQUEST[$inputField]) && !empty($_REQUEST[$inputField])) {

        if (is_array($_REQUEST[$inputField])) {

            $finalOutput = "";

            if (!empty($_REQUEST[$inputField][0])) {

                $finalOutput .= "<h2>First Name: " . $_REQUEST[$inputField][0] . "</h2> \n";
            }
            if (!empty($_REQUEST[$inputField][1])) {
                $finalOutput .= "<h2>Last Name:" . $_REQUEST[$inputField][1] . "</h2>";
            }
            echo  $finalOutput;
        }
    }
}

?>


