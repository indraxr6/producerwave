<?php 
    include "koneksi.php";
    session_start();
    $date_birth=$_POST['date_birth'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $education=$_POST['education'];
    $gender=$_POST['gender'];
    $phone_number=$_POST['phone_number'];
    $id_class=$_POST['id_class'];
    $name=$_POST['name'];

    

    

    if($_FILES['file']['size'] > 0){
        $nama = $_FILES['file']['name'];
	    $ukuran	= $_FILES['file']['size'];
	    $file_tmp = $_FILES['file']['tmp_name'];
        move_uploaded_file($file_tmp, 'file/'.$nama);
        $upfile=mysqli_query($conn,"update user set photo='".$nama."' where email = '".$_SESSION['email']."' ") ;
    }

    $update=mysqli_query($conn,"update user set date_birth='".$date_birth."',address='".$address."', age='".$age."', education='".$education."', gender='".$gender."', phone_number='".$phone_number."', id_class='".$id_class."', name='".$name."' where email = '".$_SESSION['email']."' ") ;

    

    if($update){
        echo "<script>alert('Success set your profile');location.href='tampil_profile.php';</script>";
    }else{
        echo "<script>alert('Fail set your profile');location.href='tampil_profile.php';</script>";
    }
    
?>