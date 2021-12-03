<?php 
session_start();
    if($_SESSION['login_status']!=true){
        // header("location: index.php");
        header("location: login.php");
}
?>

<php lang="en">
    <meta charset="UTF-8">  
<head>
    <!-- <title>Producerwave</title> -->
    <link rel="icon" href="images/daw.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body">
    <header>
        <section>
            <nav>  
                    <a href="index.php"> <img src="images/corner-icon_daw_invert.png" class="daw-icon"></a>
                    <ul class="appbutton">

                    <div class="dropdown" style="background-color: #111f37;">
                    <a class="btn btn-secondary dropdown-toggle" style="background-color: #111f37; border-color: #111f37; opacity: 0.8; font-size: 18px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      DAWs
                     </a>
                     

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="Logic.php">Logic Pro</a></li>
                            <li><a class="dropdown-item" href="FL.php">FL Studio</a></li>
                            <li><a class="dropdown-item" href="Able.php">Ableton Live</a></li>
                            <li><a class="dropdown-item" href="Garage.php">Garageband</a></li>
                        </ul>
                    </div>
              
                        
                        <li><a class="appbutton-container" href="learnmore.php" id="2"> Articles</a></li>
                        <li><a class="appbutton-container" href="course.php" id="3"> Courses</a></li>
                        <li><a class="appbutton-container" href="about.php" id="4"> About Us</a></li>
                    
                        
                        <div>
                        <li><img src="images/account.svg"  id="cart" style="width: 32px; filter: invert(1); opacity: 0.8;"><a class="appbutton-container-right" href="user_account.php" ><?= $_SESSION['name']  ?><a>
                    </div>
                        
                        <a id="cart" href="logout.php"><img src="images/logout2.svg" class="cart-icon" style="width: 37px; filter: invert(1); opacity: 0.8; transform: scaleX(-1);"></a>
                        </div>
                </ul>
            <!-- <ul class="appbutton-right"></ul> -->
            </nav>       
            
        </section>
    </header>