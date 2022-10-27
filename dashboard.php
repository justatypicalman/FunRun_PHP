<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Color Fun Run | Home</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
     <link href="img/brand3.png" rel="icon">
</head>
<body style="background-color: #F7C8D0">

     <h1 style="-webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;" >Hello, <?php echo $_SESSION['name']; ?>! Your ID Number is #<?php echo $_SESSION['id']; ?></h1>
     <p style="font-weight: bold;">You have entered a <?php echo $_SESSION['distance']; ?> distance Color Fun Run</p>
     <?php 
     if ($_SESSION['distance'] == "5km"){
     echo '<p style="font-weight: bold;">Registration Fee: P100.</p>';
}else {
     echo '<p style="font-weight: bold;">Registration Fee: P200.</p>';
}?>
     <p style="font-weight: bold;">Inclusions: Neon Wristbands, Colored Powder, Water</p>
     <p style="font-weight: bold;">Please show this to an organizer to get you ready.</p>
     <div class="container" style="display: inline; position: absolute; top: 37em; left: 52em;">
     <a id="logout" style="text-decoration: none; color: black;border: 2px solid black; background-color: #ffbb00; border-radius: 10px; padding: 10px 15px 10px 15px;" href="home.php">Home</a>
     <a id="logout" style="text-decoration: none; color: black;border: 2px solid black; background-color: red; border-radius: 10px; padding: 10px 15px 10px 15px;" href="logout.php">Logout</a>
</div>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>