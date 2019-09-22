<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $conn = mysqli_connect('localhost', 'root', '', 'collegeproject');
        if(mysqli_connect_error())
        {
            echo "<p>Error occurred..kindly try again later.</p>";
            exit();
        }
        $userid = $_POST["full_name"];
        $address = $_POST["address"];
        $phone=$_POST["contact_number"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $password1=$_POST["password1"];
        $s="select * from reg where email='$email'";
        $result=mysqli_query($conn, $s);
        $num=mysqli_num_rows($result);
        if($num==1) {
            echo("Email already used");
           
            exit();
    }
        if(empty($email)){
            echo"Please fill all the requirements properly";
     exit();}       
        
    if(empty($password)){
        echo"Please fill all the requirements properly";
      exit();}  
    
    if(empty($userid)){
        echo"Please fill all the requirements properly";
    exit();}
    if(empty($address)){
        echo"Please fill all the requirements properly";
    exit();}
    if(empty($phone)){
        echo"Please fill all the requirements properly";
     exit();}   
        if($password!=$password1){
            echo"Please fill all the requirements properly";
        exit();}

        $qry = "insert into reg(full_name,address,contact_number,email,password,password1)
                values('$userid','$address','$phone','$email','$password','$password1');";
        $res = $conn->query($qry);
        if($res)
        {
            $msg = "*Registration Successful";
            header("location:register.php?msg=".$msg);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Laboratory Registration</title>
    
    <!-- css -->
     <link rel="stylesheet" href="medicio/csss/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">
    
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="top-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-left">Sunday - Saturday, 6am to 10pm </p>
                    </div>
                    <div class="col-sm-6 col-md-6">
                    <p class="bold text-right">Call us at 01-533779</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container navigation">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                <li ><a href="http://localhost/medicio/home.php">Home</a></li>
                 <li> <a href="http://localhost/medicio/image.php">Cost Details </a>
                
                </li>
                <li><a href="http://localhost/medicio/lab.php">Registered Laboratory</a></li>
                <li><a href="http://localhost/medicio/index.php">Make Your Appointment</a></li>
                <li><a href="http://localhost/medicio/a.php">View Your Test</a> </li>
                <li class="active"><a href="http://localhost/medicio/register.php">Online Laboratory Registration</a></li>
                
              </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- Section: intro -->

    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                    
                    </div>
                    <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                    
                    </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-wrapper">
                        <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                        
                            <div class="panel panel-skin">
                            <div class="panel-heading">
                                    <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Registration Form </h3>
                                    </div>
                                    <div class="panel-body">
                                    <form action="register.php" role="form" class="lead" method="post">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" name="full_name" id="full_name" class="form-control input-md" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" id="address" class="form-control input-md" placeholder="Enter your address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="int" name="contact_number" id="contact_number" class="form-control input-md" placeholder="98********">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" name="email" id="email" class="form-control input-md" placeholder="Enter your email">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" id="password" class="form-control input-md" placeholder="Enter your password">
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <label>Confirm Pasword</label>
                                                    <input type="password" name="password1" id="password" class="form-control input-md" placeholder="Confirm your password">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="w" value="Submit" class="btn btn-skin btn-block btn-lg">
                                    <br><br/>
                                         <a href="http://localhost/medicio/a.php">
                                          <input type="button"  value="Back to Login" class="btn btn-skin btn-block btn-lg" />
                                           <?php 
                                           if(isset($_GET['msg'])) echo $_GET['msg'];
                                           ?></a>
                                          
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </section>
</div>
</body>
</html>
</body>
</html>

