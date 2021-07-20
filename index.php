<?php 
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<style>
		.container ul li a
			{
				background-color: maroon;
				color: white;
			}
				.container ul li a:hover
			{
				background-color: maroon;
				color: yellow;
			}
		
		</style>
	</head>
	<body style="background-color:white;padding-top:50px;">
		<header>
			<nav class="navbar navbar-fixed-top" style="background:maroon">
				<div class="container">
					<ul class="nav navbar-nav navbar-left">
						<li><a href="index.php"><strong>RiT Online Notice Board</strong></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
						<li><a href="index.php?option=contact"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
						<li><a href="index.php?option=admin"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
						<li><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> User Sign Up</a></li>
						<li><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> User Login</a></li>
					</ul>
				</div>
			</nav>	
		</header>
		<div class="container-fluid" style="padding:0px;">
<!-- slider -->
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
  				<ol class="carousel-indicators">
    				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  				</ol>
<!-- Wrapper for slides -->
  				<div class="carousel-inner" role="listbox">
    				<div class="item active">
      					<img src="images/ritt.jpg" alt="...">
      					<div class="carousel-caption">
						...
      					</div>
    				</div>
    				<div class="item">
      					<img src="images/rit.jpg" alt="...">
						<div class="carousel-caption">
						...
						</div>
    				</div>
					<div class="item">
					  <img src="images/rittt.jpg" alt="...">
					  <div class="carousel-caption">
						...
					  </div>
    				</div>
					...
  				</div>
<!-- Controls -->
			</div>
<!-- slider end-->
		</div>
		<div class="container">
			<div class="row">
<!-- container -->
				<div class="col-sm-8">
				<?php 
					@$opt=$_GET['option'];
					if($opt!="")
					{
						if($opt=="about")
						{
							include('about.php');
						}
						else if($opt=="contact")
						{
							include('contact.php');
						}

						else if($opt=="New_user")
						{
							include('registration.php');
						}
						else if($opt=="login")
						{
							include('login.php');
						}
						else if($opt=="admin")
						{
							include('admin/login.php');
						}
					}
					else
					{
						echo "<h2></h2>
						Rajeev Institute of Technology was started as one in the galaxy of Technical Colleges in the year 2008. Rajeev Institute of Technology in Hassan was established under the aegis of Rajeev Education Trust. It has carved a niche for itself as a premier centre for Technical Education.
You'll find that everything at RIT is single mindedly focused on addressing student needs. We are clear that it is our responsibility to help our students realize their goals in an increasingly competitive world. We have consistently produced excellent results and RIT alumni can be found at premier organizations in India and overseas. From academic excellence to leadership qualities, a nurturing environment to cutting edge infrastructure, RIT offers everything you need to succeed.
At RIT, prepare to be constantly challenged, whether it is in the classroom or outside. You can look forward to being trained by stellar faculty, getting hands on experience at leading organizations and building enduring bonds with your peers.
All professional education is driven ultimately by practical societal needs. Nevertheless, these needs can be connected to deeper concerns that are the normal subjects of pure academic inquiry. Certainly, academic inquiry in the engineering, social sciences and even many of the natural sciences is driven by interests in practical issues as much as by the pursuit of knowledge for its own sake.
To embark on a journey of triumph one needs the paraphernalia of knowledge, opportunity and skills to create values. In order to initiate these values Rajeev Institute of Technology an affiliated college of Visvesvaraya Technological University, approved by All India Council for Technical Education (AICTE) is a unique initiative of Rajeev Education Trust started in December 1998 under the aegis of Dr. V. Rajeev a medical practitioner and philanthropist of Hassan.
Established in 2008, Rajeev Institute of Technology offers 4 year engineering courses and has a total of 6 Academic Departments, 4 Postgraduate and Interdisciplinary Programm. It is reputed for the quality of its faculty and the outstanding calibre of students graduating from its undergraduate and postgraduate programmes. The institute has holistic approach towards education and training. We at RIT systematize professional manpower for tomorrow and future. In quest of this commitment, the management and faculty accept the responsibility to ensure ceaseless progress towards this objective.
The Rajeev Educational Trust was started by people of noble thoughts, who aimed at bringing about quality education and also to serve members of the society at a large scale. The institution is managed by Dr. Rajeev who is the President of the trust and paediatrician of Rajeev Hospital and Dr. B.N Rathna Rajeev who is the secretary of the trust. Rajeev Hospital started in which helps the students gain therepractical experiences as well as provide quality treatment to the patients.
";
					}
				?>
			</div>
<!-- container -->
			<div class="col-sm-4">
				<div class="panel panel-default" style="border-color:maroon;">
					<div class="panel-heading" style="background-color:maroon;color:white;">Latest update</div>
				  	<div class="panel-body">
						The notice or update that relates to everyone in the college is displayed hear
				  	</div>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<br/>
	<br/>
	<br/>
<!-- footer-->
	<footer style="padding:0px;height:20px;">
		<nav  style="background:maroon;padding:10px;">
			<div class="container">
				<ul style="text-align:center;font-size:20px;">
					<li><a href="#">Adamos Technologies Pvt Lmt. Internship Project 2019</a></li>
				</ul>
			</div>
		</nav>
	</footer>
<!-- footer-->
	</body>
</html>