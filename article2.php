<?php 
session_start();
 
?>
<html lang="en">
          <meta charset="UTF-8">  
      <head>
          
          
          <title>The DAWs Article</title>
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
                        <a id="cart" href="logout.php"><img src="images/logout.svg" class="cart-icon" style="width: 40px; filter: invert(1); opacity: 0.8;"></a>

                              
      
                  </ul>
                  <ul class="appbutton-right"></ul>
                  </nav>       
                  
              </section>
          </header>
      
              <div class="optext2">
                <h1 style="color: #4CAF50;">
                    What is a Music Producer?
                </h1>
                <br>
                <figure class="figure">
                  <img style="width: 8in;" src="images/article2-prod.jpg" class="figure-img img-fluid rounded" alt="...">
                  <figcaption style="color: whitesmoke; text-align: justifyx;" class="figure-caption"> A music producer, or record producer, assists an artist with their recording project, bringing their vision to fruition and guiding their sound along the way. Being a music producer is in many ways a strange job. What a producer creates can’t be seen. What a producer creates is not even an object. If you zoom all the way out, what a music producer does for a living is this: Vibrate air molecules in such a way that when the air molecules bump up against a human life form, that life form feels something.</figcaption>
                </figure>
                <br>
                <h1 style="color: #4CAF50;">
                    What Music Producers Do?
                </h1>
                <figure class="figure">
                  <figcaption style="color: whitesmoke; text-align: justify;" class="figure-caption"> The role of a music producer has always been a somewhat nebulous one. Increasingly it can mean a number of vastly different things. Is someone who programs a beat a producer? Yes. Is someone who takes calls, coordinates meetings, and gets artists signed to labels a producer? Yes. Is someone who plays bass, co-writes songs, and mediates disputes between band members a producer? Yes. 
                      <div class="article1-list">
                          <li><strong style="color: #4CAF50;">Schedule and Budget,</strong> In many ways, it is the primary reason a music producer is given the job. They have demonstrated by their work that they are a professional, capable of making a successful record and submitting the finished product exactly on the contractually-agreed-upon date. For a larger commercial recording project for a major label—or a smaller but well-financed label—the completion date is a critical part of a larger schedule. The process includes manufacturing, marketing, and publicity schedules that will coordinate to launch the record’s release (or “street date”).</li>
<br>
                          <li><strong style="color: #4CAF50;">Shaping the Music,</strong> This second responsibility revolves around the question of how a producer takes the raw material of an artist’s song and transforms it into a finished recording. This function is both artistic and commercial. It must express the artist’s musical and emotional intent, but must also reach a broad audience.</li>
<br>
                          <li><strong style="color: #4CAF50;">Supervising Performance, </strong>The producer must know how to identify and obtain the best performances from the individual members of the group. There is an assumption that, if it moves you, it can move other listeners. For the producer, trusting this emotional response is a quintessential function. The confidence to say, “I like this one,” is at the heart of a producer’s role. They apply the same critical function at virtually every stage of the recording process. </li>
<br>
                          <li><strong style="color: #4CAF50;">‘Work vs. Play,</strong> The producer must maintain the subtle balance between the demands of the work and the creative elements that make up compelling music. The skilled producer creates a balance between these two oppositions, and does so by manipulating that amorphous idea musicians love so much: The Vibe.</li>
                      </div>
                  </figcaption>
                </figure>
                <br>
                
      
                <a onclick="goBack()" href="#" class="btn btn-success" style="background-color: #4CAF50; border-radius: 12px;" >Go Back</a>
                <script>
                  function goBack() {
                    window.history.back();
                  }
                  </script>
                
                
                
            </div>
            <footer>
              <p>
                  Created by ProducerWave management at
                  <a target="_blank" href="https://smktelkom-mlg.sch.id/">Moklet</a>
                  - start your music journey with us!
                  
              </p>
          </footer>