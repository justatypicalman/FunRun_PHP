<?php
include "db_conn.php";
$id = $_GET['updateid'];
$sql = "SELECT * FROM users where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$uname = $row['user_name'];
$email = $row['email'];
$distance = $row['distance'];
$password = $row['password'];
date_default_timezone_set('Asia/Manila');
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $distance = $_POST['distance'];
    $password = $_POST['pass'];
    $rpass = $_POST['repass'];
    $date = date("F j, Y, g:i a");

    if ($password !== $rpass) {
        header("Location: user.php?error=The confirmation password  does not match");
        exit();
    } else {
        $password = md5($password);
        $sql = "UPDATE users set id='$id', name='$name', email='$email', user_name='$uname', password='$password', distance='$distance' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: admin.php?success=User has been updated");
            exit();
        } else {
            header("Location: admin.php?error=unknown error occurred");
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" style="min-height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin</title>
    <link href="img/brand3.png" rel="icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

        .success {
            background: #D4EDDA;
            color: #40754C;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }
    </style>
</head>

<body style="background: url(img/run3.png); background-size: cover;
   background-repeat: no-repeat;
   background-position: center center; ">
    <div class="container" data-aos="zoom-in" data-aos-duration="1500">

        <form method="post" style="margin-top: 200px;background-color: white; border-radius: 15px; border: 2px solid #000; padding: 20px;">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" value = <?php echo $name?> class="form-control" name="fullname" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" autocomplete="off" value = <?php echo $uname?> class="form-control" name="uname" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" autocomplete="off" value = <?php echo $email?> class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label>Distance</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="distance" id="5km" value="5km" required>
                    <label class="form-check-label" for="5km">
                        5km
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="distance" id="10km" value="10km" required>
                    <label class="form-check-label" for="10km">
                        10km
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Enter Password again</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="repass" placeholder="Re-type Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <button type="button" onclick="location.href='admin.php';" class="btn btn-secondary">Back</button>

        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>