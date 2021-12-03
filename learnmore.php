<?php 
include "navbar.php";
if($_SESSION['login_status']!=true){
  header (location: "login.php");       
}
?>

<html lang="en">
    <meta charset="UTF-8">  
<head>
    
    
    <title>DAW - What to know?</title>
    
</head>
<body>
    
    <div style="margin-top: 30px ;" class="optext">
        <h1 style="color: #4CAF50;;">
            Topics to read
        </h1>
        <p style="font-weight: lighter; padding-top: 30;" class="about">
            In this article You’ll go through everything you need to know to understand the basics of music production and get started as a music producer.
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
      <div class="cente">   
        
        <a href="index.php"><button class="back-container" style="
    background-color: #4CAF50;
    border-radius: 10px;
    border-color: transparent;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    /* font-weight: 500; */
    opacity: 0.7;
    transition: 0,3s;
    margin: 0;
    position: relative;
    top: 110%;
    left: 47%;
    
}">Back</button></a>
        
    </div>
        <footer>
            <p>
                Created by ProducerWave management at
                <a target="_blank" href="https://smktelkom-mlg.sch.id/">Moklet</a>
                - start your music journey with us!
                
            </p>
        </footer>
</body>
</html>
<footer>
  
</footer>