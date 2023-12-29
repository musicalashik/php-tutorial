<!DOCTYPE html> 
<html> 

<head> 
	<title> 
		Move a file into a different 
		folder on the server 
	</title> 
</head> 

<body> 
	<form action="upload2.php" method="post"
			enctype="multipart/form-data"> 
            <label for="file name" >File Name</label><br>
            <input type="text" name="fileName" id="file name" required><br>
		
		<input type="file" name="myfile" id="file"> 
		
		<br><br> 
		
		<input type="submit" name="submit" value="Submit"> 
	</form> 
</body> 

</html>			