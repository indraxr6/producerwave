<?php 

    if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($email)){
            echo "<script>alert('E-mail can't be empty');location.href='Login.html';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password can't be empty');location.href='login.html';</script>";
        } else {
            include "conn.php";
            $qry_login=mysqli_query($conn,"select * from users where email = '".$email."' and password = '".($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['user_id']=$dt_login['user_id'];
                $_SESSION['name']=$dt_login['name'];
                $_SESSION['login_status']=true;
                header("location: logout.php");
            } else {
                echo "<script>alert('Can't found existed account with that credentials.');location.href='login.php';</script>";
            }
        }
    }
?>
