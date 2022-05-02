<?php 
session_start();
$email_session = $_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>E-rrigate </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="images/Elogo.png" alt="logo" class="logo"/>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="main.php">All Components</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="beds.php">Beds</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="tanks.php">Tanks</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="sensors.php">Sensors</a>
                  </li>
				  <!-- <li class="nav-item">
					<a class="nav-link" href="../profile/profile.php">Edit Profile</a>
				 </li> -->
				 <li class="nav-item">
					<a class="logout-link" href="../../../index.php">Logout</a>
				 </li>
               </ul>
            </div>
        </div>
    </nav>
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Farm beds
			</h1>
		</div>
	</div>
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="main.php">Main</a>
				</li>
				<li class="breadcrumb-item active">Beds</li>
			</ol>
		</div>

		<!-- All Beds -->
		<div class="services-bar">
            <h1 class="my-4">All Beds </h1>
            <!-- Beds Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Bed 1: Pepper</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/beds.png" alt="" />
                     </div>
                     <div class="card-body">
                        <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
                           <br> Potassium: 107mg/kg <br> Water used(24h): 5L
                        </div>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Open Valve</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Bed 2: Tomatoes</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/beds.png" alt="" />
                     </div>
                     <div class="card-body">
                        <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
                           <br> Potassium: 107mg/kg <br> Water used(24h): 5L
                        </div>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Open valve</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Bed 3: Strawberry</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/beds.png" alt="" />
                     </div>
                     <div class="card-body">
                        <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
                           <br> Potassium: 107mg/kg <br> Water used(24h): 5L
                        </div>
                     </div>
                     <div class="card-footer">
                        <a href="#" class="btn btn-primary">Open Valve</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
			<div class="row">
				<div class="col-lg-4 mb-4">
				   <div class="card h-100">
					  <h4 class="card-header">Bed 1: Pepper</h4>
					  <div class="card-img">
						 <img class="img-fluid" src="images/beds.png" alt="" />
					  </div>
					  <div class="card-body">
						 <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
							<br> Potassium: 107mg/kg <br> Water used(24h): 5L
						 </div>
					  </div>
					  <div class="card-footer">
						 <a href="#" class="btn btn-primary">Open Valve</a>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 mb-4">
				   <div class="card h-100">
					  <h4 class="card-header">Bed 2: Tomatoes</h4>
					  <div class="card-img">
						 <img class="img-fluid" src="images/beds.png" alt="" />
					  </div>
					  <div class="card-body">
						 <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
							<br> Potassium: 107mg/kg <br> Water used(24h): 5L
						 </div>
					  </div>
					  <div class="card-footer">
						 <a href="#" class="btn btn-primary">Open valve</a>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 mb-4">
				   <div class="card h-100">
					  <h4 class="card-header">Bed 3: Strawberry</h4>
					  <div class="card-img">
						 <img class="img-fluid" src="images/beds.png" alt="" />
					  </div>
					  <div class="card-body">
						 <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
							<br> Potassium: 107mg/kg <br> Water used(24h): 5L
						 </div>
					  </div>
					  <div class="card-footer">
						 <a href="#" class="btn btn-primary">Open Valve</a>
					  </div>
				   </div>
				</div>
			 </div>
			 <!-- row 3 -->
			 <div class="row">
				<div class="col-lg-4 mb-4">
				   <div class="card h-100">
					  <h4 class="card-header">Bed 1: Pepper</h4>
					  <div class="card-img">
						 <img class="img-fluid" src="images/beds.png" alt="" />
					  </div>
					  <div class="card-body">
						 <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
							<br> Potassium: 107mg/kg <br> Water used(24h): 5L
						 </div>
					  </div>
					  <div class="card-footer">
						 <a href="#" class="btn btn-primary">Open Valve</a>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 mb-4">
				   <div class="card h-100">
					  <h4 class="card-header">Bed 2: Tomatoes</h4>
					  <div class="card-img">
						 <img class="img-fluid" src="images/beds.png" alt="" />
					  </div>
					  <div class="card-body">
						 <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
							<br> Potassium: 107mg/kg <br> Water used(24h): 5L
						 </div>
					  </div>
					  <div class="card-footer">
						 <a href="#" class="btn btn-primary">Open valve</a>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 mb-4">
				   <div class="card h-100">
					  <h4 class="card-header">Bed 3: Strawberry</h4>
					  <div class="card-img">
						 <img class="img-fluid" src="images/beds.png" alt="" />
					  </div>
					  <div class="card-body">
						 <div class="card-text">Soil humidity: 60% <br> Soil temperature: 35°C <br> PH: 7.33 <br> Nitrogen: 122mg/kg <br> Phosphorus: 99mg/kg
							<br> Potassium: 107mg/kg <br> Water used(24h): 5L
						 </div>
					  </div>
					  <div class="card-footer">
						 <a href="#" class="btn btn-primary">Open Valve</a>
					  </div>
				   </div>
				</div>
			 </div>
        </div>
	</div>

    <!--footer starts from here-->
	<footer class="footer">
	</div>
	<div class="container">
		<div class="footer-logo">
			<a href="#"><img src="images/Elogo.png" class="logo" alt="" /></a>
		</div>
		<!--foote_bottom_ul_amrc ends here-->
		<p class="copyright text-center">All Rights Reserved. &copy; 2022 <a href="#">E-rrigate</a> Design By : 
			<a href="#">Smartzoid</a>
		</p>
		<ul class="social_footer_ul">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
		</ul>
		<!--social_footer_ul ends here-->
	</div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
