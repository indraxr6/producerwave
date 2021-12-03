<?php
include "conn.php";
session_start();

if($_POST){  
   
    $name_course=$_POST['name'];
    $description_course=$_POST['description'];
    $price_course=$_POST['price'];

    $file = $_FILES['photo'];

$uploadPath = 'file/' . basename($file['name']);

$result = move_uploaded_file($file['tmp_name'], $uploadPath);



   $date_added=$_POST['date_added'];

        include "conn.php";
        $insert=mysqli_query($conn,"insert into course (name, description, price, photo, date_added) value ('".$name_course."','".$description_course."','".$price_course."','".$uploadPath."','".$date_added."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan produk');location.href='course.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";

        }

    }




