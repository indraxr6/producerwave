<?php 
session_start();
    if($_SESSION['login_status']!=true){
        
}
?>
<html lang="en">
    <meta charset="UTF-8">  
<head>
    
    
    <title>DAW - What to know?</title>
    <link rel="icon" href="images/daw.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <header>
        <section>
            <nav>  
                    <a href="index.php"> <img src="corner-icon_daw_invert.png" class="daw-icon"></a>
                    <ul class="appbutton">
                        <li><a class="appbutton-container" href="Logic.php" id="1"> Logic Pro</a></li>
                        <li><a class="appbutton-container" href="FL.php" id="2"> FL Studio</a></li>
                        <li><a class="appbutton-container" href="Able.php" id="3"> Ableton</a></li>
                        <li><a class="appbutton-container" href="Garage.php" id="4"> Garage Band</a></li>
                        <li><a class="appbutton-container-right" href="login.php"> <?= $_SESSION['name']  ?></a></li>
                        <a id="cart" href="logout.php"> <img src="images/logout.svg" class="cart-icon" style="width: 40px; filter: invert(1); opacity: 0.8;"></a>
            </ul>
            <ul class="appbutton-right"></ul>
            </nav>       
            
        </section>
    </header>
    <div style="margin-top: 50px ;" class="optext">
        <h1 style="color: #4CAF50;;">
            Topics to read
        </h1>
        <p style="font-weight: lighter; padding-top: 30;" class="about">
            In this article You’ll go through everything you need to know to understand the basics of music production and get started as a music production.
        </p>
    </div>
    

    <div style="margin: 20px;" class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="images/daw.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">What is Digital Audio Workstation (DAW)?</h3>
              <p class="card-text">
                A digital audio workstation (DAW) is an electronic device or application software used for recording, editing and producing audio files. With a software DAW, an audio producer can easily record each track and adjust the levels so that the sounds are balanced and clear.</p>
            </div>
            <a href="article1.php" class="btn btn-success" style="background-color: #4CAF50;" >Read More</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 32 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="images/topic2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title">Music Production: What Does a Music Producer Do?</h3>
              <p class="card-text">Professional music production is creative and technical. It requires well-developed listening skills, a good handle on recording technology, a deep musical knowledge, and effective project management and leadership skills by a music producer, also known as a record producer.</p>
            </div>
            <a href="article2.php" class="btn btn-success" style="background-color: #4CAF50;" >Read More</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 7 hour ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="images/topic3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title">Music Production: Everything You Need to Get Started</h3>
              <p class="card-text">Music production is the process behind every track in your library. It covers every phase in the creation of a song from writing to the final master. But music production is a practice that can form the basis of your creative workflow as a musician. It’s never been easier or more accessible to start producing music. </p>
            </div>
            <a href="article3.php" class="btn btn-success" style="background-color: #4CAF50;" >Read More</a>
            <div class="card-footer">
              <small class="text-muted">Last updated 4 days ago</small>
              
            </div>
          </div>
        </div>
      </div>
        <a href="index.php"> "<button class="learn-button-container">Go Back</button></a>
        <!-- <footer>
            <p>
                Created by ProducerWave management at
                <a target="_blank" href="https://smktelkom-mlg.sch.id/">Moklet</a>
                - start your music journey with us!
                
            </p>
        </footer> -->
</body>
</html>