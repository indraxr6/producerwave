<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["user_id"]);
unset($_SESSION["login_status"]);
header("Location:login.html");
?>