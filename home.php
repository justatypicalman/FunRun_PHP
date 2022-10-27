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

    <title>Color Fun Run | Home</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        
        .active{
          color: #fc46aa;
        }
        .rounded-circle{
        transition: transform .2s;
}
.rounded-circle:hover{
        transform: scale(1.2);
}       
.register{
    background-color:#F7C8D0;
    border-color: #F7C8D0;
}
.register:hover{
    background-color: #fc46aa;
    border-color:#fc46aa;
}
            </style>
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
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
            <li class="nav-item active" style="color: #fc46aa;">
              <a class="nav-link" style="color: #fc46aa;" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php" >About</a>
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
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="img/test2.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <div style="border: 2px solid black; border-radius: 15px; padding: 10px 30px; background-color: rgba(82, 86, 92, 0.8);">
                <h1>Color Fun Run</h1>
                <p>Fun runs are generally created to help raise money for worthy causes, such as schools or charities. As well as raising money for charity there are many physical and emotional benefits to participating in a fun run - physical health, mental health, fitness, weight loss, team building, laughter and social interaction.</p>
                
                <p><a class="btn btn-lg btn-primary register" href="signup.php" role="button" style="color: black">Register today</a></p></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="img/test3.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
              <div style="border: 2px solid black; border-radius: 15px; padding: 10px 30px; background-color: rgba(82, 86, 92, 0.8);">
                <h1>Fun Runs are fun!</h1>
                <p>Fun runs are generally created to help raise money for worthy causes, such as schools or charities. As well as raising money for charity there are many physical and emotional benefits to participating in a fun run - physical health, mental health, fitness, weight loss, team building, laughter and social interaction.</p>
              </div>  
            </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="img/test4.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
              <div style="border: 2px solid black; border-radius: 15px; padding: 10px 30px; background-color: rgba(82, 86, 92, 0.8);">
                <h1>Whatever reason works for you, running is great for your fitness and overall health.</h1>
                <p>At the end of the day, a fun run acts as a defined goal and helps to motivate you to keep running.</p>
              </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



      <div class="container marketing">

        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/eximg1.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Improves Physical Health</h2>
            <p>Cardiovascular fitness is the ability the heart, blood cells and lungs can supply oxygen through the blood to the muscles, as well as the ability of the muscles to use that oxygen to produce movement. Running is one of the most effective ways to improve these processes.</p>
        
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/eximg2.png" alt="Generic placeholder image" width="190" height="150">
            <h2>Helps with Social Health</h2>
            <br>
            <p>As with many other activities, there are other people with similar interests. Running in particular has a huge number of participants. With all those people there will be other people that have a similar level to you, therefore you shouldn’t struggle to join a local running group to help you get fit for the event.</p>
           
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="img/eximg3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Good returns for such a low price</h2>
            <p>This Color Fun Run events helps almost all aspects of health, in exchange there will be a registration fee worth 100 Pesos for 5km distance and 200 pesos for 10km distance. The collected Registration fee will go to the children in the orphanages.</p>
          
          </div>
        </div>

        <hr class="featurette-divider">

        

        <hr class="featurette-divider">


      </div>
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
      </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.min.js"></script>
  </body>
</html>
