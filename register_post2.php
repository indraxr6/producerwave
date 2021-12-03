<?php
if($_POST){

    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $date_birth=$_POST['date_birth'];
    $phone=$_POST['phone'];
   
    $email=$_POST['email'];

//     $file = $_FILES['photo'];

//     $uploadPath = 'file/profile' . basename($file['name']);
    
//     $result = move_uploaded_file($file['tmp_name'], $uploadPath);
          $nama = $_FILES['photo']['name'];
	$ukuran	= $_FILES['photo']['size'];
	$file_tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($file_tmp, 'file/profile/'.$nama);
    
    
    if(empty($age)){
        echo "<script>alert('Name can't be empty');location.href='register_post.php';</script>";
    } elseif(empty($date_birth)){
        echo "<script>alert('E-mail can't be empty');location.href='register_post.php';</script>";
    } elseif(empty($address)){
        echo "<script>alert('Please fill your password');location.href='register_post.php';</script>";
    } else {
        include "conn.php";
        $update=mysqli_query($conn,"update users set date_birth='".$date_birth."',address='".$address."', age='".$age."', gender='".$gender."', phone='".$phone."', photo='file/profile/".$nama."' where email = '".$email."' ") ;    
       
        if($update){
            echo "<script>alert('Register Success')</script>";
            header("location: login.php");
        } else {
           
        }
    }
}
// include "conn.php";
//         $insert=mysqli_query($conn,"update users (age, gender, address, date_birth, phone, photo) value ('".$age."','".$gender."','".$address."','".$date_birth."','".$phone."','".$photo."')") or die(mysqli_error($conn));

// $nama_siswa=$_POST['nama_siswa'];
    // $tanggal_lahir=$_POST['tanggal_lahir'];
    // $alamat=$_POST['alamat'];
    // $gender=$_POST['gender'];
    // $username=$_POST['username'];
    // $password= $_POST['password'];
    // $id_kelas=$_POST['id_kelas'];
?>
