<?php
include 'db_conn.php';

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM USERS WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: admin.php?success=User has been delete successfully");
        exit();
    }else{
        header("Location: user.php?error=Unknown error has occured");
        exit();
    }
}
?>