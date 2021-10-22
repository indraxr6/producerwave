<?php
if($_POST){

    $name=$_POST['name'];
    $user_id=$_POST['user_id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(empty($name)){
        echo "<script>alert('Name can't be empty');location.href='register_post.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('E-mail can't be empty');location.href='register_post.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Please fill your password');location.href='register_post.php';</script>";
    } else {
        include "conn.php";
        $insert=mysqli_query($conn,"insert into users (name, email, password) value ('".$name."','".$email."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Register Success')</script>";
          //   header("location: index.php");
        } else {
            echo "<script>alert('Register Failed!');location.href='Register.html';</script>";
        }
    }
}

// $nama_siswa=$_POST['nama_siswa'];
    // $tanggal_lahir=$_POST['tanggal_lahir'];
    // $alamat=$_POST['alamat'];
    // $gender=$_POST['gender'];
    // $username=$_POST['username'];
    // $password= $_POST['password'];
    // $id_kelas=$_POST['id_kelas'];
?>
