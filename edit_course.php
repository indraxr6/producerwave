<?php     
include  "conn.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_course_post.php?id=<?php echo $_GET['id_course'] ?> "  method="post">
    <?php 

    $sql = 'select * from course where id = '. $_GET['id_course'];
    $result = mysqli_query($conn, $sql);
    $data  = mysqli_fetch_assoc($result);
    ?>
    <div>
        <span>Name : </span>
        <input type="text" name="nama" value= "<?php echo $data['name']?>">
    </div>
    <div>
        <span>E-mail </span>
        <input type="text" name="alamat" value= "<?php echo $data['description']?>">
    </div>
    <div>
        <span>Password : </span>
        <input type="text" name="nama" value= "<?php echo $data['price']?>">
    </div>
    <div>
        <span>Level : </span>
        <input type="text" name="nama" value= "<?php echo $data['photo']?>">
    </div>
    <button type="submit">Update</button>
</form>
</body>
</html>