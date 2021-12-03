<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<title>Add Course - Admin</title>
<body style="background-image: url(images/main-bg-log.jpg);">
    <?php 
        include "conn.php";  
        include "navbar.php";
    ?>


    <div class="optext">

<h1>User Details</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores, facere fugit nulla pariatur tempora omnis recusandae. Necessitatibus obcaecati animi soluta, tempora consequatur quia illum, neque accusantium recusandae, cupiditate sed!</p>
</div>
<hr>
<div class="text-center">
    <a class="btn btn-success" href="user_admin.php">Back</a>
    </div>
<style>
    .optext {
    text-align: justify; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
    color: antiquewhite; 
    margin-top: 50px;
    margin-left: 230px;
    margin-right: 230px; 
    padding: 20px; 
    font-size: 20px
}

</style>
    
<div style="align-items: center;">
    <div class="col-md-12" style>
     <div class="optext">
         <div class="card" style=" box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);">
             <div class="card-header bg-translucent">
                 <h3 style="text-align: center;">Add Courses</h3>
             </div>
             
             <div class="card-body">
                      
                 <form action="add_course_post.php" method="post" enctype="multipart/form-data">

                     <div class="row g-3">
                         <div class="col-md-6">
                             <label>Course Name</label>
                             <input type="text" name="name" value="" class="form-control">
                         </div>
                     </div>
                     <br>

                     <div class="row g-3">
                         <div class="col-md-6">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                         </div>

                     <div class="row g-3">
                         <div class="col-md-6">
                            <label>Price</label>
                            <input type="number" name="price"  class="form-control">
                        </div>

                        <div class="row g-3">
                         <div class="col-md-6">
                            <label>Date Added</label>
                            <input type="date" name="date_added"  class="form-control">
                        </div>

                         <div class="col-md-6">
                             <label>Photo</label>
                             <input type="file" name="photo"  class="form-control">
                         </div>
                     </div>
                     
                    
                      <div class="col-md-12">   
                    <button type="submit" class="btn btn-primary">Post</button>
                    </div>

                 </form>
                 
             </div>
         </div>
        </div>
        </div>
        </div>
</div>    

</body>
</html>