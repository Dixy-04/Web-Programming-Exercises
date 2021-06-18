<html lang="en">
<head>
	<title>UAS LUUR</title>
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
	      <a class="nav-item nav-link" href="index.php">Home</a>
	      <a class="nav-item nav-link " href="galeri.php">Gallery</a>
	      <a class="nav-item nav-link " href="reservation.php">Reservation</a>
	      <a class="nav-item nav-link active" href="contact.php">Contact</a>
	      <a class="nav-item nav-link " href="admin/index.php">Login Admin</a>
	    </div>
	  </div>
</nav>
</header>
<!--------------------------------------------------------------------------------------------En of navbar------------------------------------------------------------>
<!--------------------------------------------------------------------------------------------Landing Img------------------------------------------------------------->
<div class="contact">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
    <h1 class="display-4">WELLCOME TO NepoKoi WARNET <br>GAMES CENTER</h1>
</div>
</div>
</div>
<!------------------------------------------------------------------------------------------End of Landing Img-------------------------------------------------------->
  <div class="container">
  	<div class="content-contact">
        <div class="row ">
            <div class="col-lg-6 ">
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            <div class="form col-lg-6">
              <h1>Any Questions</h1>
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="nama">
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address" name="email">
              </div>
              <div class="form-group">
                  <textarea class="form-control" placeholder="Reasons for Contacting Us" rows="4"></textarea>
              </div>
             <div class="form-group">
              <a type="submit" value="Submit" class="btn btn-outline-warning" href="reservation.php" style="border-radius: 20px;">Submit</a>
          </div>
        </div>
    </div>
</div>
</div>



<?php
include 'footer.php';?>
</body>
</html>