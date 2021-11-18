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
    <title>Producerwave</title>
    <link rel="icon" href="images/daw.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <section>
            <nav>  
                 
                    <a href="index.php"> <img src="images/corner-icon_daw_invert.png" class="daw-icon"></a>
                    <ul class="appbutton">
                        
                        
                    <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                      DAWs
                     </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="Logic.php">Logic Pro</a></li>
                            <li><a class="dropdown-item" href="FL.php">FL Studio</a></li>
                            <li><a class="dropdown-item" href="Able.php">Ableton Live</a></li>
                            <li><a class="dropdown-item" href="Garage.php">Garageband</a></li>
                            
                        </ul>
                        </div>
                        <!-- <li><a class="appbutton-container" href="Logic.php" id="1"> Logic Pro</a></li> -->
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

    <div class="bodymain">
    <div class="iconselect"; style="text-align: center; margin-top: 80px;">
        
        <a href="https://www.image-line.com/" target="_blank"> <img src="images/flstudio.png" style="width: 140; "></a>
        <a href="https://www.ableton.com/en/" target="_blank"> <img src="images/ableton.png" style="width: 200; height: 200;"></a>
        <a href="https://www.apple.com/id/logic-pro/" target="_blank"> <img src="images/logicpro.png" style="width: 200; height: 200;"></a>
        <a href="https://www.apple.com/id/ios/garageband/" target="_blank"> <img src="images/garageband.png" style="width: 200; height: 200;"></a>
    </div>
    
    <h5  style="text-align: center; margin-bottom: 50px; color: #4CAF50;">Welcome back, <?= $_SESSION['name']  ?>!</h5>

    <div class="optext">
        
        <h1>
            What is DAW?
        </h1>

        <p style="font-size: 22px;" class="about" >
            A digital audio workstation (DAW) is a software program used for composing, producing, recording, mixing and editing audio and MIDI.
            DAWs facilitate mixing of multiple sound sources on a time-based grid. There are lots of different DAWs out there, each with different strengths and weaknesses.
        </p>
    </div>
    
    <div>   
        
        <a href="learnmore.php"><button class="learn-button-container">Learn More</button></a>
        
    </div>
</div>
<footer>
	<p>
		Created by ProducerWave management at
		<a target="_blank" href="https://smktelkom-mlg.sch.id/">Moklet</a>- start your music journey with us!</p>

        
</footer>
    
</body>
</php>


