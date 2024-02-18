<?php include "config.php";

$fn1=basename($_SERVER['SCRIPT_FILENAME']);
$fn2=explode(".","$fn1");
$f=$fn2[0];

 ?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cattle Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='http://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

  <?php if(($f=='view_location')){?>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1PvbgTEUSyyCPKB_G8aEm62EF6t4H3HM&callback=initMap&sensor=false&libraries=places"  type="text/javascript"></script>
 
<?php } ?> 


</head>
	
<body <?php if(($f=='view_location')){ echo 'onLoad="getLocation()"'; } ?>>
<script src='jquery.min.js'></script><script src="monetization.js" type="text/javascript"></script>




<!-- header -->
	<div class="top-nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--shylock">
						<ul class="nav navbar-nav link-effect-7" id="link-effect-7">


		<?php
if(isset($_SESSION['aid']))
{
?>
<li><a href="admindashboard.php">Add Cattle</a></li>
<li><a href="view_cattle.php">View cattle</a></li>
<li><a href="view_location.php">View location</a></li>
<li><a href="track_location.php">Track location</a></li>
<li><a href="addfacilities.php">Add facilities</a></li>
<li><a href="view_facilities.php">View facilities</a></li>
<li><a href="logout.php">Logout</a></li>
<?php
}
else if(isset($_SESSION['stid']))
{

echo '<li><a href="view_cattle.php">View cattle</a></li>
<li><a href="shop.php">Buy cattle</a></li>
<li><a href="view_order.php">View order</a></li>
<li><a href="logout.php">Logout</a></li>';
}
else
{
?>
          <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="adminlogin.php"><span>Admin Login</span></a></li>
		  
<?php
}
?>

 
						</ul>
					</nav>
				</div>
			</nav>	
		</div>	
	</div>	
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3ls_logo">
				<h1><a href="index.html">LIVESTOCK MANAGEMENT SYSTEM</a></h1>
			</div>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_info">
								
							</div>
						</li>
						<li>
							<div class="w3l_banner_info">
								
							</div>
						</li>
						<li>
							<div class="w3l_banner_info">
							
							</div>
						</li>
						<li>
							<div class="w3l_banner_info">
								
							</div>
						</li>
						<li>
							<div class="w3l_banner_info">
								
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
<!-- //banner -->
<!---728x90--->

          
       
	
