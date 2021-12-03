<?php 
    include "conn.php";
    session_start();

    $sql_users = "delete from users where email = '" . $_SESSION['email'] . "'; ";
   

    $result = mysqli_query($conn, $sql_users);
    

    if($result){
        echo "<script>alert('Success delete your account');</script>";
        unset($_SESSION['email']);
        header('Location: login.php');
    }else{
        echo "<script>alert('Fail delete your account');location.href='tampil_profile.php';</script>";
    }
?>
