<?php 
include "navbar.php";

?>
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


