<?php 
    include "navbar.php";


?>
<h2 class="optext">Music Courses</h2>
<div class="row">
        
    <?php 
    include "conn.php";
    $qry_course=mysqli_query($conn,"select * from course");
    while($dt_course=mysqli_fetch_array($qry_course)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="file/<?=$dt_course['photo']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_course['name']?></h5>
                <p class="card-text"><?=substr($dt_course['description'], 2)?></p>
                <a href="buy_course.php?id_course=<?=$dt_course['id_course']?>" class="btn btn-primary">Purchase</a>
                </div>
              </div>
            </div>
        </div>

        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
