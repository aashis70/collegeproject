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
		
		$email=$_POST["email"];
		$password=$_POST["password"];
		$s="select * from reg where email='$email' && password='$password'";
		$result=mysqli_query($conn, $s);
		$num=mysqli_num_rows($result);
		if($num==1) {
			$_SESSION['email']=$email;
			header('location:userhome.php');
			
	}else{
		
		echo"invalid user details";


	}
}
?>