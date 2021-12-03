<?php 
    include "navbar.php";


?>
<body style="height: 130%;">
    

<title>Music Production Courses</title>

<!-- <h2 class="optext">Music  Production Courses</h2> -->

<div style="margin-top: 30px ;" class="optext">
        <h1 style="color: #4CAF50;;">
            Music Production Courses - Basic that You need to know
        </h1>
        <p style="font-weight: lighter; padding-top: 30;" class="about">
        Music production is the process by which music is created, captured, manipulated, and preserved so that it can be distributed and enjoyed. All of the recorded music that you know and love exists because it went through the production process, no matter how well-known or underground a recording may be, and no matter how minimalist or maximalist it sounds.
        </p>
    </div>


<div class="row g-3">        
    <?php 
    include "conn.php";
    $qry_course=mysqli_query($conn,"select * from course");
    while($dt_course=mysqli_fetch_array($qry_course)){
        ?>
       <div class="col-md-4">
          <div class="card h-100" style=" font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
          <img src="<?=$dt_course['photo']?>" class="card-ig-top">
            <div class="card-body">
            <h5 class="card-title"><?=$dt_course['name']?></h5>
            <p class="card-text"><?=substr($dt_course['description'], 2)?></p>
            </div>
            <a href="buy_course.php?id_course=<?=$dt_course['id_course']?>" class="btn btn-success" style="background-color: #4CAF50;" >Buy Course ($<?=$dt_course['price']?>,99)</a>
            <div class="card-footer">
              <small class="text-muted">Posted on <?=$dt_course['date_added']?></small>
            </div>
           
          </div>
        </div> 
        

        <?php
    }
    ?>
</div>
<?php 
    // include "footer.php";
?>
</body>