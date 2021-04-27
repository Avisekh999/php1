<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Harrow Hall</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Fontawesome core CSS -->
		<link href="fontawesome-free/css/all.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/main.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<style>
			.table th{
				color: #FFF !important;
			}
		</style>
	</head>
	<body>
		<div class="sticky-top">
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand" href="#">
					<img src="images/harrowhall-logo.png">
					<span class="font-weight-bold">Harrow Hall Admin</span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="container Admin py-5">
			<h1 class="text-left">Welcome</h1>
			<hr>
			<h4>Interested Users !!</h4>
			<table class="table table-bordered">
				<thead bgcolor="#292B67">
				  <tr>
					  <th>ID</th>
					  <th>Name</th>
					  <th>Mobile No</th>
					  <th>E-Mail</th>
					  <th>Subject</th>
					  <th>Message</th>
		          </tr>
				</thead>
				<tbody>
					<!-----------connect with database-------->
					<?php
						$c=1;
						$con=mysqli_connect('localhost','root','','contactform');
						//////SELECT QUERY START HERE////////
						$sel="SELECT * FROM `contact-data`";
						$query=$con->query($sel);
						while ($row=$query->fetch_assoc())
						{


					?>

				  <tr>
					  <td><?php echo $c++;?></td>
					  <td><?php echo $row['name'];?></td>
					  <td><?php echo $row['mobilenumber'];?></td>
					  <td><?php echo $row['email'];?></td>
					  <td><?php echo $row['subject'];?></td>
					  <td><?php echo $row['message'];?></td>
				  </tr>
				  <?php
			      }
			      ?>	  
				</tbody>
			</table>
		</div>
		<footer>
			<div class="footer-section fixed-bottom">
				<p class="text-center text-light mb-0">© 2021 Harrow Hall. All Rights Reserved.</p>
			</div>
		</footer>
		<!-- Jquery core JavaScript -->
		<script src="jquery/jquery.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>