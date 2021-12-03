<?php
include 'conn.php';
include 'navbar.php'; 

if($_SESSION['name']!="admin"){
    // echo '<script>alert("You are not an admin! Access Denied")</script>';
    
    
    // header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <title>User Details - Admin</title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
}
th, td {
  padding: 10px;
  margin-bottom: 20px;
}
</style>
    
</head> 

<body style="background-image: url(images/main-bg-log.jpg);">

<div class="optext">

    <h1>User Details</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores, facere fugit nulla pariatur tempora omnis recusandae. Necessitatibus obcaecati animi soluta, tempora consequatur quia illum, neque accusantium recusandae, cupiditate sed!</p>
    </div>
    <hr>

    <style>
    .optext {
    text-align: center; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    color: antiquewhite; 
    margin-top: 50px;
    margin-left: 230px;
    margin-right: 230px; 
    padding: 20px; 
    font-size: 22px
}

</style>

    <?php $sql ='select * from users';
        $result = mysqli_query($conn, $sql);

    ?>
    <div class="text-center">
    <a class="btn btn-success" href="add_course.php">Add Courses</a>
    </div>
    <table border = "1"; style="margin-left: auto;
  margin-right: auto;" class="optext">
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Level</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['password']; ?></td>
                <td><?php echo $data['level']; ?></td>
               
        
                <td>    
                <a class="btn btn-primary" href="edit_account.php ?id= <?php echo $data ['id'] ?>   " >Edit</a>
                <a class="btn btn-danger" href="delete_user.php ?id= <?php echo $data ['id'] ?>   ">delete</a>    
            </td>
                
            </tr>
               
           
            
            <?php } ?>
            
        </tbody>
    </table>

    <div class="optext">

    <h1>Courses Details</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores, facere fugit nulla pariatur tempora omnis recusandae. Necessitatibus obcaecati animi soluta, tempora consequatur quia illum, neque accusantium recusandae, cupiditate sed!</p>
    </div>
    <hr>

    <style>
    .optext {
    text-align: center; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    color: antiquewhite; 
    margin-top: 50px;
    margin-left: 230px;
    margin-right: 230px; 
    padding: 20px; 
    font-size: 18px
}

</style>


    <?php $sql ='select * from course';
        $result = mysqli_query($conn, $sql);

    ?>
    
    <table border = "1"; style="margin-left: auto;
  margin-right: auto;" class="optext">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Date added</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            while($data = mysqli_fetch_assoc($result)){?>
            <tr>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td>$<?php echo $data['price']; ?></td>
                <td><?php echo $data['date_added']; ?></td>
               
        
                <td>    
                <a class="btn btn-primary" href="edit-siswa.php ?id= <?php echo $data ['id_course'] ?>   " >Edit</a>
                <a class="btn btn-danger" href="delete_course.php?id= <?php echo $data ['id_course'] ?>   ">delete</a>    
            </td>
                
            </tr>
              
            
            <?php } ?>
            
        </tbody>
    </table>
</body>
</html>