<?php     
include 'conn.php';

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];


$sql = "
    UPDATE users
    set name = '".$name."', email= '". $email . "', password= '". $password . "',  level= '". $level . "'
    where email = '".$_SESSION['email']."';
    ;

";

$result =mysqli_query($conn,$sql);

if($result){
  
    header('Location: user_admin.php');

}else{
    printf('Failed update users'.mysqli_error($conn));
    exit();
}
?>
