<?php 
include 'conn.php';
include 'navbar.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="user_account.css">

    <link rel="stylesheet" type="text/css" href="user_account.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Profile</title>
</head>
<body>

    <?php 
        
        $qry=mysqli_query($conn,"select * from users where email = '".$_SESSION['email']."'");
        $qry_users=mysqli_query($conn,"select * from users where email = '".$_SESSION['email']."'");
        $dt_users=mysqli_fetch_array($qry);
        $data_users=mysqli_fetch_array($qry_users);
    ?>
    <div class="container">
        <br><br><br><br>
        
        
        <div class="prof">
            <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <br>
                        <?php if(!$dt_users['photo']) {?>
                            <img src="usericon.jpg" alt="Profile" class="profil">
                        <?php }else{ ?>
                            <img src="<?php echo "".$dt_users['photo']; ?>" alt="Profile User" class="profil">
                        <?php } ?>
                       
                            </div>
                        </div>
                    </div>
            </div>
          
            <div class="identity">
                <h3 class="name" style="color: #4CAF50;"><?=$dt_users['name']?></h3>
                <p class="job"><?=$dt_users['address']?></p>
            </div>
        </div>
    </div>

    <div class="profile">
        <div class="quest">
            <br>
            <h3>ID User</h3>   
            <h3>Age</h3>
            <h3>Gender</h3>
            <h3>Address</h3>
            <h3>Date of Birth</h3>
            <h3>Phone Number</h3>
            <h3>Email</h3>
            <h3>Password</h3>
        </div>
        
        <div class="form">
            
            <input type="text" name="id" value="<?=$dt_users['id']?>" readonly>
            <br>
            <input type="number" name="age" value="<?=$dt_users['age']?>" readonly>
            <br>
            <input type="text" name="gender" value="<?=$dt_users['gender']?>" readonly>
            <br>
            <input type="text" name="address" value="<?=$dt_users['address']?>" readonly>
            <br>
            <input type="date" name="date_birth" value="<?=$dt_users['date_birth']?>" readonly>
            <br>
            <br>
            <input type="text" name="phone_number" value="<?=$dt_users['phone']?>" readonly>
            <br>
            <input type="email" name="email" value="<?=$dt_users['email']?>" readonly>
            <br>
            <input type="password" name="password" value="<?=$dt_users['password']?>" readonly>
            <br>
        </div>
    </div>
    <div class="bg">
        <div class="button">
                
                
                <a href="register2.php"><button class="btn btn-primary" type="submit">Edit Account</button></a>
                <a href="delete_account.php"><button class="btn btn-danger" onclick="return confirm('Are you sure to delete your account?')">Delete Account</button></a>
            </div>
        </div>
    

   
</body>
</html>