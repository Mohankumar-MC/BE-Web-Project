<?php 
session_start();
include('../connection.php');
$admin= $_SESSION['admin'];
if($admin=="")
{
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Online Notice Board Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	 #main
		{
			font-family: cursive;
			text-align: center;
			font-size: 300%;
			font-weight: 100;
		}
	  </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:maroon;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"  style="color:white;font-size:15px;padding-left:100px;">RiT Online Notice Board</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li id="logout"><a href="logout.php" style="color:white;padding-right:100px;font-size:15px;">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
         
			<!-- find users' image if image not found then show dummy image -->
			
			
            <li><a href="#"><img src="../images/person.jpg" width="100" height="100" alt="not found"/></a></li>
			
			
			<li><a href="index.php?page=update_password" style="color:maroon;"><span class="glyphicon glyphicon-user" style="color:black;"></span> Update Password</a></li>
            <li><a href="index.php?page=manage_users" style="color:maroon;"><span class="glyphicon glyphicon-user" style="color:black;"></span> Manage Users</a></li>
			 <li ><a href="index.php?page=notification" style="color:maroon;"><span class="glyphicon glyphicon-envelope" style="color:black;"></span> Mange  Notification</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
		  <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="manage_users")
			{
				include('manage_users.php');
			
			}
			
			if($page=="update_password")
			{
				include('update_password.php');
			
			}
			
			if($page=="notification")
			{
				include('display_notification.php');
			
			}
			
			if($page=="update_notice")
			{
				include('update_notice.php');
			
			}
			
			
			
			if($page=="add_notice")
			{
				include('add_notice.php');
			
			}
		  }
		  
		  else
		  {
		  ?>
		  <!-- container end-->
		  <div id="main">
			Welcome Admin
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
      					<img src="ritt.jpg" alt="...">
      					<div class="carousel-caption">
      					</div>
    				</div>
    				<div class="item">
      					<img src="rit.jpg" alt="...">
						<div class="carousel-caption">
						</div>
    				</div>
					<div class="item">
					  <img src="rittt.jpg" alt="...">
					  <div class="carousel-caption">
					  </div>
    				</div>
  				</div>
<!-- Controls -->
			</div>
<!-- slider end-->
		</div>
		</div>
		
		  
		  <?php } ?>
		  

         
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
