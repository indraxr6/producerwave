<?php 

    if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($email)){
            echo "<script>alert('E-mail can't be empty');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password can't be empty');location.href='login.php';</script>";
        } else {
            include "conn.php";
            $qry_login=mysqli_query($conn,"select * from users where email = '".$email."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['user_id']=$dt_login['user_id'];
                $_SESSION['name']=$dt_login['name'];
                $_SESSION['login_status']=true;
                header("location: index.php");
            } else {
                // echo "<script>alert('Can't found existed account with that credentials.'); location : 'login.php';</script>";
                
                
                header("location: login.php");
            }
        }
    }
?>
