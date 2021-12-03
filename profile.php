<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Edit Profile</title>
    <style>
        body{
            background: linear-gradient( to right, #0A0849, #240E63, #0550CE);
            height: auto;
        }

        .submit{
            width: 90px;
            height: 35px;
            border-radius: 20px;
            font-family: calibri;
            font-size: 14px;
            font-weight: bold;
            outline: none;
            margin-right: 20px;
            align-items: center;
            background: #0550CE;
            border-color: transparent;
            color: white;
            margin-top: 20px;
            box-shadow: 3px 3px 10px #6c757d;
            
        }

        .card{
            width: 70%;
            margin-left: 15%;
        }

    .sosbar i{
        color: #240E63;
        font-size: 20px;
    }

    .sosbar a:hover{
        background-color: #0A0849;
        box-shadow:3px 3px 10px #6c757d ;
        border-color: transparent;
    }

    .sosbar i:hover{
        color: white;
    }

    .sosbar{
        position: fixed;
        top: 50%;
        right: 0px;
        transform: translateY(-50%);
    }

    .sosbar a{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 50px;
        height: 50px;
        padding: 0px;
        margin: 0px;
        line-height: 0px;
        background-color: #FFFFFF;
        border: 1px solid #cbcbcb;
        box-shadow: 2px 2px 12px rgb(0, 0, 0, 0.2);
        text-decoration: none;
        cursor: pointer;
    }

      
    </style>

</head>
<body>
    <?php 
        include "koneksi.php";
        session_start();
        $qry=mysqli_query($conn,"select * from user where email = '".$_SESSION['email']."'");
        $qry_user=mysqli_query($conn,"select * from user join class on user.id_class=class.id_class where email = '".$_SESSION['email']."'");
        $dt_user=mysqli_fetch_array($qry);
        $data_user=mysqli_fetch_array($qry_user);
    ?>

    <div class="animate__animated animate__backInRight animate__slow">
     <div class="container">
         <div class="card" style="margin-top: 2%; box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
             <div class="card-header bg-light">
                 <h3 style="text-align: center;">Edit Profile</h3>
             </div>
             <div class="card-body">
                 <form action="profile.post.php" method="post" enctype="multipart/form-data">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="contoh1">Name</label>
                            <input type="text" name="name" value="<?=$dt_user['name']?>" class="form-control" id="contoh1">
                        </div>
                        <div class="col-md-6">
                            <label for="contoh2">Date of birth</label> 
                            <input type="date" name="date_birth" value="<?=$dt_user['date_birth']?>" class="form-control" id="contoh2">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="contoh3">Gender</label>
                            <?php 
                                $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
                            ?>
                            <select name="gender" class="form-control">
                                <option></option>
                                <?php foreach ($arr_gender as $key_gender => $val_gender):
                                    if($key_gender==$dt_user['gender']){
                                        $selek="selected";
                                    } else {
                                        $selek="";
                                    }
                                ?>
                                <option value="<?=$key_gender?>" <?=$selek?>><?=$val_gender?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="contoh4">Age</label>
                            <input type="number" name="age" class="form-control" value="<?=$dt_user['age']?>" id="contoh4">
                        </div>
                        <div class="col-md-6">
                            <label for="contoh5">Education</label>
                            <input type="text" name="education"  class="form-control" value="<?=$dt_user['education']?>" id="contoh5">
                        </div>
                    </div>
                    <br>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="contoh6">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" value="<?=$data_user['phone_number']?>" id="contoh6">
                        </div>
                        <div class="col-md-6">
                        <label for="contoh7">Class</label>
                            <select name="id_class" class="form-control">
                            <option></option>
                            <?php 
                                include "koneksi.php";
                                $qry_kelas=mysqli_query($conn,"select * from class");
                                while($data_kelas=mysqli_fetch_array($qry_kelas)){
                                    if($data_kelas['id_class']==$dt_user['id_class']){
                                        $selek="selected";
                                    } else {
                                        $selek="";
                                    }
                                echo '<option value="'.$data_kelas['id_class'].'" '.$selek.'>'.$data_kelas['name_class'].'</option>';   
                                }
                            ?>
                            </select>
                        </div>
                    </div>

                    <br>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="contoh8">Address</label>
                            <textarea name="address" id="contoh8" class="form-control"><?=$dt_user['address']?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>Photo Profile</label>
                            <input type="file" name="file" class="form-control" value="<?=$dt_user['photo']?>">
                        </div>
                    </div>
                    
                    <br>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="contoh9">Email</label>
                            <input type="email" name="email" class="form-control" value="<?=$dt_user['email']?>" id="contoh9" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="contoh10">Password</label>
                            <input type="password" name="password" class="form-control" value="<?=$dt_user['password']?>" id="contoh10" readonly>
                        </div>
                    </div>

                    <button type="submit" class="submit">SUBMIT</button>
                 </form>
             </div>
         </div>
     </div>
     </div>

     <div class="sosbar">
        <a href="index.php"><i class="fas fa-home"></i></a>
        <a href="tampil_profile.php"><i class="far fa-user-circle"></i></a>
    </div>
</body>
</html>