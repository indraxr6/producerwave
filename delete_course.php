<?php 
include 'conn.php'; 

    $id = $_GET['id'];

    $sql="
    delete from course
    where id = '".$id."';
    ";

    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location: user_admin.php');
    }else{
        printf('Failed update student'.mysqli_error($conn));
        exit();
    }
?>