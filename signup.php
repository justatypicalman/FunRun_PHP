<!DOCTYPE html>
<html>
<head>
	<title>Color Fun Run | Sign Up</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     <link href="img/brand3.png" rel="icon">
</head>
<body style="background: url(img/run3.png); background-size: cover;
   background-repeat: no-repeat;
   background-position: center center; ">
<div data-aos="zoom-in" data-aos-duration="1500">

     <form action="signup-check.php" style="padding-bottom: 0;" id="form-signup" method="post">
     	<h2>Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          &nbsp;&nbsp;&nbsp;Name
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          &nbsp;&nbsp;&nbsp;User Name
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>

          &nbsp;&nbsp;&nbsp;Email
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>
          &nbsp;&nbsp;&nbsp;Distance<br>
               <div class="distance">
          
          <?php if (isset($_GET['distance'])) { ?>
               <label class="labels" title="Registration Fee: P100" for="5km">5km</label>
               <input type="radio" 
                      name="distance" 
                      value="5km" title="Registration Fee: P100"required>

                      <label class="labels" title="Registration Fee: P200" for="10km">10km</label>
                      <input type="radio" 
                      name="distance"
                      value="10km" title="Registration Fee: P200" required>10km
          <?php }else{ ?>
               <label class="labels" title="Registration Fee: P100" for="5km">5km</label>
               <input type="radio" 
                      name="distance" 
                      value="5km" title="Registration Fee: P100" required>5km
                      <label class="labels" title="Registration Fee: P200" for="10km">10km</label>
                      <input type="radio" 
                      name="distance" 
                      value="10km" title="Registration Fee: P200"required>10km
          <?php }?>
</div><br>

     	&nbsp;&nbsp;&nbsp;Password
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

                 &nbsp;&nbsp;&nbsp;Re-enter Password
          <input type="password" 
                 name="re_password" 
                 placeholder="Enter password again"><br>
                 <button type="back" onclick="location.href='home.php';" class="btn btn-secondary">Back</button>
     	<button type="submit" class="btn btn-primary">Sign Up</button><br>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>