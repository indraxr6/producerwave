<?php 
session_start();
 
?>
<html lang="en">
          <meta charset="UTF-8">  
      <head>
          
          
          <title>The DAWs Article</title>
          <link rel="icon" href="daw.ico">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
          <link rel="stylesheet" type="text/css" href="style.css">
      
      
      </head>
      <body>
          <header>
              <section>
                  <nav>  
                          <a href="index.php"> <img src="corner-icon_daw_invert.png" class="daw-icon"></a>
                          <ul class="appbutton">
                              <li><a class="appbutton-container" href="Logic.html" id="1"> Logic Pro</a></li>
                              <li><a class="appbutton-container" href="FL.html" id="2"> FL Studio</a></li>
                              <li><a class="appbutton-container" href="Able.html" id="3"> Ableton</a></li>
                              <li><a class="appbutton-container" href="Garage.html" id="4"> Garage Band</a></li>
                              <li><a class="appbutton-container-right" href="login.php"> <?= $_SESSION['name']  ?></a></li>
                        <a id="cart" href="logout.php"><img src="images/logout.svg" class="cart-icon" style="width: 40px; filter: invert(1); opacity: 0.8;"></a>
                              
      
                  </ul>
                  <ul class="appbutton-right"></ul>
                  </nav>       
                  
              </section>
          </header>
      
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color: #4CAF50;">Music production software and equipment </h5>
                          <p>
                              Don’t worry—music production setups can vary a lot. You don’t need tons of expensive gear to get started as a producer.
                              But you will need a handful of key pieces. I’m talking about equipment like a computer, DAW and something to listen to your sounds.
                              
                              I could list everything individually, but if you want the best advice for building a music production setup with any budget, go check out our Home Studio Guide.
                              
                              Many producers create entire tracks using only their DAW—but just as many others prefer the tactile experience and hands-on control of hardware.
                              
                              Synths, drum machines, grooveboxes and effects pedals are fun and inspiring equipment to add to your setup.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color: #4CAF50;">Producing music in a DAW</h5>
                          <p>Your DAW is the digital home for your music production.

                              In a traditional recording studio, the DAW would be the tape machine—but it’s so much more that.
                              
                              Your DAW is the perfect environment for every step of your music production workflow.
                              
                              Many producers prefer to write in their DAW by creating loops and clips of their ideas on the fly.
                              
                              Structuring isolated fragments into full arrangements is one of the biggest strengths of a DAW-based songwriting workflow.
                              
                              And mixing has never been easier than with a DAW and plugins. </p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5 style="color: #4CAF50; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Songwriting and composition: create a song</h5>
                          <p>
                              Some songwriters produce. Some producers write songs. The boundary between artist and producer isn’t always a bright line.
                              
                              That means knowing the basics of songwriting and composition is important for modern producers.
                              
                              The producer often has to make tough decisions when something isn’t working. Is it the mix? Or the arrangement?
                              
                              Is it the parts, or the tones? Or the effects? Is this song boring, or does it just have the wrong song structure?
                              
                              These are the types of questions an experienced producer should be able to answer.</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                
      
                <!-- <a onclick="goBack()" href="#" class="btn btn-success" style="background-color: #4CAF50; border-radius: 12px;" >Go Back</a>
                <script>
                  function goBack() {
                    window.history.back();
                  }
                  </script> -->
                
                
                
            </div>
            