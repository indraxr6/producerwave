<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);
unset($_SESSION["user_id"]);
unset($_SESSION["login_status"]);
unset($_SESSION["cart"]);

header("Location: login.php");
?>
