<!DOCTYPE html>
<html>

<head>
    <title>
        multi upload form
    </title>
</head>

<body>
    <form action="multi_upload.php" method="post" enctype="multipart/form-data">
        <!-- <label for="fname">First Name</label><br>
        <input type="text" name="fname" id="fname" required><br>

        <label for="lname">Last Name</label><br>
        <input type="text" name="lname" id="lname" required><br>
        <br> -->
        <label for="photo">Upload Photo</label><br>
        <input name="myphoto[]" type="file" multiple="multiple" />

        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>