<?php 
    include "koneksi.php";

    session_start();
    $foto = null;

    $result = $conn -> query('update user set photo = "' . $foto . '" where email = "' . $_SESSION['email'] . '"');

    if (!$result){
        var_dump($conn->query);
        exit();
    }

    header('Location: tampil_profile.php')

?>