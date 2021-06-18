<html lang="en">
<head>
	<title>UAS LURR</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="bootstrap-icons.css" rel="stylesheet">
	<link rel = "stylesheet" type = "text/css" href = "main.css">
</head>
<header>
 <!--------------------------------------------------------------------------------------------Navbar------------------------------------------------------>
<nav class="navbar navbar-expand-md  navbar-dark">
	<a><img src="image/new logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
</button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <div class="navbar-nav ml-auto">
	      <a class="nav-item nav-link " href="index.php">Home</a>
	      <a class="nav-item nav-link active" href="galeri.php">Gallery</a>
	      <a class="nav-item nav-link " href="reservation.php">Reservation</a>
	      <a class="nav-item nav-link " href="contact.php">Contact</a>
	      <a class="nav-item nav-link " href="admin/index.php">Login Admin</a>
	    </div>
	  </div>
</nav>
</header>
<!--------------------------------------------------------------------------------------------En of navbar------------------------------------------------------------>
<!--------------------------------------------------------------------------------------------Landing Img------------------------------------------------------------->
<div class="galeri">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
    <h1 class="display-4">SEE YOUR MEMORIES</h1>
</div>
</div>
</div>

<div class="container">
	<div class="foto">
		<div class="row">
			<div class="col-lg-6">
				<img src="image/banner.png"class="img-fluid">
			</div>
			<div class="col-lg-6">
				<img src="image/landing2.jpg"class="img-fluid">
			</div>
			<div class="col-lg-6">
				<img src="image/landing3.jpg"class="img-fluid">
			</div>
			<div class="col-lg-6">
				<img src="image/landing4.png"class="img-fluid">
			</div>
		</div>
	</div>
</div>


<?php
include 'footer.php';?>
</body>
</html>