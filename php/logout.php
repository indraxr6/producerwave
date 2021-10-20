<?php
session_start();
unset($_SESSION["nama_siswa"]);
unset($_SESSION["id_siswa"]);
unset($_SESSION["status_login"]);
header("Location:login.php");
?>