<?php 
session_start();
$name=$_SESSION['aname'];
$conn= new mysqli("localhost","root", "","adminlogin");

 ?>