<?php
$connection_error = 'could not connect';

	$mysqlConnect = mysqli_connect('localhost', 'project','');
	if(mysqli_select_db($mysqlConnect, 'sample')){
		echo "Connected";
	} else {
		echo "Could Not Connect";
	}
	//mysqli_select_db($mysqlConnect, 'sample') or die("$connection_error");
	
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registered Laboratory</title>
	
    <!-- css -->
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
				 <li> <a href="http://localhost/medicio/image.php">Cost Details </a></li>
				<li class="active"> <a href="http://localhost/medicio/lab.php"> Registered Laboratory</a>
				</li>
				
				<li><a href="http://localhost/medicio/index.php">Make Your Appointment</a></li>
				<li><a href="http://localhost/medicio/a.php">View Your Test</a> </li>
				<li><a href="http://localhost/medicio/register.php">Online Laboratory Registration</a></li>
				
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
						<h1 class="h-ultra"> </h1>
					<h2 class="h-ultra">Cosmos medical group</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light"></h4>
					</div>
						


					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						
						</div>
					</div>					
				</div>		
			</div>
		</div>		
    </section>
	
	<div class="container">
    <div class="page_body">
        <p></p>
        <h1 style="color: #01579b; margin-top: 50px;">Registered Laboratories In Cosmos Medical Group</h1>
<h2>Category A Laboratories</h2>
<table class="table table-hover table-bordered" style="margin-bottom: 70px;">
<thead>
<tr>
<th style="width: 5%;"><strong>S.No.</strong></th>
<th style="width: 25%;"><strong>Laboratory</strong></th>
<th style="width: 20%;"><strong>Address</strong></th>
<th style="width: 20%;"><strong>License No.</strong></th>
<th style="width: 20%;"><strong>Expiry Date</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h5>1</h5>
</td>
<td>
Nepal Mediciti
(Unit of Ashwins Medical College &amp; Hospital Pvt. Ltd.)
</td>
<td>
Sainbu-18, Bhaisepati, Lalitpur
</td>
<td>
3A-00001
</td>
<td>
<h4>10-08-2018</h4>
</td>
</tr>
<tr>
<td>2</td>
<td>National Reference Lab Pvt. Ltd.</td>
<td>New Baneshwor-10, Ktm</td>
<td>3A-00002</td>
<td>
<h4>10-12-2020</h4>
</td>
</tr>
<tr>
<td>3</td>
<td>Sooriya Healthcare Pvt. Ltd.</td>
<td>Lazimpat-2, KTM</td>
<td>3A-00003</td>
<td>
<h4>12-20-2020</h4>
</td>
</tr>
<tr>
<td>4</td>
<td>Mangalam Diagnostic Centre P. Ltd.</td>
<td>Birgunj-5, Parsa</td>
<td>2A-00004</td>
<td>
<h4>01-29-2021</h4>
</td>
</tr>
<tr>
<td>5</td>
<td>LifeCare Diagnostics &amp; Research Centre</td>
<td>Newroad, Pokhara</td>
<td>4A-00005</td>
<td>
<h4>03-17-2021</h4>
</td>
</tr>
<tr>
<td>6</td>
<td>Central Diagnostic Laboratory &amp; Research Centre P. Ltd.</td>
<td>Kamalpokhari, KTM</td>
<td>3A-00006</td>
<td>
<h4>03-18-2021</h4>
</td>
</tr>
<tr>
<td>7</td>
<td>National Path Lab &amp; Research Centre P. Ltd.</td>
<td>Butwal, Rupandehi</td>
<td>5A-00007</td>
<td>
<h4>04-08-2021</h4>
</td>
</tr>
</tbody>
</table>
<h2>Category&nbsp;B Laboratories</h2>
<table class="table table-hover table-bordered" style="margin-bottom: 70px;">
<thead>
<tr>
<th style="width: 5%;"><strong>S.No.</strong></th>
<th style="width: 25%;"><strong>Laboratory</strong></th>
<th style="width: 20%;"><strong>Address</strong></th>
<th style="width: 20%;"><strong>License No.</strong></th>
<th style="width: 20%;"><strong>Expiry Date</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h5>1</h5>
</td>
<td>
Samyak Diagnostics Pvt. Ltd.
</td>
<td>
2nd Floor, Norkhang Complex, Jawalakhel, Lalitpur
</td>
<td>
3B-00001
</td>
<td>
<h4>08-06-2020</h4>
</td>
</tr>
<tr>
<td>2</td>
<td>SRL Diagnostics Nepal Pvt. Ltd.</td>
<td>Life Care Center, 3rd Floor, Ward No. 3, Maharajgunj</td>
<td>3B-00002</td>
<td>
<h4>08-14-2020</h4>
</td>
</tr>
<tr>
<td>3</td>
<td>Dr. Lal PathLabs</td>
<td>1st Floor, Kundalini Diagnostic Centre, KMC, Chandol</td>
<td>3B-00003</td>
<td>
<h4>08-30-2021</h4>
</td>
</tr>
<tr>
<td>4</td>
<td>Interpid Nepal Pvt. Ltd.</td>
<td>Prashuti Griha Marg, Thapathali</td>
<td>3B-00004</td>
<td>
<h4>11-13-2018</h4>
</td>
</tr>
<tr>
<td>5</td>
<td>Reliable Diagnostic Laboratory Nepal P. Ltd.</td>
<td>Gongabu, KTM</td>
<td>3B-00005</td>
<td>
<h4>01-04-2021</h4>
</td>
</tr>
<tr>
<td>6</td>
<td>Vision Diagnostic Pvt. Ltd.</td>
<td>Birta-4, Birgunj, Parsa</td>
<td>2B-00006</td>
<td>
<h4>01-27-2019</h4>
</td>
</tr>
<tr>
<td>7</td>
<td>Medi Quest Laboratory Clinic P. Ltd.</td>
<td>Pulchowk, Lalitpur</td>
<td>3B-00007</td>
<td>
<h4>01-28-2019</h4>
</td>
</tr>
<tr>
<td>8</td>
<td>Siddhi Poly Path Lab P. Ltd.</td>
<td>Dillibazar, KTM</td>
<td>3B-00008</td>
<td>
<h4>02-17-2021</h4>
</td>
</tr>
<tr>
<td>9</td>
<td>Krown Laboratory &amp; Referral Centre P. Ltd.</td>
<td>Bhatbhateni, KTM</td>
<td>3B-00009</td>
<td>
<h4>02-13-2021</h4>
</td>
</tr>
<tr>
<td>10</td>
<td>Modern Diagnostic Centre Nepal P. Ltd.</td>
<td>Maharajgunj, KTM</td>
<td>3B-00010</td>
<td>
<h4>03-15-2019</h4>
</td>
</tr>
<tr>
<td>11</td>
<td>Norvic International &amp; Medical College P. Ltd.</td>
<td>Thapathali, KTM</td>
<td>3B-00011</td>
<td>
<h4>03-15-2019</h4>
</td>
</tr>
<tr>
<td>12</td>
<td>Seed Medical Laboratories Pvt. Ltd.</td>
<td>Bharatpur, Chitwan</td>
<td>3B-00012</td>
<td>
<h4>03-15-2021</h4>
</td>
</tr>
<tr>
<td>13</td>
<td>LifeCare Diagnostics &amp; Research Centre Dhangadhi P. Ltd.</td>
<td>Dhangadhi, Kailali</td>
<td>6B-00013</td>
<td>
<h4>03-15-2021</h4>
</td>
</tr>
<tr>
<td>14</td>
<td>Nirnayak Diagnostics &amp; Referral Centre P. Ltd.</td>
<td>Bharatpur, Chitwan</td>
<td>3B-00014</td>
<td>
<h4>03-29-2021</h4>
</td>
</tr>
<tr>
<td>15</td>
<td>Focus Reference Diagnostic Centre</td>
<td>Biratnagar, Morang</td>
<td>1B-00015</td>
<td>
<h4>04-08-2021</h4>
</td>
</tr>
<tr>
<td>16</td>
<td>Quality Reference Laboratory Pvt. Ltd.</td>
<td>Janakpur, Dhanusha</td>
<td>2B-00016</td>
<td>
<h4>04-08-2021</h4>
</td>
</tr>
<tr>
<td>17</td>
<td>Genomic Diagnostic Laboratory Pvt. Ltd.</td>
<td>Butwal, Rupandehi</td>
<td>5B-00017</td>
<td>
<h4>04-08-2019</h4>
</td>
</tr>
<tr>
<td>18</td>
<td>Capital Reference Lab P. Ltd</td>
<td>Bharatpur, Chitwan</td>
<td>3B-00018</td>
<td>
<h4>04-08-2021</h4>
</td>
</tr>
<tr>
<td>19</td>
<td>Terai Hospital &amp; Research Centre Pvt. Ltd.</td>
<td>Birgunj, Parsa</td>
<td>2B-00019</td>
<td>
<h4>04-08-2021</h4>
</td>
</tr>
<tr>
<td>20</td>
<td>Asian Diagnostic Laboratory Pvt. Ltd.</td>
<td>Butwal, Rupandehi</td>
<td>5B-00020</td>
<td>
<h4>04-08-2019</h4>
</td>
</tr>
<tr>
<td>21</td>
<td>Star Hospital Pvt. Ltd.</td>
<td>Sanepa, Lalitpur</td>
<td>3B-00021</td>
<td>
<h4>04-21-2021</h4>
</td>
</tr>
<tr>
<td>22</td>
<td>Health Link Reliable Lab &amp; Clinic Pvt. Ltd.</td>
<td>Lagankhel, Lalitpur</td>
<td>3B-00022</td>
<td>
<h4>04-23-2021</h4>
</td>
</tr>
<tr>
<td>23</td>
<td>Bayodha Hospital</td>
<td>Balkhu, Kathmandu</td>
<td>3B-00023</td>
<td>0</td>
</tr>
<tr>
<td>24</td>
<td>Diabetes, Thyroid &amp; Endocrine Care Centre</td>
<td>Kupandol, Lalitpur</td>
<td>3B-00024</td>
<td>07-16-2021</td>
</tr>
<tr>
<td>25</td>
<td>United Reference Laboratory</td>
<td>Pokhara</td>
<td>4B-00025</td>
<td>07-16-2019</td>
</tr>
<tr>
<td>26</td>
<td>Kathmandu Pathology &amp; Diagnostic Centre Pvt. Ltd.</td>
<td>Nagpokhari, Kathmandu</td>
<td>3B-00026</td>
<td>07-16-2021</td>
</tr>
<tr>
<td>27</td>
<td>Narayani Central Diagnostic Laboratory P. Ltd.</td>
<td>Birta-3, Birgunj</td>
<td>2B-00027</td>
<td>11-15-2019</td>
</tr>
<tr>
<td>28</td>
<td>S.E.E.D. Medical Laboratories</td>
<td>Butwal-6, Rupandehi</td>
<td>5B-00028</td>
<td>18-12-2019</td>
</tr>
<tr>
<td>29</td>
<td>Bio Diagnostics Path Labs Nepal Pvt. Ltd.</td>
<td>Sukedhara, Kathmandu</td>
<td>3B-00029</td>
<td>27-12-2021</td>
</tr>
</tbody>
</table>
<h2>Category C Laboratories</h2>
<table class="table table-hover table-bordered" style="margin-bottom: 70px;">
<thead>
<tr>
<th style="width: 5%;"><strong>S.No.</strong></th>
<th style="width: 25%;"><strong>Laboratory</strong></th>
<th style="width: 20%;"><strong>Address</strong></th>
<th style="width: 20%;"><strong>License No.</strong></th>
<th style="width: 20%;"><strong>Expiry Date</strong></th>
</tr>
</thead>
<tbody>
<tr>
<td style="width: 5%;">1</td>
<td style="width: 25%;">Khwopa Diagnostic Centre Pvt. Ltd.</td>
<td style="width: 20%;">Bhaktapur-4, Kamalbinayak, Bhaktapur</td>
<td style="width: 20%;">3C-00001</td>
<td style="width: 20%;">10-23-2018</td>
</tr>
<tr>
<td style="width: 5%;">2</td>
<td style="width: 25%;">Godawari Midcity Polyclinic Pvt. Ltd.</td>
<td style="width: 20%;">
<p>Godawari Muncipility-14,</p>
<p>Lalitpur, Nepal</p>
</td>
<td style="width: 20%;">3C-00002</td>
<td style="width: 20%;">11-07-2018</td>
</tr>
<tr>
<td style="width: 5%;">3</td>
<td style="width: 25%;">Aaryogya Diagnostic Centre Pvt. Ltd.</td>
<td style="width: 20%;">Jawalakhel, Lalitpur</td>
<td style="width: 20%;">3C-00003</td>
<td style="width: 20%;">11-26-2018</td>
</tr>
<tr>
<td style="width: 5%;">4</td>
<td style="width: 25%;">Unicorn Polyclinic Pvt. Ltd.</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00004</td>
<td style="width: 20%;">01-02-2020</td>
</tr>
<tr>
<td style="width: 5%;">5</td>
<td style="width: 25%;">Seasons Medical Centre P. Ltd.</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00005</td>
<td style="width: 20%;">01-03-2020</td>
</tr>
<tr>
<td style="width: 5%;">6</td>
<td style="width: 25%;">Nepolian Health Care Centre Pvt. Ltd.</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00006</td>
<td style="width: 20%;">2078-11-4</td>
</tr>
<tr>
<td style="width: 5%;">7</td>
<td style="width: 25%;">Kaski Model Laboratory Service</td>
<td style="width: 20%;">New Road, Pokhara</td>
<td style="width: 20%;">4C-00007</td>
<td style="width: 20%;">12-13-2018</td>
</tr>
<tr>
<td style="width: 5%;">8</td>
<td style="width: 25%;">Namaste Laboratory Service</td>
<td style="width: 20%;">Pokhara, Kaski</td>
<td style="width: 20%;">4C-00008</td>
<td style="width: 20%;">12-13-2018</td>
</tr>
<tr>
<td style="width: 5%;">9</td>
<td style="width: 25%;">Himalaya Polyclinic &amp; Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Parsyang-5, Kaski</td>
<td style="width: 20%;">4C-00009</td>
<td style="width: 20%;">2078-10-8</td>
</tr>
<tr>
<td style="width: 5%;">10</td>
<td style="width: 25%;">Shuvam Sumangal Polyclinic P. Ltd.</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00010</td>
<td style="width: 20%;">01-16-2018</td>
</tr>
<tr>
<td style="width: 5%;">11</td>
<td style="width: 25%;">Nims Group P. Ltd.</td>
<td style="width: 20%;">Thapathali, KTM</td>
<td style="width: 20%;">3C-00011</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">12</td>
<td style="width: 25%;">Nobel College of Health &amp; Edu. Found. P. Ltd.</td>
<td style="width: 20%;">Sinamangal, KTM</td>
<td style="width: 20%;">3C-00012</td>
<td style="width: 20%;">01-22-2019</td>
</tr>
<tr>
<td style="width: 5%;">13</td>
<td style="width: 25%;">Capital Hospital &amp; Research Centre P. Ltd.</td>
<td style="width: 20%;">Putalisadak, KTM</td>
<td style="width: 20%;">3C-00013</td>
<td style="width: 20%;">01-21-2019</td>
</tr>
<tr>
<td style="width: 5%;">14</td>
<td style="width: 25%;">Patho Lab</td>
<td style="width: 20%;">Janakpur, Dhanusha</td>
<td style="width: 20%;">2C-00014</td>
<td style="width: 20%;">02-13-2021</td>
</tr>
<tr>
<td style="width: 5%;">15</td>
<td style="width: 25%;">Sunaina Pathology</td>
<td style="width: 20%;">Janakpur, Dhanusha</td>
<td style="width: 20%;">2C-00015</td>
<td style="width: 20%;">02-13-2021</td>
</tr>
<tr>
<td style="width: 5%;">16</td>
<td style="width: 25%;">KTM Polyclinic &amp; Home Care Pvt. Ltd.</td>
<td style="width: 20%;">Balaju, KTM</td>
<td style="width: 20%;">3C-00016</td>
<td style="width: 20%;">2079-1-16</td>
</tr>
<tr>
<td style="width: 5%;">17</td>
<td style="width: 25%;">Mega Lab Pvt. Ltd.</td>
<td style="width: 20%;">Kawasoti, Nawalparasi</td>
<td style="width: 20%;">4C-00017</td>
<td style="width: 20%;">02-13-2019</td>
</tr>
<tr>
<td style="width: 5%;">18</td>
<td style="width: 25%;">Saadhak Polyclinic Pvt. Ltd.</td>
<td style="width: 20%;">Kageshwori, KTM</td>
<td style="width: 20%;">3C-00018</td>
<td style="width: 20%;">03-15-2019</td>
</tr>
<tr>
<td style="width: 5%;">19</td>
<td style="width: 25%;">M.V. Polyclinic &amp; Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Sinamangal, KTM</td>
<td style="width: 20%;">3C-00019</td>
<td style="width: 20%;">03-15-2021</td>
</tr>
<tr>
<td style="width: 5%;">20</td>
<td style="width: 25%;">Patan Om Polyclinic Pvt. Ltd.</td>
<td style="width: 20%;">Lagankhel, Lalitpur</td>
<td style="width: 20%;">3C-00020</td>
<td style="width: 20%;">03-18-2019</td>
</tr>
<tr>
<td style="width: 5%;">21</td>
<td style="width: 25%;">Nozomi Polyclinic Pvt. Ltd.</td>
<td style="width: 20%;">Kupandol, Lalitpur</td>
<td style="width: 20%;">3C-00021</td>
<td style="width: 20%;">03-18-2021</td>
</tr>
<tr>
<td style="width: 5%;">22</td>
<td style="width: 25%;">Meridian Polyclinic &amp; Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00022</td>
<td style="width: 20%;">03-18-2021</td>
</tr>
<tr>
<td style="width: 5%;">23</td>
<td style="width: 25%;">Balaju Swasthya Polyclinic Pvt. Ltd.</td>
<td style="width: 20%;">Balaju, KTM</td>
<td style="width: 20%;">3C-00023</td>
<td style="width: 20%;">03-18-2021</td>
</tr>
<tr>
<td style="width: 5%;">24</td>
<td style="width: 25%;">Times Hospital Pvt. Ltd.</td>
<td style="width: 20%;">Rangeli Na.Pa. 7, Morang</td>
<td style="width: 20%;">1C-00024</td>
<td style="width: 20%;">03-21-2021</td>
</tr>
<tr>
<td style="width: 5%;">25</td>
<td style="width: 25%;">Pathology Service pvt. Ltd.</td>
<td style="width: 20%;">Chabahil, KTM</td>
<td style="width: 20%;">3C-00025</td>
<td style="width: 20%;">03-21-2021</td>
</tr>
<tr>
<td style="width: 5%;">26</td>
<td style="width: 25%;">Shara Clinic &amp; Pathology Pvt. Ltd.</td>
<td style="width: 20%;">Pepsicola, KTM</td>
<td style="width: 20%;">3C-00026</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">27</td>
<td style="width: 25%;">Swacon International Hospital Pvt. Ltd.</td>
<td style="width: 20%;">Rudreshwor Marg, KTM</td>
<td style="width: 20%;">3C-00027</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">28</td>
<td style="width: 25%;">Kantipur Diagnostic Centre Pvt. Ltd.</td>
<td style="width: 20%;">New Baneshwor, KTM</td>
<td style="width: 20%;">3C-00028</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">29</td>
<td style="width: 25%;">Saiba Medical Centre Pvt. Ltd.</td>
<td style="width: 20%;">Pulchowk, KTM</td>
<td style="width: 20%;">3C-00029</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">30</td>
<td style="width: 25%;">Teku Lab Pathology Sewa</td>
<td style="width: 20%;">Teku, KTM</td>
<td style="width: 20%;">3C-00030</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">31</td>
<td style="width: 25%;">Ram Janaki Hospital Pvt. Ltd</td>
<td style="width: 20%;">Janakpur, Dhanusha</td>
<td style="width: 20%;">2C-00031</td>
<td style="width: 20%;">03-29-2021</td>
</tr>
<tr>
<td style="width: 5%;">32</td>
<td style="width: 25%;">Kankai Hospital P. Ltd.</td>
<td style="width: 20%;">Birtamod, Jhapa</td>
<td style="width: 20%;">1C-00032</td>
<td style="width: 20%;">04-08-2021</td>
</tr>
<tr>
<td style="width: 5%;">33</td>
<td style="width: 25%;">NMC Polyclinic &amp; Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Birgunj, Parsa</td>
<td style="width: 20%;">2C-00033</td>
<td style="width: 20%;">04-08-2019</td>
</tr>
<tr>
<td style="width: 5%;">34</td>
<td style="width: 25%;">Sangam Polyclinic</td>
<td style="width: 20%;">Hetauda, Makwanpur</td>
<td style="width: 20%;">3C-00034</td>
<td style="width: 20%;">04-08-2019</td>
</tr>
<tr>
<td style="width: 5%;">35</td>
<td style="width: 25%;">Birgunj Om Hospital P. Ltd.</td>
<td style="width: 20%;">Birgunj, Parsa</td>
<td style="width: 20%;">2C-00035</td>
<td style="width: 20%;">04-08-2019</td>
</tr>
<tr>
<td style="width: 5%;">36</td>
<td style="width: 25%;">Alka Polyclinic P. Ltd</td>
<td style="width: 20%;">Satdobato, Lalitpur</td>
<td style="width: 20%;">3C-00036</td>
<td style="width: 20%;">04-08-2019</td>
</tr>
<tr>
<td style="width: 5%;">37</td>
<td style="width: 25%;">Saudi Nepal Medical Centre P. Ltd.</td>
<td style="width: 20%;">Tripureswor, Kathmandu</td>
<td style="width: 20%;">3C-00037</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">38</td>
<td style="width: 25%;">Mediasia Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Bansbari, Kathmandu</td>
<td style="width: 20%;">3C-00038</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">39</td>
<td style="width: 25%;">Blue Bird International Clinic P. Ltd.</td>
<td style="width: 20%;">Thapathali, Kathmandu</td>
<td style="width: 20%;">3C-00039</td>
<td style="width: 20%;">
<p>04-17-2021</p>
</td>
</tr>
<tr>
<td style="width: 5%;">40</td>
<td style="width: 25%;">Siddhi Poly Clinic Health Service</td>
<td style="width: 20%;">Gyaneshwor, Kathmandu</td>
<td style="width: 20%;">3C-00040</td>
<td style="width: 20%;">
<p>04-17-2021</p>
</td>
</tr>
<tr>
<td style="width: 5%;">&nbsp;41</td>
<td style="width: 25%;">Health Care Clinic</td>
<td style="width: 20%;">Tripureshwor, Kathmandu</td>
<td style="width: 20%;">3C-00041</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">42</td>
<td style="width: 25%;">Siddhi Poly Clinic Health Service&nbsp;</td>
<td style="width: 20%;">Dillibazar, Kathmandu</td>
<td style="width: 20%;">3C-00042</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">43</td>
<td style="width: 25%;">Everest Hospital P. Ltd.</td>
<td style="width: 20%;">New Baneshwor, Kathmandu</td>
<td style="width: 20%;">3C-00043</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">44</td>
<td style="width: 25%;">Dhorpatan Swasthya Clinic P. Ltd.</td>
<td style="width: 20%;">Machhapokhari, Kathmandu</td>
<td style="width: 20%;">3C-00044</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">45</td>
<td style="width: 25%;">Al-Mashoor Diagnostic Service P. Ltd.</td>
<td style="width: 20%;">New Baneshwor, Kathmandu</td>
<td style="width: 20%;">3C-00045</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">46</td>
<td style="width: 25%;">Aqua Diagnostic Service</td>
<td style="width: 20%;">Pingalasthan, Kathmandu</td>
<td style="width: 20%;">3C-00046</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">47</td>
<td style="width: 25%;">Kanishk International Health Care Centre Pvt. Ltd.</td>
<td style="width: 20%;">Tinkune, KTM</td>
<td style="width: 20%;">3C-00047</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">48</td>
<td style="width: 25%;">Cutis Path Lab P. Ltd.</td>
<td style="width: 20%;">Mid-Baneshwor, Kathmandu</td>
<td style="width: 20%;">3C-00048</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">49</td>
<td style="width: 25%;">Life Care Prince Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Kamladi, KTM</td>
<td style="width: 20%;">3C-00049</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">50</td>
<td style="width: 25%;">Razam Medical Centre P. Ltd.</td>
<td style="width: 20%;">Chabahil, KTM</td>
<td style="width: 20%;">3C-00050</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">51</td>
<td style="width: 25%;">Al Khalleej Medical Centre P. Ltd.</td>
<td style="width: 20%;">Chuchepaati, KTM</td>
<td style="width: 20%;">3C-00051</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">52</td>
<td style="width: 25%;">Madhyapur Pathlab P. Ltd.</td>
<td style="width: 20%;">Thimi, Bhaktapur</td>
<td style="width: 20%;">3C-00052</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">53</td>
<td style="width: 25%;">Himalay Diagnostic Clinic P. Ltd.</td>
<td style="width: 20%;">Koteshwor, Kathmandu</td>
<td style="width: 20%;">3C-00053</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">54</td>
<td style="width: 25%;">Janasarovar Polyclinic &amp; Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Kalanki, Kathamndu</td>
<td style="width: 20%;">3C-00054</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">55</td>
<td style="width: 25%;">Shikhar Public Polyclinic P. Ltd.</td>
<td style="width: 20%;">Basundhara, Kathmandu</td>
<td style="width: 20%;">3C-00055</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">56</td>
<td style="width: 25%;">All Nepal Hospital P. Ltd.</td>
<td style="width: 20%;">Samakhushi, Kathmandu</td>
<td style="width: 20%;">3C-00056</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">57</td>
<td style="width: 25%;">Himalaya Diagnostic &amp; Polyclinic P. Ltd.</td>
<td style="width: 20%;">Birtamod, Jhapa</td>
<td style="width: 20%;">1C-00057</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">58</td>
<td style="width: 25%;">Sherawali Polyclinic Tatha Research Centre P. Ltd.</td>
<td style="width: 20%;">Bhimsengola, KTM</td>
<td style="width: 20%;">3C-00058</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">59</td>
<td style="width: 25%;">Sahid Memorial Janaswasthya Sahakari Sanstha P. Ltd.</td>
<td style="width: 20%;">Kalanki, KTM</td>
<td style="width: 20%;">3C-00059</td>
<td style="width: 20%;">04-17-2021</td>
</tr>
<tr>
<td style="width: 5%;">60</td>
<td style="width: 25%;">&nbsp;Lalupate Medical Centre P. Ltd.</td>
<td style="width: 20%;">Pingalasthan, Kathmandu</td>
<td style="width: 20%;">3C-00060</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">61</td>
<td style="width: 25%;">Sagarmatha Polyclinic and Diagnostic Centre P. Ltd.</td>
<td style="width: 20%;">Kaalimati, Kathmandu</td>
<td style="width: 20%;">3C-00061</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">62</td>
<td style="width: 25%;">Marcopolo Medical Centre P. Ltd.</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00062</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">63</td>
<td style="width: 25%;">Oppal Healthcare Centre P. Ltd.</td>
<td style="width: 20%;">Chapalkarkhana, KTM</td>
<td style="width: 20%;">3C-00063</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">64</td>
<td style="width: 25%;">Aashirwad Swasthya Sewa Clinic</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00064</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">65</td>
<td style="width: 25%;">Life Trust Medi Diagnostic P. Ltd.</td>
<td style="width: 20%;">Dhumbarahi, KTM</td>
<td style="width: 20%;">3C-00065</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">66</td>
<td style="width: 25%;">Dhaulagiri Health Care Centre P. Ltd.</td>
<td style="width: 20%;">Mitra Nagar, KTM</td>
<td style="width: 20%;">3C-00066</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">67</td>
<td style="width: 25%;">Quest Diagnostic &amp; Polyclinic P. Ltd.</td>
<td style="width: 20%;">Shankhamul, KTM</td>
<td style="width: 20%;">3C-00067</td>
<td style="width: 20%;">04-23-2021</td>
</tr>
<tr>
<td style="width: 5%;">68</td>
<td style="width: 25%;">Shanta Sulav Matri Shisu Kendra</td>
<td style="width: 20%;">Putalisadak, KTM</td>
<td style="width: 20%;">3C-00068</td>
<td style="width: 20%;">&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">69</td>
<td style="width: 25%;">Ashoka Polyclinic</td>
<td style="width: 20%;">Lalitpur</td>
<td style="width: 20%;">3C-00069</td>
<td style="width: 20%;">&nbsp;2076-3-31</td>
</tr>
<tr>
<td style="width: 5%;">70</td>
<td style="width: 25%;">Trishuli Medical &amp; Clinic P. Ltd.</td>
<td style="width: 20%;">Sinamangal-9, KTM</td>
<td style="width: 20%;">3C-00073</td>
<td style="width: 20%;">04-21-2021</td>
</tr>
<tr>
<td style="width: 5%;">71</td>
<td style="width: 25%;">Capital Medical Centre P. Ltd.</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00074</td>
<td style="width: 20%;">04-21-2021</td>
</tr>
<tr>
<td style="width: 5%;">72</td>
<td style="width: 25%;">Namaste Nepal Medical Centre P. Ltd</td>
<td style="width: 20%;">Gongabu-29, KTM</td>
<td style="width: 20%;">3C-00075</td>
<td style="width: 20%;">04-21-2021</td>
</tr>
<tr>
<td style="width: 5%;">73</td>
<td style="width: 25%;">Medstar Polyclinic P. Ltd.</td>
<td style="width: 20%;">Tarkeshwor-4, KTM</td>
<td style="width: 20%;">3C-00076</td>
<td style="width: 20%;">07-08-2021</td>
</tr>
<tr>
<td style="width: 5%;">74</td>
<td style="width: 25%;">MG Polyclinic &amp; Diagnostic P. Ltd.</td>
<td style="width: 20%;">Maitidevi-30, KTM</td>
<td style="width: 20%;">3C-00077</td>
<td style="width: 20%;">08-20-2021</td>
</tr>
<tr>
<td style="width: 5%;">75</td>
<td style="width: 25%;">Suyog Clinic and Diagnostic P. Ltd.</td>
<td style="width: 20%;">Janakpur-10, Dhanusha</td>
<td style="width: 20%;">2C-00078</td>
<td style="width: 20%;">11-13-2019</td>
</tr>
<tr>
<td style="width: 5%;">76</td>
<td style="width: 25%;">Sinamangal Healthcare &amp; Diagnosis Centre P. Ltd.</td>
<td style="width: 20%;">Sinamangal-9, KTM</td>
<td style="width: 20%;">3C-00079</td>
<td style="width: 20%;">&nbsp;2078-6-13</td>
</tr>
<tr>
<td style="width: 5%;">77</td>
<td style="width: 25%;">&nbsp;Yashoda Indreni Diagnostic</td>
<td style="width: 20%;">Nepalgunj, Banke</td>
<td style="width: 20%;">5C-00080</td>
<td style="width: 20%;">2076-8-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">78</td>
<td style="width: 25%;">Stemz Health Care Centre</td>
<td style="width: 20%;">Chakrapath, KTM</td>
<td style="width: 20%;">3C-00081</td>
<td style="width: 20%;">2076-8-24&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">79</td>
<td style="width: 25%;">Nova Hospital</td>
<td style="width: 20%;">Dhangadhi, Kailali</td>
<td style="width: 20%;">7C-00082</td>
<td style="width: 20%;">2078-8-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">80</td>
<td style="width: 25%;">Sathi Aspatal &amp; Research Centre</td>
<td style="width: 20%;">Tikapur, Kailali</td>
<td style="width: 20%;">7C-00083</td>
<td style="width: 20%;">2078-8-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">81</td>
<td style="width: 25%;">Kailali Hospital</td>
<td style="width: 20%;">Dhangadhi, Kailali</td>
<td style="width: 20%;">7C-00084</td>
<td style="width: 20%;">2078-8-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">82</td>
<td style="width: 25%;">Khirayu Polyclinic</td>
<td style="width: 20%;">Newbaneshwor, KTM</td>
<td style="width: 20%;">3C-00085</td>
<td style="width: 20%;">2078-9-3&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">83</td>
<td style="width: 25%;">Divine Pathology</td>
<td style="width: 20%;">Jorpati, KTM</td>
<td style="width: 20%;">3C-00086</td>
<td style="width: 20%;">2076-9-3&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">84</td>
<td style="width: 25%;">Bharatpur Diagnostic Centre</td>
<td style="width: 20%;">Bharatpur, Chitwan</td>
<td style="width: 20%;">3C-00087</td>
<td style="width: 20%;">2078-9-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">85</td>
<td style="width: 25%;">Om Anmol Clinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Mahabouddha, KTM</td>
<td style="width: 20%;">3C-00088</td>
<td style="width: 20%;">2078-9-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">86</td>
<td style="width: 25%;">Sulav Medical Centre</td>
<td style="width: 20%;">Bharatpur, Chitwan</td>
<td style="width: 20%;">3C-00089</td>
<td style="width: 20%;">2078-9-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">87</td>
<td style="width: 25%;">Sudha Medical &amp; Diagnostic Centre</td>
<td style="width: 20%;">Sinamangal, KTM</td>
<td style="width: 20%;">3C-00090</td>
<td style="width: 20%;">2078-9-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">88</td>
<td style="width: 25%;">A Quality Health Care &amp; Diagnostic Centre</td>
<td style="width: 20%;">Sinamangal, KTM</td>
<td style="width: 20%;">3C-00091</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">89</td>
<td style="width: 25%;">Amitabha Buddha Medical Centre</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00092</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">90</td>
<td style="width: 25%;">Anmol Medical Centre</td>
<td style="width: 20%;">Sinamangal, KTM</td>
<td style="width: 20%;">3C-00093</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">91</td>
<td style="width: 25%;">Chetana Swyasthya Kendra</td>
<td style="width: 20%;">Koteshwor, KTM</td>
<td style="width: 20%;">3C-00094</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">92</td>
<td style="width: 25%;">Cosmos Medical Centre</td>
<td style="width: 20%;">Ratopool, KTM</td>
<td style="width: 20%;">3C-00095</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">93</td>
<td style="width: 25%;">Dynasty Medical Centre</td>
<td style="width: 20%;">Chabahil, KTM</td>
<td style="width: 20%;">3C-00096</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">94</td>
<td style="width: 25%;">Everest Health Home Service</td>
<td style="width: 20%;">Midbaneshwor, KTM</td>
<td style="width: 20%;">3C-00097</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">95</td>
<td style="width: 25%;">Fusion Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Bijulibazzar, KTM</td>
<td style="width: 20%;">3C-00098</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">96</td>
<td style="width: 25%;">KR Medical Centre</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00099</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">97</td>
<td style="width: 25%;">Kasthamandap Health Care Centre</td>
<td style="width: 20%;">Battisputali, KTM</td>
<td style="width: 20%;">3C-00100</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">98</td>
<td style="width: 25%;">Lotus Medicare &amp; Diagnostic Centre</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00101</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">99</td>
<td style="width: 25%;">Manjushree Medical Centre</td>
<td style="width: 20%;">Naxal, KTM</td>
<td style="width: 20%;">3C-00102</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">100</td>
<td style="width: 25%;">Meridian Health Care Centre</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00103</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">101</td>
<td style="width: 25%;">New World View Medical Centre</td>
<td style="width: 20%;">Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00104</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">102</td>
<td style="width: 25%;">Prashanti Health Care Centre</td>
<td style="width: 20%;">Jawalakhel, Lalitpur</td>
<td style="width: 20%;">3C-00105</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">103</td>
<td style="width: 25%;">Public Health Care Centre</td>
<td style="width: 20%;">Samakhushi, KTM</td>
<td style="width: 20%;">3C-00106</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">104</td>
<td style="width: 25%;">Sahara Health Centre</td>
<td style="width: 20%;">Newbaneshwor, KTM</td>
<td style="width: 20%;">3C-00107</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">105</td>
<td style="width: 25%;">Shrijana Medical Centre</td>
<td style="width: 20%;">Bijulibazar, KTM</td>
<td style="width: 20%;">3C-00108</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">106</td>
<td style="width: 25%;">Shuva Sudha Medical</td>
<td style="width: 20%;">Sinamangal, KTM</td>
<td style="width: 20%;">3C-00109</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">107</td>
<td style="width: 25%;">South Asian Health Care Centre</td>
<td style="width: 20%;">Dhumbarahi, KTM</td>
<td style="width: 20%;">3C-00110</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">108</td>
<td style="width: 25%;">Subba Pathology and Clinic</td>
<td style="width: 20%;">Kupandol, Lalitpur</td>
<td style="width: 20%;">3C-00111</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">109</td>
<td style="width: 25%;">Sudha Clinic</td>
<td style="width: 20%;">Koteshwor, KTM</td>
<td style="width: 20%;">
<p>3C-00112</p>
</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">110</td>
<td style="width: 25%;">Sunapati Polyclinic &amp; Health Care</td>
<td style="width: 20%;">&nbsp;Gwarko, KTM</td>
<td style="width: 20%;">&nbsp;3C-00113</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">111</td>
<td style="width: 25%;">Sunrise Polyclinic &amp; Diagnosis Centre</td>
<td style="width: 20%;">&nbsp;Maharajgunj, KTM</td>
<td style="width: 20%;">3C-00114&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">112</td>
<td style="width: 25%;">Sunshine Medical Centre</td>
<td style="width: 20%;">Newbaneshwor, KTM&nbsp;</td>
<td style="width: 20%;">3C-00115</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">113</td>
<td style="width: 25%;">Super Healthcare</td>
<td style="width: 20%;">Sukedhara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00116&nbsp;</td>
<td style="width: 20%;">2078-9-2&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">114</td>
<td style="width: 25%;">Swarnim Medical Centre</td>
<td style="width: 20%;">Sundhara, Lalitpur&nbsp;</td>
<td style="width: 20%;">3C-00117&nbsp;</td>
<td style="width: 20%;">2078-9-2&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">115</td>
<td style="width: 25%;">Syrup Health Care</td>
<td style="width: 20%;">Dhapasi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00118&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">116</td>
<td style="width: 25%;">Syrup Medical Centre</td>
<td style="width: 20%;">Gongabu, KTM&nbsp;</td>
<td style="width: 20%;">3C-00119&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">117</td>
<td style="width: 25%;">Titan Health Care Centre</td>
<td style="width: 20%;">Basundhara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00120&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">118</td>
<td style="width: 25%;">Trust Medical Centre</td>
<td style="width: 20%;">Dhumbarahi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00121&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">119</td>
<td style="width: 25%;">Upatyaka Pathology &amp; Clinic</td>
<td style="width: 20%;">Jawalakhel, Lalitpur&nbsp;</td>
<td style="width: 20%;">3C-00122&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">120</td>
<td style="width: 25%;">Valley Medical Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00123&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">121</td>
<td style="width: 25%;">Welcare Hospital &amp; Research Centre</td>
<td style="width: 20%;">Ratopool, KTM&nbsp;</td>
<td style="width: 20%;">3C-00124&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">122</td>
<td style="width: 25%;">Dibyajyoti Diagnostic &amp; Medical Centre</td>
<td style="width: 20%;">Koteshwor, KTM&nbsp;</td>
<td style="width: 20%;">3C-00125&nbsp;</td>
<td style="width: 20%;">2078-9-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">123</td>
<td style="width: 25%;">N.S. Medical Centre</td>
<td style="width: 20%;">Gongabu, KTM&nbsp;</td>
<td style="width: 20%;">3C-00126&nbsp;</td>
<td style="width: 20%;">2078-9-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">124</td>
<td style="width: 25%;">Perfect Diagnostic Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00127&nbsp;</td>
<td style="width: 20%;">2078-9-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">125</td>
<td style="width: 25%;">Social Medical Centre</td>
<td style="width: 20%;">Gongabu, KTM&nbsp;</td>
<td style="width: 20%;">3C-00128&nbsp;</td>
<td style="width: 20%;">2078-9-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">126</td>
<td style="width: 25%;">Sankhamul Health Care</td>
<td style="width: 20%;">Sankhamul, KTM&nbsp;</td>
<td style="width: 20%;">3C-00129&nbsp;</td>
<td style="width: 20%;">2078-9-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">127</td>
<td style="width: 25%;">Kuleshwor Polyclinic</td>
<td style="width: 20%;">Kuleshwor, KTM&nbsp;</td>
<td style="width: 20%;">3C-00130&nbsp;</td>
<td style="width: 20%;">2078-9-1&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">128</td>
<td style="width: 25%;">Eon Medical Centre</td>
<td style="width: 20%;">Lazimpat, KTM&nbsp;</td>
<td style="width: 20%;">3C-00131&nbsp;</td>
<td style="width: 20%;">2078-10-9&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">129</td>
<td style="width: 25%;">Revive Clinic</td>
<td style="width: 20%;">Gaushala, KTM&nbsp;</td>
<td style="width: 20%;">3C-00132</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">130</td>
<td style="width: 25%;">Sewa Medical Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00133&nbsp;</td>
<td style="width: 20%;">2078-10-8</td>
</tr>
<tr>
<td style="width: 5%;">131</td>
<td style="width: 25%;">Dhorpatan Medical Centre</td>
<td style="width: 20%;">Basundhara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00134&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">132</td>
<td style="width: 25%;">Bright Health Care Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00135&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">133</td>
<td style="width: 25%;">Green Medical Centre</td>
<td style="width: 20%;">Sinamangal, KTM&nbsp;</td>
<td style="width: 20%;">3C-00136&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">134</td>
<td style="width: 25%;">Worldwide Medical Centre &amp; Polyclinic</td>
<td style="width: 20%;">Battisputali, KTM&nbsp;</td>
<td style="width: 20%;">3C-00138&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">135</td>
<td style="width: 25%;">Arun Medical Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00139&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">136</td>
<td style="width: 25%;">Megha Medical Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00140&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">137</td>
<td style="width: 25%;">Jalbinayak Medical Centre</td>
<td style="width: 20%;">Gongabu, KTM&nbsp;</td>
<td style="width: 20%;">3C-00141&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">138</td>
<td style="width: 25%;">Reliance Health Care Centre</td>
<td style="width: 20%;">Basundhara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00142&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">139</td>
<td style="width: 25%;">Diamond Health Care Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00143&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">140</td>
<td style="width: 25%;">Dhaulagiri Himal Polyclinic</td>
<td style="width: 20%;">Basundhara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00144&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">141</td>
<td style="width: 25%;">Subba Medical Centre</td>
<td style="width: 20%;">Basundhara, KTM</td>
<td style="width: 20%;">3C-00145&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">142</td>
<td style="width: 25%;">National Path lab &amp; Research Centre</td>
<td style="width: 20%;">Resunga, Gulmi&nbsp;</td>
<td style="width: 20%;">5C-00146&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">143</td>
<td style="width: 25%;">National Path Lab &amp; Research Centre</td>
<td style="width: 20%;">Bhairahawa, Rupandehi&nbsp;</td>
<td style="width: 20%;">5C-00147&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">144</td>
<td style="width: 25%;">Akhanda Medical Centre</td>
<td style="width: 20%;">Gaushala, KTM&nbsp;</td>
<td style="width: 20%;">3C-00148&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">145</td>
<td style="width: 25%;">Khajana Medical &amp; Polyclinic Centre</td>
<td style="width: 20%;">Pingalasthan, KTM&nbsp;</td>
<td style="width: 20%;">3C-00149&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">146</td>
<td style="width: 25%;">Asian Rays Medicare Centre</td>
<td style="width: 20%;">Chapal Karkhana, KTM&nbsp;</td>
<td style="width: 20%;">3C-00150&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">147</td>
<td style="width: 25%;">Fusion Swasthya Clinic</td>
<td style="width: 20%;">Sinamangal, KTM&nbsp;</td>
<td style="width: 20%;">3C-00151&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">148</td>
<td style="width: 25%;">Pooja Medical Diagnostic Centre</td>
<td style="width: 20%;">Gaushala, KTM&nbsp;</td>
<td style="width: 20%;">3C-00152&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">149</td>
<td style="width: 25%;">Healthy Life International Medical Centre</td>
<td style="width: 20%;">Minbhawan, KTM&nbsp;</td>
<td style="width: 20%;">3C-00153&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">150</td>
<td style="width: 25%;">Helping Health Polyclinic</td>
<td style="width: 20%;">Maitidevi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00154&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">151</td>
<td style="width: 25%;">Manaki Polyclinic Tatha Upachar Kendra</td>
<td style="width: 20%;">Manohara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00155&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">152</td>
<td style="width: 25%;">Midat Hospital</td>
<td style="width: 20%;">
<p>Lagankhel, Lalitpur&nbsp;</p>
</td>
<td style="width: 20%;">3C-00156&nbsp;</td>
<td style="width: 20%;">2078-10-9&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">154</td>
<td style="width: 25%;">Shailung Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00157&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">155</td>
<td style="width: 25%;">Maa Laxmi Medical Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00158</td>
<td style="width: 20%;">2078-11-4</td>
</tr>
<tr>
<td style="width: 5%;">156</td>
<td style="width: 25%;">L &amp; R Health Care Centre</td>
<td style="width: 20%;">Gongabu, KTM&nbsp;</td>
<td style="width: 20%;">3C-00159&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">157</td>
<td style="width: 25%;">Global Medical Centre</td>
<td style="width: 20%;">Samakhushi, KTM&nbsp;</td>
<td style="width: 20%;">3C-00160&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">158</td>
<td style="width: 25%;">Reliable Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Biratnagar, Morang&nbsp;</td>
<td style="width: 20%;">1C-00161&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">159</td>
<td style="width: 25%;">Subha Swastik Polyclinic</td>
<td style="width: 20%;">Biratnagar, Morang&nbsp;</td>
<td style="width: 20%;">1C-00162&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">160</td>
<td style="width: 25%;">Chhatrapati Nisulka Chikitsalaya</td>
<td style="width: 20%;">Chhetrapati, KTM&nbsp;</td>
<td style="width: 20%;">3C-00163&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">161</td>
<td style="width: 25%;">Labone Diagnostics</td>
<td style="width: 20%;">Kamalpokhari, KTM&nbsp;</td>
<td style="width: 20%;">3C-00164&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">163</td>
<td style="width: 25%;">Sudha Health &amp; Medical Centre</td>
<td style="width: 20%;">Maharajgunj, KTM&nbsp;</td>
<td style="width: 20%;">3C-00165&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">164</td>
<td style="width: 25%;">Sarbottam Medical&nbsp;<br />Centre</td>
<td style="width: 20%;">Basundhara, KTM&nbsp;</td>
<td style="width: 20%;">3C-00166&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">165</td>
<td style="width: 25%;">Nepal Cardiac, Diabetes &amp; Thyroid Centre</td>
<td style="width: 20%;">Lazimpat, KTM&nbsp;</td>
<td style="width: 20%;">3C-00167&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">167</td>
<td style="width: 25%;">Saffal Medical Centre</td>
<td style="width: 20%;">Sinamangal, KTM&nbsp;</td>
<td style="width: 20%;">3C-00137&nbsp;</td>
<td style="width: 20%;">2078-10-8&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">168</td>
<td style="width: 25%;">Alfoesco Polyclinic &amp; Diagnostic</td>
<td style="width: 20%;">Gongabu, KTM&nbsp;</td>
<td style="width: 20%;">3C-00168&nbsp;</td>
<td style="width: 20%;">2078-11-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">169</td>
<td style="width: 25%;">Paradise International Medical Centre</td>
<td style="width: 20%;">Kupandol, Lalitpur&nbsp;</td>
<td style="width: 20%;">3C-00170&nbsp;</td>
<td style="width: 20%;">2078-12-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">170</td>
<td style="width: 25%;">International Quality Health Care Centre</td>
<td style="width: 20%;">Panipokhari, KTM&nbsp;</td>
<td style="width: 20%;">3C-00169&nbsp;</td>
<td style="width: 20%;">2078-12-12&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">171</td>
<td style="width: 25%;">National Path Lab &amp; Research Centre</td>
<td style="width: 20%;">Dhangadhi, Kailali&nbsp;</td>
<td style="width: 20%;">7C-00171&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">172</td>
<td style="width: 25%;">Remind Medical Centre</td>
<td style="width: 20%;">New buspark, KTM&nbsp;</td>
<td style="width: 20%;">3C-00172&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">173</td>
<td style="width: 25%;">Parampara Divya Ayurved Ausadhalaya</td>
<td style="width: 20%;">Bouddha, KTM&nbsp;</td>
<td style="width: 20%;">3C-00173&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">174</td>
<td style="width: 25%;">Shantipur Polyclinic</td>
<td style="width: 20%;">Thulo Bharyang, KTM&nbsp;</td>
<td style="width: 20%;">3C-00174&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">175</td>
<td style="width: 25%;">Mahalaxmi Laboratory &amp; Diagnostic Clinic</td>
<td style="width: 20%;">Luvu, Lalitpur&nbsp;</td>
<td style="width: 20%;">3C-00175&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">176</td>
<td style="width: 25%;">Munal Diagnostic Centre</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00176&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">177</td>
<td style="width: 25%;">Universal Diagnostic Centre</td>
<td style="width: 20%;">Pingalasthan, KTM&nbsp;</td>
<td style="width: 20%;">3C-00177&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">178</td>
<td style="width: 25%;">Sai Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Newbaneshwor, KTM&nbsp;</td>
<td style="width: 20%;">3C-00178&nbsp;</td>
<td style="width: 20%;">2078-12-27&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">179</td>
<td style="width: 25%;">Basuki Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Jorpati, KTM&nbsp;</td>
<td style="width: 20%;">3C-00179&nbsp;</td>
<td style="width: 20%;">2078-12-28&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">180</td>
<td style="width: 25%;">Pathibhara Medical Centre</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00180&nbsp;</td>
<td style="width: 20%;">2079-1-1</td>
</tr>
<tr>
<td style="width: 5%;">181</td>
<td style="width: 25%;">Budha Sai Diagnostic Centre</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00181&nbsp;</td>
<td style="width: 20%;">2079-1-1</td>
</tr>
<tr>
<td style="width: 5%;">182</td>
<td style="width: 25%;">Itahari Medical &amp; Swasthya Upachar Clinic</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00182&nbsp;</td>
<td style="width: 20%;">2079-1-1</td>
</tr>
<tr>
<td style="width: 5%;">183</td>
<td style="width: 25%;">Everest International Polyclinic &amp; Diagnostic</td>
<td style="width: 20%;">Nepalgunj, Banke&nbsp;</td>
<td style="width: 20%;">5C-00183&nbsp;</td>
<td style="width: 20%;">2079-1-1</td>
</tr>
<tr>
<td style="width: 5%;">184</td>
<td style="width: 25%;">San Raj Health Care</td>
<td style="width: 20%;">Dhading&nbsp;</td>
<td style="width: 20%;">3C-00184&nbsp;</td>
<td style="width: 20%;">2079-1-3&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">185</td>
<td style="width: 25%;">Palpali Polyclinic</td>
<td style="width: 20%;">Tulsipur, Dang&nbsp;</td>
<td style="width: 20%;">5C-00185&nbsp;</td>
<td style="width: 20%;">2079-1-4&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">186</td>
<td style="width: 25%;">South Asian Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Tokha, KTM&nbsp;</td>
<td style="width: 20%;">3C-00186&nbsp;</td>
<td style="width: 20%;">2079-1-9&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">187</td>
<td style="width: 25%;">Apex Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Jadibuti, KTM&nbsp;</td>
<td style="width: 20%;">3C-00188&nbsp;</td>
<td style="width: 20%;">2079-1-15&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">188</td>
<td style="width: 25%;">Pradhan Diagnostic Centre</td>
<td style="width: 20%;">Birtamod, Jhapa&nbsp;</td>
<td style="width: 20%;">1C-00189&nbsp;</td>
<td style="width: 20%;">2079-1-15&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">189</td>
<td style="width: 25%;">Ratna Polyclinic &amp; Medical Centre</td>
<td style="width: 20%;">Nagdhunga, Pokhara&nbsp;</td>
<td style="width: 20%;">4C-00190&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">190</td>
<td style="width: 25%;">Advance Multispeciality Hospital</td>
<td style="width: 20%;">Damak, Jhapa&nbsp;</td>
<td style="width: 20%;">1C-00187&nbsp;&nbsp;</td>
<td style="width: 20%;">2079-1-15&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">191</td>
<td style="width: 25%;">Siddhartha Pathology Clinic</td>
<td style="width: 20%;">Pokhara, Kaski&nbsp;</td>
<td style="width: 20%;">4C-00191&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">192</td>
<td style="width: 25%;">Manjushree Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Dharan, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00192&nbsp;&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">193</td>
<td style="width: 25%;">Sunsari Diagnostic Centre</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00193&nbsp;&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">194</td>
<td style="width: 25%;">Samaj Kalyan Polyclinic &amp; Diagnostic Centre</td>
<td style="width: 20%;">Itahari, Sunsari&nbsp;</td>
<td style="width: 20%;">1C-00194&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">195</td>
<td style="width: 25%;">Friendship Health Care Centre</td>
<td style="width: 20%;">Tokha, KTM&nbsp;</td>
<td style="width: 20%;">3C-00195&nbsp;&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
<tr>
<td style="width: 5%;">196</td>
<td style="width: 25%;">Reliance Medicare Centre</td>
<td style="width: 20%;">Janakpur&nbsp;</td>
<td style="width: 20%;">2C-00196&nbsp;&nbsp;</td>
<td style="width: 20%;">2079-1-16&nbsp;</td>
</tr>
</tbody>
</table>
<h2>Category D Laboratories</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&lt;</p>
<table class="table table-hover table-bordered" style="margin-bottom: 70px; width: 628px;">
<thead>
<tr style="height: 17px;">
<th style="width: 36px; text-align: center; height: 17px;"><strong>S.No.</strong></th>
<th style="width: 166px; text-align: center; height: 17px;"><strong>Laboratory</strong></th>
<th style="width: 132px; height: 17px;"><strong>Address</strong></th>
<th style="width: 133px; height: 17px;"><strong>License No.</strong></th>
<th style="width: 133px; height: 17px;"><strong>Expiry Date</strong></th>
</tr>
</thead>
<tbody>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">1</td>
<td style="width: 166px; height: 17px;">Lalitpur G.P. Clinic</td>
<td style="width: 132px; height: 17px;">Lagankhel, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00001</td>
<td style="width: 133px; height: 17px;">08-17-2018</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">2</td>
<td style="width: 166px; height: 34px;">Kharibot Community Treatment Centre</td>
<td style="width: 132px; height: 34px;">Kharibot, Balaju, KTM</td>
<td style="width: 133px; height: 34px;">3D-00002</td>
<td style="width: 133px; height: 34px;">09-12-2018</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">3</td>
<td style="width: 166px; height: 17px;">Pahichan Polyclinic Pvt. Ltd.</td>
<td style="width: 132px; height: 17px;">Samakhushi-26, KTM</td>
<td style="width: 133px; height: 17px;">3D-00003</td>
<td style="width: 133px; height: 17px;">10-26-2018</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">4</td>
<td style="width: 166px; height: 34px;">Health Care Pathology Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">KMC-16, Balaju, KTM</td>
<td style="width: 133px; height: 34px;">3D-00004</td>
<td style="width: 133px; height: 34px;"><strong>11-08-2018</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">5</td>
<td style="width: 166px; height: 34px;">Rachana Ayurved and Ortho-Neuro Rehabilitation Centre</td>
<td style="width: 132px; height: 34px;">Lagankhel, Lalitpur</td>
<td style="width: 133px; height: 34px;">3D-00005</td>
<td style="width: 133px; height: 34px;"><strong>03-23-2022</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">6</td>
<td style="width: 166px; height: 34px;">Sagar Pathology Lab Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Naradevi-18, KTM</td>
<td style="width: 133px; height: 34px;">3D-00006</td>
<td style="width: 133px; height: 34px;"><strong>12-03-2018</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">7</td>
<td style="width: 166px; height: 17px;">Samartha Path Lab</td>
<td style="width: 132px; height: 17px;">Maharajgunj-3, KTM</td>
<td style="width: 133px; height: 17px;">3D-00007</td>
<td style="width: 133px; height: 17px;"><strong>12-03-2018</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">8</td>
<td style="width: 166px; height: 34px;">Standard Path Labs</td>
<td style="width: 132px; height: 34px;">Budhanilkantha-12, KTM</td>
<td style="width: 133px; height: 34px;">3D-00008</td>
<td style="width: 133px; height: 34px;"><strong>12-04-2018</strong></td>
</tr>
<tr style="height: 51px;">
<td style="width: 36px; height: 51px;">9</td>
<td style="width: 166px; height: 51px;">Neon Health Clinic Pvt. Ltd.</td>
<td style="width: 132px; height: 51px;">Kapan, Budhanilkantha-10, KTM</td>
<td style="width: 133px; height: 51px;">3D-00009</td>
<td style="width: 133px; height: 51px;"><strong>12-04-2018</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">10</td>
<td style="width: 166px; height: 34px;">Baidik Ayurveda Sewa Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Tyanglaphat, Kirtipur</td>
<td style="width: 133px; height: 34px;">3D-00010</td>
<td style="width: 133px; height: 34px;"><strong>12-25-2018</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">11</td>
<td style="width: 166px; height: 34px;">Parikshit Public Health Centre (Clinic)</td>
<td style="width: 132px; height: 34px;">Mahalaxmi Na.Pa.-5, Lalitpur</td>
<td style="width: 133px; height: 34px;">3D-00011</td>
<td style="width: 133px; height: 34px;"><strong>12-25-2018</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">12</td>
<td style="width: 166px; height: 34px;">Ganga Heart Clinic P. Ltd</td>
<td style="width: 132px; height: 34px;">Mid Baneshwor, Lalitpur</td>
<td style="width: 133px; height: 34px;">3D-00012</td>
<td style="width: 133px; height: 34px;"><strong>01-16-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">13</td>
<td style="width: 166px; height: 17px;">Elite Pathology Lab</td>
<td style="width: 132px; height: 17px;">Birgunj, Parsa</td>
<td style="width: 133px; height: 17px;">2D-00013</td>
<td style="width: 133px; height: 17px;"><strong>01-27-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">14</td>
<td style="width: 166px; height: 17px;">Accurate Pathology P. Ltd.</td>
<td style="width: 132px; height: 17px;">Kuleshwor, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00014</td>
<td style="width: 133px; height: 17px;"><strong>02-13-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">15</td>
<td style="width: 166px; height: 34px;">Bagmati Health Hub P. Ltd.</td>
<td style="width: 132px; height: 34px;">Sinamangal, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00015</td>
<td style="width: 133px; height: 34px;"><strong>03-24-2022</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">16</td>
<td style="width: 166px; height: 17px;">Manakamana Pathology</td>
<td style="width: 132px; height: 17px;">Toulihawa, Kapilvastu</td>
<td style="width: 133px; height: 17px;">5D-00016</td>
<td style="width: 133px; height: 17px;"><strong>02-13-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">17</td>
<td style="width: 166px; height: 34px;">Kathmandu ENT Hospital &amp; Research Centre P. Ltd.</td>
<td style="width: 132px; height: 34px;">Addait Marg, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00017</td>
<td style="width: 133px; height: 34px;"><strong>01-16-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">18</td>
<td style="width: 166px; height: 17px;">Bharat Clinic P. Ltd.</td>
<td style="width: 132px; height: 17px;">Khumaltar, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00018</td>
<td style="width: 133px; height: 17px;"><strong>12-25-2018</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">19</td>
<td style="width: 166px; height: 34px;">Sanjeewani Health Clinic Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Thimi, Bhaktapur</td>
<td style="width: 133px; height: 34px;">3D-00019</td>
<td style="width: 133px; height: 34px;"><strong>03-15-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">20</td>
<td style="width: 166px; height: 17px;">S&amp;B Health Care Diagnostic</td>
<td style="width: 132px; height: 17px;">Imadol, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00020</td>
<td style="width: 133px; height: 17px;"><strong>03-15-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">21</td>
<td style="width: 166px; height: 17px;">Panacea "H" Clinic P. Ltd.</td>
<td style="width: 132px; height: 17px;">Ratopool, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00021</td>
<td style="width: 133px; height: 17px;"><strong>03-15-2021</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">22</td>
<td style="width: 166px; height: 34px;">Sai Shankar Health Care P. Ltd</td>
<td style="width: 132px; height: 34px;">Sifal, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00022</td>
<td style="width: 133px; height: 34px;"><strong>03-29-2021</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">23</td>
<td style="width: 166px; height: 34px;">Rajdhani Diagnostic Laboratory Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Chuchepati, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00023</td>
<td style="width: 133px; height: 34px;"><strong>03-15-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">24</td>
<td style="width: 166px; height: 34px;">Shanta Global Pathology P. Ltd.</td>
<td style="width: 132px; height: 34px;">Maitidevi, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00024</td>
<td style="width: 133px; height: 34px;"><strong>03-17-2021</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">25</td>
<td style="width: 166px; height: 34px;">Aaradhana Health Care Centre P. Ltd.</td>
<td style="width: 132px; height: 34px;">Tokha, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00025</td>
<td style="width: 133px; height: 34px;"><strong>03-18-2021</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">26</td>
<td style="width: 166px; height: 17px;">Baidik Ayurveda Sewa P. Ltd.</td>
<td style="width: 132px; height: 17px;">Tyanglaphat, Kirtipur</td>
<td style="width: 133px; height: 17px;">3D-00026</td>
<td style="width: 133px; height: 17px;"><strong>03-19-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">27</td>
<td style="width: 166px; height: 17px;">Moulshree Diagnostic P. Ltd.</td>
<td style="width: 132px; height: 17px;">Manohara, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00027</td>
<td style="width: 133px; height: 17px;"><strong>03-21-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">28</td>
<td style="width: 166px; height: 17px;">Reddy Pathology P. Ltd.</td>
<td style="width: 132px; height: 17px;">Old Baneshwor, KTM</td>
<td style="width: 133px; height: 17px;">3D-00028</td>
<td style="width: 133px; height: 17px;"><strong>03-21-2021</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">29</td>
<td style="width: 166px; height: 34px;">Life International Clinic P. Ltd.</td>
<td style="width: 132px; height: 34px;">Mid Baneshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00029</td>
<td style="width: 133px; height: 34px;"><strong>03-21-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">30</td>
<td style="width: 166px; height: 34px;">Pulse Health Care &amp; Diagnostics P. Ltd.</td>
<td style="width: 132px; height: 34px;">Mid Baneshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00030</td>
<td style="width: 133px; height: 34px;"><strong>03-21-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">31</td>
<td style="width: 166px; height: 17px;">Sewa Society Clinic P. Ltd.</td>
<td style="width: 132px; height: 17px;">Kalanki, KTM</td>
<td style="width: 133px; height: 17px;">3D-00031</td>
<td style="width: 133px; height: 17px;"><strong>03-30-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">32</td>
<td style="width: 166px; height: 34px;">Shuvakamana Pathology Laboratory</td>
<td style="width: 132px; height: 34px;">Tarkeshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00032</td>
<td style="width: 133px; height: 34px;"><strong>03-29-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">33</td>
<td style="width: 166px; height: 34px;">Reliable Health Care Pathology Lab. P. Ltd.</td>
<td style="width: 132px; height: 34px;">New Baneshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00033</td>
<td style="width: 133px; height: 34px;"><strong>03-29-2021</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">34</td>
<td style="width: 166px; height: 34px;">Mahalaxmi Clinic and Diagnostic Centre P. Ltd.</td>
<td style="width: 132px; height: 34px;">Imadol, Lalitpur</td>
<td style="width: 133px; height: 34px;">3D-00034</td>
<td style="width: 133px; height: 34px;"><strong>03-29-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">35</td>
<td style="width: 166px; height: 17px;">Suhani Diagnostic Lab P. Ltd.</td>
<td style="width: 132px; height: 17px;">Netragunj, Sarlahi</td>
<td style="width: 133px; height: 17px;">2D-00035</td>
<td style="width: 133px; height: 17px;"><strong>04-08-2019</strong></td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">36</td>
<td style="width: 166px; height: 34px;">Dhapakhel Health Clinic P. Ltd.</td>
<td style="width: 132px; height: 34px;">Dhapakhel, Lalitpur</td>
<td style="width: 133px; height: 34px;">3D-00036</td>
<td style="width: 133px; height: 34px;"><strong>03-29-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">37</td>
<td style="width: 166px; height: 17px;">Chandol Pathology Lab</td>
<td style="width: 132px; height: 17px;">Chandol, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00037</td>
<td style="width: 133px; height: 17px;"><strong>03-29-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">38</td>
<td style="width: 166px; height: 17px;">Sofiya Swasthya Sewa P. Ltd.</td>
<td style="width: 132px; height: 17px;">Baniyatar, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00038</td>
<td style="width: 133px; height: 17px;"><strong>03-29-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">39</td>
<td style="width: 166px; height: 17px;">Hema Pathology Lab</td>
<td style="width: 132px; height: 17px;">Biratnagar, Morang</td>
<td style="width: 133px; height: 17px;">1D-00040</td>
<td style="width: 133px; height: 17px;"><strong>04-08-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">40</td>
<td style="width: 166px; height: 17px;">Om Pathology Centre</td>
<td style="width: 132px; height: 17px;">Birgunj, Parsa</td>
<td style="width: 133px; height: 17px;">2D-00041</td>
<td style="width: 133px; height: 17px;"><strong>04-08-2019</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">41</td>
<td style="width: 166px; height: 17px;">Archita Diagnostic Centre</td>
<td style="width: 132px; height: 17px;">Birta, Birgunj, Parsa</td>
<td style="width: 133px; height: 17px;">2D-00042</td>
<td style="width: 133px; height: 17px;"><strong>04-08-2021</strong></td>
</tr>
<tr style="height: 39px;">
<td style="width: 36px; height: 39px;">42</td>
<td style="width: 166px; height: 39px;">Arpita Diagnostic and Research Centre&nbsp;</td>
<td style="width: 132px; height: 39px;">Birta, Birgunj, Parsa</td>
<td style="width: 133px; height: 39px;">2D-00043</td>
<td style="width: 133px; height: 39px;">
<p><strong>04-08-2021</strong></p>
</td>
</tr>
<tr style="height: 39px;">
<td style="width: 36px; height: 39px;">43</td>
<td style="width: 166px; height: 39px;">Shree Ram Diagnostic Centre</td>
<td style="width: 132px; height: 39px;">Birgunj, Parsa</td>
<td style="width: 133px; height: 39px;">2D-00044</td>
<td style="width: 133px; height: 39px;">
<p><strong>04-08-2019</strong></p>
</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">&nbsp;44</td>
<td style="width: 166px; height: 17px;">Agrata Health Care Pvt. Ltd.</td>
<td style="width: 132px; height: 17px;">Koteshwor, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00045</td>
<td style="width: 133px; height: 17px;">04-08-2019</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">45</td>
<td style="width: 166px; height: 17px;">Swostik Referral Laboratory</td>
<td style="width: 132px; height: 17px;">Dhangadi, Kailali</td>
<td style="width: 133px; height: 17px;">6D-00046</td>
<td style="width: 133px; height: 17px;">04-11-2021</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">46</td>
<td style="width: 166px; height: 17px;">Lifeline Pathology</td>
<td style="width: 132px; height: 17px;">Dhangadi, Kailali</td>
<td style="width: 133px; height: 17px;">6D-00047</td>
<td style="width: 133px; height: 17px;">04-11-2029</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">47</td>
<td style="width: 166px; height: 17px;">Yasin Clinic</td>
<td style="width: 132px; height: 17px;">Tokha, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-00048</td>
<td style="width: 133px; height: 17px;">04-17-2019</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">48</td>
<td style="width: 166px; height: 34px;">Kantipur Swasthya Sewa Kendra</td>
<td style="width: 132px; height: 34px;">Samakhushi, Kathmandu</td>
<td style="width: 133px; height: 34px;">3D-00049</td>
<td style="width: 133px; height: 34px;">04-17-2019</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">49</td>
<td style="width: 166px; height: 17px;">Dlight Plus Pathlab Pvt. Ltd.</td>
<td style="width: 132px; height: 17px;">Tarkeshwor, KTM</td>
<td style="width: 133px; height: 17px;">3D-00050</td>
<td style="width: 133px; height: 17px;">04-17-2019</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">50</td>
<td style="width: 166px; height: 17px;">Indrawoti Path Lab</td>
<td style="width: 132px; height: 17px;">Tarkeshwor, KTM</td>
<td style="width: 133px; height: 17px;">3D-00051</td>
<td style="width: 133px; height: 17px;">04-17-2019</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">51</td>
<td style="width: 166px; height: 17px;">Om Path Lab</td>
<td style="width: 132px; height: 17px;">&nbsp;Lagankhel, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00052</td>
<td style="width: 133px; height: 17px;">&nbsp;04-17-2019</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">52</td>
<td style="width: 166px; height: 34px;">Solu Health Care Centre Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Solukhumbu</td>
<td style="width: 133px; height: 34px;">1D-00053</td>
<td style="width: 133px; height: 34px;">04-22-2021</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">53</td>
<td style="width: 166px; height: 17px;">Anutosh Health Care Centre</td>
<td style="width: 132px; height: 17px;">Tarkeshwor, KTM</td>
<td style="width: 133px; height: 17px;">3D-00054</td>
<td style="width: 133px; height: 17px;">04-17-2019</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">54</td>
<td style="width: 166px; height: 34px;">Prestige Pathology Lab Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Thali, KTM</td>
<td style="width: 133px; height: 34px;">3D-00055</td>
<td style="width: 133px; height: 34px;">04-21-2021</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">55</td>
<td style="width: 166px; height: 17px;">Mahaboudha Clinic</td>
<td style="width: 132px; height: 17px;">Mahaboudha, KTM</td>
<td style="width: 133px; height: 17px;">3D-00056</td>
<td style="width: 133px; height: 17px;">04-21-2021</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">56</td>
<td style="width: 166px; height: 17px;">Om Health Diagnostic</td>
<td style="width: 132px; height: 17px;">Pyuthan Napa, Pyuthan</td>
<td style="width: 133px; height: 17px;">5D-00057</td>
<td style="width: 133px; height: 17px;">04-05-2019</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">57</td>
<td style="width: 166px; height: 17px;">Everest Pathology Pvt. Ltd.</td>
<td style="width: 132px; height: 17px;">Putalisadak, KTM</td>
<td style="width: 133px; height: 17px;">3D-00058</td>
<td style="width: 133px; height: 17px;">04-05-2019</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">58</td>
<td style="width: 166px; height: 34px;">Surya Janaswea Healthcare Pvt. Ltd.</td>
<td style="width: 132px; height: 34px;">Koteshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00059</td>
<td style="width: 133px; height: 34px;">04-23-2019</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">59</td>
<td style="width: 166px; height: 34px;">Talchikhel Medicine Pharma P. Ltd.</td>
<td style="width: 132px; height: 34px;">Talchikhel, Lalitpur</td>
<td style="width: 133px; height: 34px;">3D-00060</td>
<td style="width: 133px; height: 34px;">04-23-2021</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">60</td>
<td style="width: 166px; height: 34px;">Dirgha Jeevan Clinical Laboratory</td>
<td style="width: 132px; height: 34px;">Tripureshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00061</td>
<td style="width: 133px; height: 34px;">&nbsp;</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">61</td>
<td style="width: 166px; height: 17px;">Bageshwori Pathology</td>
<td style="width: 132px; height: 17px;">Satungal</td>
<td style="width: 133px; height: 17px;">3D-00062</td>
<td style="width: 133px; height: 17px;">&nbsp;</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">62</td>
<td style="width: 166px; height: 17px;">Perfect Path-lab</td>
<td style="width: 132px; height: 17px;">Golphutar</td>
<td style="width: 133px; height: 17px;">3D-00063</td>
<td style="width: 133px; height: 17px;">&nbsp;</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">64</td>
<td style="width: 166px; height: 17px;">Shanta Bhawan Clinic</td>
<td style="width: 132px; height: 17px;">Jorpati</td>
<td style="width: 133px; height: 17px;">&nbsp;</td>
<td style="width: 133px; height: 17px;">&nbsp;</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">65</td>
<td style="width: 166px; height: 17px;">Kripa Laboratory Clinic</td>
<td style="width: 132px; height: 17px;">Nayabazar, KTM</td>
<td style="width: 133px; height: 17px;">&nbsp;</td>
<td style="width: 133px; height: 17px;">05-04-2076</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">66</td>
<td style="width: 166px; height: 34px;">Moktan Health Care and Diagnostic Center</td>
<td style="width: 132px; height: 34px;">Sinamangal, KTM</td>
<td style="width: 133px; height: 34px;">&nbsp;3D-00065</td>
<td style="width: 133px; height: 34px;">06-13-2076</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">&nbsp;67</td>
<td style="width: 166px; height: 34px;">Gorkhali Health Pathology Lab</td>
<td style="width: 132px; height: 34px;">&nbsp;Nayabazaar, KTM</td>
<td style="width: 133px; height: 34px;">&nbsp;3D-00066</td>
<td style="width: 133px; height: 34px;">&nbsp;06-13-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">68</td>
<td style="width: 166px; height: 17px;">Buland Pathology</td>
<td style="width: 132px; height: 17px;">Samakhusi, KTM</td>
<td style="width: 133px; height: 17px;">3D-00067</td>
<td style="width: 133px; height: 17px;">06-17-2078</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">69</td>
<td style="width: 166px; height: 34px;">Sitapaila Sangam Ayurbedic Ausadhalaya</td>
<td style="width: 132px; height: 34px;">Sitapaila, KTM</td>
<td style="width: 133px; height: 34px;">3D-00068</td>
<td style="width: 133px; height: 34px;">06-06-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">70</td>
<td style="width: 166px; height: 17px;">Abhiyan Pathology Lab</td>
<td style="width: 132px; height: 17px;">Sitapaila, KTM</td>
<td style="width: 133px; height: 17px;">3D-00069</td>
<td style="width: 133px; height: 17px;">06-06-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">71</td>
<td style="width: 166px; height: 17px;">Citizen Pathology Lab</td>
<td style="width: 132px; height: 17px;">Nagarjun, KTM</td>
<td style="width: 133px; height: 17px;">3D-00070</td>
<td style="width: 133px; height: 17px;">06-06-2076</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">72</td>
<td style="width: 166px; height: 34px;">Keshav Ayurveda Hospital and Research Center</td>
<td style="width: 132px; height: 34px;">Shantinagar, KTM</td>
<td style="width: 133px; height: 34px;">3D-00071</td>
<td style="width: 133px; height: 34px;">06-13-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">73</td>
<td style="width: 166px; height: 17px;">Bishwojit Laboratory</td>
<td style="width: 132px; height: 17px;">Raptiroad, Hetauda</td>
<td style="width: 133px; height: 17px;">3D-00072</td>
<td style="width: 133px; height: 17px;">08-1-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">74</td>
<td style="width: 166px; height: 17px;">Vishwa Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Sittalchowk, Hetauda</td>
<td style="width: 133px; height: 17px;">3D-00073</td>
<td style="width: 133px; height: 17px;">08-1-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">75</td>
<td style="width: 166px; height: 17px;">Hetauda Diagnosis Center</td>
<td style="width: 132px; height: 17px;">Hetauda, Makwanpur</td>
<td style="width: 133px; height: 17px;">3D-00074</td>
<td style="width: 133px; height: 17px;">08-16-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">76</td>
<td style="width: 166px; height: 17px;">D.K. Pathology</td>
<td style="width: 132px; height: 17px;">Tikapur, Kailali</td>
<td style="width: 133px; height: 17px;">7D-00075</td>
<td style="width: 133px; height: 17px;">08-16-2076</td>
</tr>
<tr style="height: 34.0938px;">
<td style="width: 36px; height: 34.0938px;">77</td>
<td style="width: 166px; height: 34.0938px;">Nepal Skin and Aesthetic Center</td>
<td style="width: 132px; height: 34.0938px;">Chabahil, KTM</td>
<td style="width: 133px; height: 34.0938px;">3D-00076</td>
<td style="width: 133px; height: 34.0938px;">08-24-2076</td>
</tr>
<tr style="height: 34px;">
<td style="width: 36px; height: 34px;">78</td>
<td style="width: 166px; height: 34px;">Nepal Skin Hospital and Aesthetic Center</td>
<td style="width: 132px; height: 34px;">New Baneshwor, KTM</td>
<td style="width: 133px; height: 34px;">3D-00077</td>
<td style="width: 133px; height: 34px;">08-24-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">78</td>
<td style="width: 166px; height: 17px;">Rohit Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-00078</td>
<td style="width: 133px; height: 17px;">08-24-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">79</td>
<td style="width: 166px; height: 17px;">Sharon Health Clinic</td>
<td style="width: 132px; height: 17px;">Gaidakot, Nawalparasi</td>
<td style="width: 133px; height: 17px;">4D-00079</td>
<td style="width: 133px; height: 17px;">09-03-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">80</td>
<td style="width: 166px; height: 17px;">Dhangadhi Netralaya</td>
<td style="width: 132px; height: 17px;">Chatakpur, Dhangadhi</td>
<td style="width: 133px; height: 17px;">7D-00081</td>
<td style="width: 133px; height: 17px;">08-16-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">81</td>
<td style="width: 166px; height: 17px;">Astanga Ayurveda Hospital and Research Center</td>
<td style="width: 132px; height: 17px;">Kalanki, KTM</td>
<td style="width: 133px; height: 17px;">3D-00082</td>
<td style="width: 133px; height: 17px;">09-12-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">82</td>
<td style="width: 166px; height: 17px;">Brothers Health care and Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Suryabinayak, Bhaktapur</td>
<td style="width: 133px; height: 17px;">3D-00083</td>
<td style="width: 133px; height: 17px;">09-12-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">83</td>
<td style="width: 166px; height: 17px;">Hamro Sahayogi Hospital and BIrthing Center</td>
<td style="width: 132px; height: 17px;">Jadibuti, KTM</td>
<td style="width: 133px; height: 17px;">3D-00084</td>
<td style="width: 133px; height: 17px;">09-12-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">84</td>
<td style="width: 166px; height: 17px;">Ortho Neuro Health Care</td>
<td style="width: 132px; height: 17px;">Patan, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00085</td>
<td style="width: 133px; height: 17px;">10-07-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">85</td>
<td style="width: 166px; height: 17px;">Om Sai Manakamana Arogya Center</td>
<td style="width: 132px; height: 17px;">Itahari, Sunsari</td>
<td style="width: 133px; height: 17px;">1D-00086</td>
<td style="width: 133px; height: 17px;">11-04-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">86</td>
<td style="width: 166px; height: 17px;">Sahakriya Pathology</td>
<td style="width: 132px; height: 17px;">Pyuthan</td>
<td style="width: 133px; height: 17px;">5D-00087</td>
<td style="width: 133px; height: 17px;">11-04-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">87</td>
<td style="width: 166px; height: 17px;">Bungmati Health Care Center</td>
<td style="width: 132px; height: 17px;">Bungamati, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00088</td>
<td style="width: 133px; height: 17px;">11-04-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">88</td>
<td style="width: 166px; height: 17px;">Bhagawati Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Tikathali, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-00089</td>
<td style="width: 133px; height: 17px;">12-09-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">89</td>
<td style="width: 166px; height: 17px;">Rachana Ayurved and Ortho Neuro Rehabilitation Center</td>
<td style="width: 132px; height: 17px;">Lagankhel, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-05</td>
<td style="width: 133px; height: 17px;">12-09-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">90</td>
<td style="width: 166px; height: 17px;">Valley Maternity Pathology Clinic</td>
<td style="width: 132px; height: 17px;">Putalisadak, KTM</td>
<td style="width: 133px; height: 17px;">3D-10</td>
<td style="width: 133px; height: 17px;">12-09-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">91</td>
<td style="width: 166px; height: 17px;">Bagmati Health Hub</td>
<td style="width: 132px; height: 17px;">Sinamangal, KTM</td>
<td style="width: 133px; height: 17px;">3D-15</td>
<td style="width: 133px; height: 17px;">12-10-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">92</td>
<td style="width: 166px; height: 17px;">Shanta Bhawan Clinic</td>
<td style="width: 132px; height: 17px;">Jorpati, KTM</td>
<td style="width: 133px; height: 17px;">3D-64</td>
<td style="width: 133px; height: 17px;">03-30-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">93</td>
<td style="width: 166px; height: 17px;">Aarogya Sahayogi Health Care Center</td>
<td style="width: 132px; height: 17px;">Manohara, KTM</td>
<td style="width: 133px; height: 17px;">3D-90</td>
<td style="width: 133px; height: 17px;">12-11-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">94</td>
<td style="width: 166px; height: 17px;">D.T. Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-91</td>
<td style="width: 133px; height: 17px;">12-12-2076</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">95</td>
<td style="width: 166px; height: 17px;">Ronic Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-92</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">96</td>
<td style="width: 166px; height: 17px;">Ganesh Clinic</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-93</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">97</td>
<td style="width: 166px; height: 17px;">Fewa Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-94</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">98</td>
<td style="width: 166px; height: 17px;">Chitwan Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-95</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">99</td>
<td style="width: 166px; height: 17px;">Elite Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-96</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">100</td>
<td style="width: 166px; height: 17px;">Shova Bhagawati Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-97</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">101</td>
<td style="width: 166px; height: 17px;">Sewa Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-98</td>
<td style="width: 133px; height: 17px;">01-03-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">102</td>
<td style="width: 166px; height: 17px;">Rudreshwor Clinic and Pathology</td>
<td style="width: 132px; height: 17px;">Mahalaxmi-4, Lalitpur</td>
<td style="width: 133px; height: 17px;">3D-99</td>
<td style="width: 133px; height: 17px;">01-03-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">103</td>
<td style="width: 166px; height: 17px;">Mediline Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Thimi, Bhaktapur</td>
<td style="width: 133px; height: 17px;">3D-100</td>
<td style="width: 133px; height: 17px;">01-15-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">104</td>
<td style="width: 166px; height: 17px;">Suhani Diagnostic Lab&nbsp;</td>
<td style="width: 132px; height: 17px;">&nbsp;Netragunj, Saralahi</td>
<td style="width: 133px; height: 17px;">2D-35</td>
<td style="width: 133px; height: 17px;">01-15-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">105</td>
<td style="width: 166px; height: 17px;">Kathmandu E.N.T. Hospital</td>
<td style="width: 132px; height: 17px;">Bagbazar, KTM</td>
<td style="width: 133px; height: 17px;">3D-11</td>
<td style="width: 133px; height: 17px;">01-15-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">106&nbsp;</td>
<td style="width: 166px; height: 17px;">S and B Health Care Diagnostic Center&nbsp;</td>
<td style="width: 132px; height: 17px;">Imadol, Lalitpur&nbsp;</td>
<td style="width: 133px; height: 17px;">3D-20</td>
<td style="width: 133px; height: 17px;">12-11-2078</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">107</td>
<td style="width: 166px; height: 17px;">Adhikari Advance Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Itahari-4, Sunsari</td>
<td style="width: 133px; height: 17px;">1D-101</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">108</td>
<td style="width: 166px; height: 17px;">Dhanwantari Pathology</td>
<td style="width: 132px; height: 17px;">Bharatpur, Chitwan</td>
<td style="width: 133px; height: 17px;">3D-102</td>
<td style="width: 133px; height: 17px;">01-16-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">109</td>
<td style="width: 166px; height: 17px;">Pristine Health Care Center Pvt. Ltd.</td>
<td style="width: 132px; height: 17px;">Greenland, Kathmandu</td>
<td style="width: 133px; height: 17px;">3D-103</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">110</td>
<td style="width: 166px; height: 17px;">National Community Health Care Center</td>
<td style="width: 132px; height: 17px;">Suryabinayak, KTM</td>
<td style="width: 133px; height: 17px;">3D-104</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">111</td>
<td style="width: 166px; height: 17px;">Sure Trust Pathology Laboratory</td>
<td style="width: 132px; height: 17px;">Kavresthali, KTM</td>
<td style="width: 133px; height: 17px;">3D-105</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">112</td>
<td style="width: 166px; height: 17px;">Cardinal Health Foundation</td>
<td style="width: 132px; height: 17px;">Balaju-16, KTM</td>
<td style="width: 133px; height: 17px;">3D-106</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">113</td>
<td style="width: 166px; height: 17px;">K.T.M. Health Care Center</td>
<td style="width: 132px; height: 17px;">Balaju-16, KTM</td>
<td style="width: 133px; height: 17px;">3D-107</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">114</td>
<td style="width: 166px; height: 17px;">Neon Health Clinic</td>
<td style="width: 132px; height: 17px;">Kapan, KTM</td>
<td style="width: 133px; height: 17px;">3D-09</td>
<td style="width: 133px; height: 17px;">01-16-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">115</td>
<td style="width: 166px; height: 17px;">Shuvakamana Pathology Laboratory</td>
<td style="width: 132px; height: 17px;">Tarkeshwor, KTM</td>
<td style="width: 133px; height: 17px;">3D-32</td>
<td style="width: 133px; height: 17px;">01-16-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">116</td>
<td style="width: 166px; height: 17px;">Purwanchal Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Dharan, Sunsari</td>
<td style="width: 133px; height: 17px;">3D-108</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">117</td>
<td style="width: 166px; height: 17px;">Pandit Pathology Lab</td>
<td style="width: 132px; height: 17px;">Janakpur</td>
<td style="width: 133px; height: 17px;">2D-109</td>
<td style="width: 133px; height: 17px;">01-16-2079</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">118</td>
<td style="width: 166px; height: 17px;">The Asia Diagnostic and Medical Center</td>
<td style="width: 132px; height: 17px;">Birgunj, Parsa</td>
<td style="width: 133px; height: 17px;">2D-110</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">119</td>
<td style="width: 166px; height: 17px;">Paropakar Central Clinic</td>
<td style="width: 132px; height: 17px;">Bhimsenthan, KTM</td>
<td style="width: 133px; height: 17px;">3D-111</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">120</td>
<td style="width: 166px; height: 17px;">Rakshit Diagnostics</td>
<td style="width: 132px; height: 17px;">Taulihawa-1, Kapilvastu</td>
<td style="width: 133px; height: 17px;">5D-112</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">121</td>
<td style="width: 166px; height: 17px;">Tarkeshwar Clinic</td>
<td style="width: 132px; height: 17px;">Tankeshwor-5, KTM</td>
<td style="width: 133px; height: 17px;">3D-116</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
<tr style="height: 17px;">
<td style="width: 36px; height: 17px;">122</td>
<td style="width: 166px; height: 17px;">Uday Diagnostic Center</td>
<td style="width: 132px; height: 17px;">Janakpur</td>
<td style="width: 133px; height: 17px;">2D-117</td>
<td style="width: 133px; height: 17px;">01-16-2077</td>
</tr>
</tbody>
</table>
    </div>
</div>
	
<footer>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Us</h5>
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5></h5>
						<p>
						
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Sunday - Saturday, 6am to 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> 01-533779
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> cosmoscollege@edu.np
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>Satdobato Lalitpur,Nepal</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2019- Cosmos Medical Group. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/"></a></p>
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>	
	
</body>

</html>
