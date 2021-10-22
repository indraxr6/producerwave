<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header("location: index.html");
}
?>

<html lang="en">
    <meta charset="UTF-8">  
<head>
    <title>The DAWs Article</title>
    <link rel="icon" href="daw.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
                        <li><a class="appbutton-container-right" href="Login.html"> Login/Register</a></li>
                        <a id="cart" href="Logout.php"> <img src="logout.svg" class="cart-icon" style="width: 40px; filter: invert(1); opacity: 0.8;"></a>
            </ul>
            <ul class="appbutton-right"></ul>
            </nav>       
            
        </section>
    </header>

    <div class="bodymain">
    <div class="iconselect"; style="text-align: center; margin-top: 80px;">
        
        <a href="https://www.image-line.com/" target="_blank"> <img src="flstudio.png" style="width: 140; "></a>
        <a href="https://www.ableton.com/en/" target="_blank"> <img src="ableton.png" style="width: 200; height: 200;"></a>
        <a href="https://www.apple.com/id/logic-pro/" target="_blank"> <img src="logicpro.png" style="width: 200; height: 200;"></a>
        <a href="https://www.apple.com/id/ios/garageband/" target="_blank"> <img src="garageband.png" style="width: 200; height: 200;"></a>
    </div>
    
    <h5  style="text-align: center; margin-bottom: 50px; color: #4CAF50;">Welcome back, <?= $_SESSION['name']  ?></h5>

    <div class="optext">
        
        <h1>
            What is DAW?
        </h1>

        <p class="about">
            A digital audio workstation (DAW) is a software program used for composing, producing, recording, mixing and editing audio and MIDI.
            DAWs facilitate mixing of multiple sound sources on a time-based grid. There are lots of different DAWs out there, each with different strengths and weaknesses.
        </p>
    </div>
    
    <div>   
        
        <a href="learnmore.html"><button class="learn-button-container">Learn More</button></a>
        
    </div>
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


