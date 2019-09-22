<?php
include "dbconnect.php";
if(isset($_POST["submit"])){
	$email=$_POST["email"];
$allow = array("");
$temp = explode(".", $_FILES["pdf_file"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["pdf_file"]["name"];
move_uploaded_file($_FILES['pdf_file']['tmp_name'],"pdf/recent/" . $_FILES["pdf_file"]["name"]);
$sql=mysqli_query($conn,"INSERT INTO recent (email,pdf_file)VALUES('$email', '$upload_pdf')");
if($sql){
	echo "PDF File Upload Success";
}
else{
	echo "Upload Error!!";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pdf Upload</title>
</head>
<body>
<form method="post" role="form" enctype="multipart/form-data"> 
	<label>Email:</label><br/><br/>
	<input type="text" name="email" id="email" placeholder="Enter patient email"/><br/><br/>
	<input type="file" name="pdf_file" id="pdf_file" accept="application/pdf" /><br/><br/>
	<button id="send" type="submit" name="submit" class="btn btn-success">Submit</button>
	<a href="http://localhost/medicio/adminupload.php"> <button id="back" type="Back" name="Back">Back</a></button>
</form>
</body>
</html>