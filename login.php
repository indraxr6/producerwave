<html lang="en">
    <meta charset="UTF-8">  
<head>
    
    <title>ProducerWave Account</title>
    <link rel="icon" href="images/daw.ico">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="signin-style.css">
    <h2>Login To Existing Account or Register ProducerWave</h2>
<div class="container" id="container">
	
	<div class="form-container sign-in-container">
		<form action="login_post.php" method="POST">
			<h1>Sign in</h1>
            
			<span>use your existing ProducerWave account</span>
            <img src="images/corner-icon_daw.png" style="width: 50px; padding-bottom: 40px; opacity: 0.8;" alt="daw-icon">
			<input type="email" name="email" placeholder="E-mail" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a> 
			<a href="index.php"><button>Sign In</button></a>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Producers!</h1>
				<p>Enter your personal details and start journey with us!</p>
				<a href="Register.php"><button class="ghost" id="signUp">Register</button></a> 
			</div>
		</div>
	</div>
</div>


<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->










    <!-- </head>
<body>
    
    <div class="sign-up-form">
        <h1>REGISTER</h1>
        <form>
            <h2>E-mail</h2>
            <input type="Email" class="input-box" placeholder="Type your e-mail" align="left">
            <h2>Password</h2>
            <input type="Password" class="input-box" placeholder="Type your password" align="left">
            <button type="button" class="sign-button">SIGN UP</button>
            <p class="or">OR</p>
            <button type="button" class="login-with-google">REGISTER WITH GOOGLE</button>
            <p class="account">Already have an account ? <a href="index.php">Sign in</a></p>
        </form>
    </div>
</body>
</head> -->