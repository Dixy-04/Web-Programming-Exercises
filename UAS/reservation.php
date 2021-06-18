<html lang="en">
<head>
	<title>UAS LUUR</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://unpkg.com/feather-icons"></script>
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
	      <a class="nav-item nav-link " href="galeri.php">Gallery</a>
	      <a class="nav-item nav-link active" href="reservation.php">Reservation</a>
	      <a class="nav-item nav-link " href="contact.php">Contact</a>
          <a class="nav-item nav-link " href="admin/index.php">Login Admin</a>
	    </div>
	  </div>
</nav>
</header>
<!--------------------------------------------------------------------------------------------En of navbar------------------------------------------------------------>
<!--------------------------------------------------------------------------------------------Landing Img------------------------------------------------------------->

<div class="reservation">
<div class="jumbotron jumbotron-fluid">
	<div class="container">
    <h1 class="display-4">CHOOSE ACCORDING TO THE MONEY <br>IN YOUR WALLET</h1>
</div>
</div>
</div>

<!------------------------------------------------------------------------------------------End of Landing Img-------------------------------------------------------->
<!--------------------------------------------------------------------------------------------kontent spek------------------------------------------------------------->

<div class="servise">
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-title">PC SPESIFICATIONS</h2>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body"> 
                	<i class="fa fa-star" aria-hidden="true"></i>
                    <h4 class="mt-4 mb-3">Common</h4>
                    <p>i3 9300</p>
                    <p>GTX 1050</p>
                    <p>8 GB Ram</p>
                    <h4>Price</h4>
                    <p>IDR 3000/hour</p>
                </div>
            </div>
        </div>
                <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body"> 
                	<i class="fa fa-star" aria-hidden="true"></i>
                	<i class="fa fa-star" aria-hidden="true"></i>
                    <h4 class="mt-4 mb-3">Rare</h4>
                    <p>i3 9300</p>
                    <p>GTX 1060</p>
                    <p>8 GB Ram</p>
                    <h4>Price</h4>
                    <p>IDR 4000/hour</p>
                </div>
            </div>
        </div>
                <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body"> 
                	<i class="fa fa-star" aria-hidden="true"></i>
                	<i class="fa fa-star" aria-hidden="true"></i>
                	<i class="fa fa-star" aria-hidden="true"></i>
                    <h4 class="mt-4 mb-3">Elite</h4>
                    <p>i3 9300</p>
                    <p>GTX 1060Ti</p>
                    <p>16 GB Ram</p>
                    <h4>Price</h4>
                    <p>IDR 6000/hour</p>
                </div>
            </div>
        </div>
                <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body"> 
                	<i class="fa fa-star" aria-hidden="true"></i>
                	<i class="fa fa-star" aria-hidden="true"></i>
                	<i class="fa fa-star" aria-hidden="true"></i>
                	<i class="fa fa-star" aria-hidden="true"></i>
                    <h4 class="mt-4 mb-3">Epic</h4>
                     <p>i5 9400F</p>
                    <p>RTX 2080Ti</p>
                    <p>16 GB Ram</p>
                    <h4>Price</h4>
                    <p>IDR 8000/hour</p>
                </div>
            </div>
        </div>
    </div>

<!---------------------------------------------------------------------------------------end kontent spek------------------------------------------------------------->
<!----------------------------------------------------------------------------------------booking--------------------------------------------------------------------->
<div class="col-lg-12 text-center">
    <h2>Booking Now</h2>
</div>
        <div class="form" >
            <div class="row">
             <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">First Name</label>
                <input type="name" class="form-control" id="nama_depan" >
              </div>
               <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="name" class="form-control" id="nama_belakang" >
              </div>
               <div class="form-group col-sm-12">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" >
              </div>
              <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" class="form-control" id="tanggal" >
              </div>
              <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">Time</label>
                <input type="time" class="form-control" id="waktu" >
              </div>
              <div class="form-group col-sm-6">
               <label for="exampleFormControlSelect">Spesification</label>
                <select class="form-control" id="tipe_pc">
                  <option>Common</option>
                  <option>Rare</option>
                  <option>Elite</option>
                  <option>Epic</option>
                </select>
              </div>
               <div class="form-group col-sm-6">
                <label for="exampleInputEmail1">Duration</label>
                <input type="number" class="form-control" id="durasi" >
                <small id="durasi1" class="form-text text-muted" style="color: orange!important;">/hour</small>
              </div>
              <div class="form-group col-sm-6">
              <a type="submit" value="Submit" class="btn btn-outline-warning" href="reservation.php" style="border-radius: 20px;">Booking</a>
          </div>
          </div>
      </div>
  </div>
</div>



<!--------------------------------------------------------------------------------------------end booking------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------footer------------------------------------------------------------->

<?php
include 'footer.php';
?>

<!--------------------------------------------------------------------------------------------end footer------------------------------------------------------------->
