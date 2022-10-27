<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	date_default_timezone_set('Asia/Manila');
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$email = validate($_POST['email']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$distance = validate($_POST['distance']);
	$date = date("F j, Y, g:i a");

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: signup.php?error=Email is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($distance)){
        header("Location: signup.php?error=Distance is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$sql_e = "SELECT * FROM users WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);
		$result_e = mysqli_query($conn, $sql_e);
		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}
		else if (mysqli_num_rows($result_e) > 0 ){
			header("Location: signup.php?error=The email is taken try another&$user_data");
		}
		else {
           $sql2 = "INSERT INTO users(user_name, password, name, email, distance, datecreated) VALUES('$uname', '$pass', '$name', '$email', '$distance','$date')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}