<title>Check In Course</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">



<?php 
    include "navbar.php";
    include "conn.php";
    $qry_detail_course=mysqli_query($conn,"select * from course where id_course = '".$_GET['id_course']."'");
    $dt_course=mysqli_fetch_array($qry_detail_course);
    
?>

<body  style="background-image: url(images/main-bg-log.jpg);">
<br>
<br>
<br>
<h2 style ="color: #4CAF50; text-align: center;">Check In Course</h2>
<br>

<div class="row">
    
    <div class="col-md-4" style="margin-left: 9%;" >
        <img src="<?=$dt_course['photo']?>" class="card-img">
    
    </div>
    
    <div class="col-md-6">
        <form action="buy_course_post.php?id_course=<?=$dt_course['id_course']?>" method="post">
            <table class="table table-hover table-striped" style="color: white">
                <thead style="font-size: 18px;">
                    <tr>
                        <td>Course</td><td><?=$dt_course['name']?></td>
                    </tr>
                    <tr>
                        <td>Description</td><td><?=$dt_course['description']?></td>
                    </tr>
                    <tr>
                        <td>Price</td><td>$<?=$dt_course['price']?>,99</td>
                    </tr>
                    <tr>
                        <td>Date added</td><td><?=$dt_course['date_added']?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Purchase"></td>
                    
                </thead>
            </table>
        </form>
    </div>
</div>

    
</body>
<?php 
    
?>





































