<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>THE GRAND TUTORS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="css/font.css">	
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<section id="navbar">
			<nav class="navbar navbar-expand-lg navbar-light" >
	  <a class="navbar-brand" href="index.php"><b>THE GRAND TUTORS</b></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="fa fa-bars"></span>
		  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        	<a class="nav-link" href="index.php">Home</a>
			      </li>
			      <li class="nav-item">
			        	<a class="nav-link" href="first_year.php">First Year</a>
			      </li>
			      <li class="nav-item">
			        	<a class="nav-link" href="second_year.php">Second Year</a>
			      </li>
			       <li class="nav-item">
			        	<a class="nav-link" href="third_year.php">Third Year</a>
			      </li>
			       <li class="nav-item">
			        	<a class="nav-link" href="fourth_year.php">Fourth Year</a>
			      </li>			       
			      <li class="nav-item">
			        	<a class="nav-link" href="about.php">About</a>
			      </li>
			      <li class="nav-item">
			        	<a class="nav-link" href="contact.php">Contact Us</a>
			      </li>
		    </ul>
	  </div>
	</nav>
	</section>
	<!--tutors Section--->
	<section id="tutors2">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h3 class="text-center">Get to know your Tutors</h3>
					<div class="row">
						<div class="col-md-3">
							<div class="second">
								<div class="head_section"><h5>Gelson Osoro</h5></div>
								<div class="body-content">
									<ul>
										<li>Holds Bsc Actuarial Sci</li>
										<li>CPA Certified</li>
										<li>CIFA Certfied</li>
										<li>Computer Whiz</li>
									</ul>
								</div>
								<div class="last">
									<p class="text-center para">Chief Consultant</p>
								</div>
								<img src="images/1.png" class="img-fluid" />	
							</div>						
						</div>
						<div class="col-md-4">
							<div class="second">
								<div class="head_section"><h5>Gelson Osoro</h5></div>
								<div class="body-content">
									<ul>
										<li>Holds Bsc Actuarial Sci</li>
										<li>CPA Certified</li>
										<li>CIFA Certfied</li>
										<li>Computer Whiz</li>
									</ul>
								</div>
								<div class="last">
									<p class="text-center para">Chief Consultant</p>
								</div>
								<img src="images/1.png" class="img-fluid" />	
							</div>						
						</div>
						<div class="col-md-3">
							<div class="second">
								<div class="head_section"><h5>Gelson Osoro</h5></div>
								<div class="body-content">
									<ul>
										<li>Holds Bsc Actuarial Sci</li>
										<li>CPA Certified</li>
										<li>CIFA Certfied</li>
										<li>Computer Whiz</li>
									</ul>
								</div>
								<div class="last">
									<p class="text-center para">Chief Consultant</p>
								</div>
								<img src="images/1.png" class="img-fluid" />	
							</div>						
						</div>
					</div>
				</div>
				<div class="col-md-3 upload">
					<h5 class="text-center text">Upload Section</h5>
					<form  method="POST" enctype="multipart/formdata">						
						<div class="form-group">
							<input type="text" class="form-control trans" placeholder="Your name">
						</div>						
						<div class="form-group">
							<input type="text" class="form-control trans" placeholder="Title">
						</div>
						<div class="form-group" method="POST" enctype="multipart/formdata">
							<input type="file" class="file">
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control trans" rows="4" placeholder="Brief explanation"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Upload</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--Available materials-->
	<section id="materials">
		<div class="container">
			<h4 class="text-center first">Study Materials and Semester</h4>
			<div class="row ">
				<div class="col-md-6">
					<div class="row semester">
						<div class="col-md-6">
							<h5 class="text-center">Semester</h5>
							<form class="form-group" action="#" method="POST">
										<select class="form-control">
											<option value="">Select Sem</option>
											<option value="">First Sem</option>
											<option value="">Second Sem</option>
										</select>
									</form>
						</div>
						<div class="col-md-6">
							<h5 class="text-center">Available Materials</h5>
							<form class="form-group" cation="#">
								<textarea class="form-control" rows="4"></textarea>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h5 class="text-center welcome">Welcome messsage</h5>
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" frameborder="0" src="videos/undertaker.mp4"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---footer-->
<section id="footer">
		<div class="container">
			<p>Made with <span class="fa fa-heart-o"></span> using bootstrap</p>
			<div class="row bott">
				<div class="col-md-4">
					<p><span class="fa fa-facebook"></span> Ole Saisi Inc+</p>
					<p><span class="fa fa-twitter"></span>@olesaisisinc+</p>
					<p><span class="fa fa-linkedin"></span>@olesaisisinc+</p>
				</div>
				<div class="col-md-4">
					<p><span class="fa fa-facebook"></span> Ole Saisi Inc+</p>
					<p><span class="fa fa-twitter"></span>@olesaisisinc+</p>
					<p><span class="fa fa-linkedin"></span>@olesaisisinc+</p>
				</div>
				<div class="col-md-4">
					<p><span class="fa fa-facebook"></span> Ole Saisi Inc+</p>
					<p><span class="fa fa-twitter"></span>@olesaisisinc+</p>
					<p><span class="fa fa-linkedin"></span>@olesaisisinc+</p>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/smooth.js"></script>
	<script type="text/javascript" src="js/popper.js"></script>
</body>
</html>