<?php 
$s=mysqli_connect('localhost','root','','collegeproject');
 ?><?php 
$query="select * from appointment";
$result=mysqli_query($s,$query);
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <title>Appointment Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
  
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
          <p class="bold text-left">Appointment Details</a> </p>
          </div>
          <div class="col-sm-6 col-md-6">
          <p class="bold text-right">     </p>
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
        <li ><a href="http://localhost/medicio/adminhome.php"> <input type="button" Value="Back To Admin Page"class=" btn btn-skin btn-block btn-lg"</a></li>
         <li> <a href="http://localhost/medicio/image.php"></a>
        
        </li>
        <li><a href="http://localhost/medicio/lab.php"></a></li>
        <li><a href="http://localhost/medicio/index.php"></a></li>
        <li class="active"><a href="http://localhost/medicio/a.php"></a> </li>
        <li ><a href="http://localhost/medicio/register.php"></a></li>
        
        </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
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
        </div>
      </div>
    </div>
  </section>
</div>
</body>
<body>
 <table align="center" border="1px" style="width:1200px; line-height:40px;">
  <tr>
  <th colspan="6"><h2>User Registration Records</h2></th>
  </tr>
  <t> <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
   
  </t>
  <?php 
  while($rows=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td><?php echo $rows['first_name']; ?></td>
      <td><?php echo $rows['last_name']; ?></td>
      <td><?php echo $rows['email']; ?></td>
    
      <td><?php echo $rows['phone']; ?></td>
     
    </tr>
    <?php 
    } ?>
</table>
 </body>
 </html>