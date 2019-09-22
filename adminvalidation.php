<?php 
session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$conn = mysqli_connect('localhost', 'root', '', 'collegeproject');
		if(mysqli_connect_error())
		{
			echo "<p>Error occurred..kindly try again later.</p>";
			exit();
		}
		
		$id=$_POST["id"];
		$password=$_POST["password"];
		$s="select * from adminlogin where id='$id' && password='$password'";
		$result=mysqli_query($conn, $s);
		$num=mysqli_num_rows($result);
		if($num==1) {
			$_SESSION['id']=$id;
			header('location:adminhome.php');
			
	}else{
		echo"invalid user details";

	}
	
}
?>