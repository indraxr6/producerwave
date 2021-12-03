<?php     
include 'conn.php';

$id = $_GET['id_course'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$photo = $_POST['photo'];


$sql = "
    UPDATE course
    set name = '".$name."', description= '". $description . "', price= '". $price . "',  photo= '". $photo . "'
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
