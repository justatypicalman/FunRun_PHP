<?php
include 'db_conn.php'; 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/brand3.png">

    <title>Color Fun Run | About</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        
.active{
  color: #fc46aa;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md fixed-top">
        <a class="navbar-brand" href="#"><img width="200px"src="img/brand2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto" style="font-weight: bold; font-family: 'Lato', sans-serif">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item active" style="color: #fc46aa;">
              <a class="nav-link" style="color: #fc46aa;" href="#">About<span class="sr-only">(current)</span></a>
            </li>
            <?php


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
            <?php
            echo '<li class="nav-item">';
            echo  '<a class="nav-link" href="dashboard.php">My Account</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link" href="logout.php">Logout</a>';
            echo '</li>';
}
           
            else{
             echo '<li class="nav-item">';
             echo ' <a class="nav-link" href="signup.php">Sign Up</a>';
             echo '</li>';
          };?>
          </ul>
          <form hidden class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>

    <main role="main">
      
    



      <div class="container marketing">
        <center>
<h1 class="featurette-heading" data-aos="zoom-up" data-aos-duration="1500">About Fun Run</h1>
        </center>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="featurette-heading">Increases overall health</h2>
            <p class="lead">It develops one's endurance, and promotes the importance of good posture and good health.</p>
          </div>
          <div class="col-md-5" data-aos="fade-left">
            <img class="featurette-image img-fluid mx-auto" src="img/ex1.png" style="border: 5px solid #F7C8D0; border-radius: 20px;width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="featurette-heading">Helps one to get in shape</h2>
            <p class="lead">Running is a fun and flexible way to lose weight and stay fit.</p>
          </div>
          <div class="col-md-5 order-md-1" data-aos="fade-left">
            <img class="featurette-image img-fluid mx-auto" src="img/run2ex.png" style="border: 5px solid #F7C8D0; border-radius: 20px;width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7" data-aos="fade-right" data-aos-duration="1500">
            <h2 class="featurette-heading">We dedicate this Color Run to the Orphanages.</span></h2>
            <p class="lead">The collected Registration fee will go to the children in the orphanages.
Note: Registration fees are to be collected on the venue</p>
          </div>
          <div class="col-md-5" data-aos="fade-left">
            <img class="featurette-image img-fluid mx-auto" src="img/ex3.png" style="border: 5px solid #F7C8D0; border-radius: 20px;width: 500px; height: 500px;">
          </div>
        </div>

        <hr class="featurette-divider">


      </div>
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
      </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vendor/holder.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
  </body>
</html>
