
<?php
session_start();
$db = mysqli_connect("localhost","root","","collegeproject");
if(isset($_POST['login_btn'])){

    $email = mysql_real_escape_string($_POST['email']);
    $password = mysql_real_escape_string($_POST['password']);

    $password=md5($password);
    $sqlquery="SELECT * FROM reg WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db,$sqlquery);


    if(mysqli_num_rows($result)==1){

        $_SESSION['message']="You are now logged in.";
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("location:userhome.php");
    }
    else{
        $_SESSION['message']="Incorrect Username or Password."; 
        header("location:a.php");
        echo '<h3>Invalid username or password</h3>';
    }

}
?>