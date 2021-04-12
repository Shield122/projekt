<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	  <link rel="stylesheet" href="css/font-awesome.min.css"/>
	  <link rel="stylesheet" href="css/magnific-popup.css"/>
	  <link rel="stylesheet" href="css/slicknav.min.css"/>
	  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="mystyle.css">
    <title>Természet</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg mb-4 top-bar navbar-static-top sps sps--abv">
        <div class="container bg-success">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mx-auto" href="#">Állatok<span>Érdekességek</span></a>
      <div class="collapse navbar-collapse" id="navbarCollapse1">
        <ul class="navbar-nav ml-auto">
         <!--<li class="nav-item active"> <a class="nav-link" href="#myCarousel">Home <span class="sr-only">(current)</span></a> </li>-->
        <li class="nav-item"> <a class="nav-link" href="index.php">Home</a> </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Állatok
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=1">Hüllők</a>
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=2">Emlősök</a>
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=3">Rovarok</a>
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=4">Kétéltűek</a>
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=5">Érzékpálcások</a>
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=6">Galandférgek</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Növények
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=1">Hüllők</a>
          <a class="dropdown-item" href="index.php?p=reszletek.php&id=2">Emlősök</a>
        </div>
      </li>
        <li class="nav-item"> <a class="nav-link" href="#gallery">Image Gallery</a> </li>
        <li class="nav-item"> <a class="nav-link" href="index.php?p=contact.php">Kapcsolat</a> </li>
        </ul>
      </div>
            </div>
    </nav>

<div id="tartalom">    
<?php
    if(isset($_GET['p'])){
      include $_GET['p'];
    } else {
      include "home.php";
    }
?>
</div>

<div class="row mt-4"> 
  
</div>

<?php
  
?>

<?php
  include "kepek.php";
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.slicknav.min.js"></script>
	  <script src="js/owl.carousel.min.js"></script>
	  <script src="js/jquery.magnific-popup.min.js"></script>
	  <script src="js/circle-progress.min.js"></script>
	  <script src="js/mixitup.min.js"></script>
	  <script src="js/instafeed.min.js"></script>
	  <script src="js/masonry.pkgd.min.js"></script>
	  <script src="js/main.js"></script>
    <script src="menu.js"></script>
  </body>
</html>