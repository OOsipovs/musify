<?php 
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	$account = new Account($con);
	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name){
		if(isset($_POST[$name])){
			echo $_POST[$name];
		}		
	}
?>

<html>
	<head>
		<title>
			Welcome to Musify!
		</title>
		<link rel="stylesheet" type="text/css" href="assets/css/register.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/register.js"></script>
	</head>
	<body>
		<?php
			if(isset($_POST['registerButton'])){
				
				echo '<script>
					$(document).ready(function(){
						$("#loginForm").hide();
						$("#registerForm").show();
					});
				</script>';
			}
			else {
				echo '<script>
					$(document).ready(function(){
						$("#loginForm").show();
						$("#registerForm").hide();
					});
				</script>';
			}
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#loginForm").show();
				$("#registerForm").hide();
			});
		</script>

		<div id="background">
			<div id="loginContainer">
				<div id="inputContainer">
					<form id="loginForm" action="register.php" method="POST">
						<h2>
							Login to your account
						</h2>
						<p>
							<?php echo $account->getError(Constants::$loginFailed); ?>
							<label for="loginUsername">Username</label>
							<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g bartSimpson" required>
						</p>
						<p>
							<label for="loginPassword">Password</label>
							<input id="loginPassword" name="loginPassword" placeholder="Your password" type="password" required>	
						</p>	
						
						<button type="submit" name="loginButton">Log In</button>
						<div class="hasAccountText">
							<span id="hideLogin">Don't have an account yet? Sign up here.</span>
						</div>
					</form>

					<form id="registerForm" action="register.php" method="POST">
						<h2>
							Create your free account
						</h2>
						<p>
							<?php echo $account->getError(Constants::$userNameCharacters); ?>
							<?php echo $account->getError(Constants::$usernameTaken); ?>
							<label for="username">Username</label>
							<input id="username" name="username" type="text" value="<?php getInputValue('username')?>" placeholder="e.g bartSimpson" required>
						</p>
						<p>
							<?php echo $account->getError(Constants::$firstNameCharacters); ?>
							<label for="firstName">First Name</label>
							<input id="firstName" name="firstName" type="text" value="<?php getInputValue('firstName')?>" placeholder="e.g Bart" required>
						</p>
						<p>
							<?php echo $account->getError(Constants::$lastNameCharacters); ?>
							<label for="lastName">Last Name</label>
							<input id="lastName" name="lastName" type="text" value="<?php getInputValue('lastName')?>" placeholder="e.g Simpson" required>
						</p>
						<p>
							<?php echo $account->getError(Constants::$emailInvalid); ?>
							<?php echo $account->getError(Constants::$emailDontMatch); ?>
							<?php echo $account->getError(Constants::$emailTaken	); ?>
							<label for="email">Email</label>
							<input id="email" name="email" type="email" placeholder="e.g bart@gmail.com" value="<?php getInputValue('email')?>" required>
						</p>
						<p>
							<label for="email2">Confirm Email</label>
							<input id="email2" name="email2" type="email" placeholder="e.g bart@gmail.com" value="<?php getInputValue('email2')?>" required>
						</p>
						


						<p>
							<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
							<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
							<?php echo $account->getError(Constants::$passwordCharacters); ?>
							<label for="password">Password</label>
							<input id="password" name="password" type="password" placeholder="Your password" required>	
						</p>
						<p>
							<label for="password2">Confirm password</label>
							<input id="password2" name="password2" type="password" placeholder="Your password" required>	
						</p>	
						
						<button type="submit" name="registerButton">Sign Up</button>
						<div class="hasAccountText">
							<span id="hideRegister">Already have an account? Log in here</span>
						</div>
					</form>
				</div>
				<div id="loginText">
					<h1>Get great music, right now</h1>
					<h2>Listen to loads of songs for free</h2>
					<ul>
						<li>Discover music you'll fall in love with</li>
						<li>Create your own playlists</li>
						<li>Follow artists to keep up to date</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>