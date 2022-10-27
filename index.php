<!DOCTYPE html>
<html>
<head>
	<title>Color Fun Run | Login</title>
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
     <form action="login.php" method="post">
     	<h2>Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
		 <button type="button"  onclick="location.href='home.php';" class="btn btn-secondary">Back</button>
     	<button type="submit" class="btn btn-primary">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</div>
	 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	 <script>
  AOS.init();
</script>

</body>
</html>