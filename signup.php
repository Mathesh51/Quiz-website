<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/form-styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Sign Up</title>
	<script type="text/javascript">
		function checkPassword(str)
		{
    		// at least one number, one lowercase and one uppercase letter
    		// at least six characters
    		var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    		return re.test(str);
    	}

    	function validatesignup(){
    		var username = document.signupform.username.value;
    		var email = document.signupform.email.value;
    		var pwd = document.signupform.pwd.value;
    		var pwdagain = document.signupform.pwdagain.value;

    		var atposition = email.indexOf("@");
    		var dotposition = email.lastIndexOf(".");

			//Checking if email is null
			if (email==null || email==""){
				$(document).ready(function(){
					$("#emailnullalert").show();
				});
				return false;
			} else {
				$(document).ready(function(){
					$("#emailnullalert").hide();
				});
			}
			//Checking if email is valid
			if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){
				$(document).ready(function(){
					$("#emailcheckalert").show();
				});				
				return false;
			} else {
				$(document).ready(function(){
					$("#emailcheckalert").hide();
				});			
			}
			//Checking if username is null
			if (username==null || username==""){
				$(document).ready(function(){
					$("#namenullalert").show();
				});				
				return false;
			} else {
				$(document).ready(function(){
					$("#namenullalert").hide();
				});			
			} 
			//Checking if the username is the appropriate length
			if (username.length<8){
				$(document).ready(function(){
					$("#namelengthalert").show();
				});				
				return false;
			} else {
				$(document).ready(function(){
					$("#namelengthalert").hide();
				});			
			}
			//Checking if password is null
			if (pwd==null || pwd==""){
				$(document).ready(function(){
					$("#pwdnullalert").show();
				});	
				return false;		
			} else {
				$(document).ready(function(){
					$("#pwdnullalert").hide();
				});			
			}
			//Checking the validity of the password
			if (checkPassword(pwd)==true){
				$(document).ready(function(){
					$("#pwdlengthalert").hide();
				});					
			} else {
				$(document).ready(function(){
					$("#pwdlengthalert").show();
				});	
				return false;			
			}
			//Checking if the re-entering of password is valid
			if (pwdagain==null || pwdagain==""){
				$(document).ready(function(){
					$("#pwdagainnullalert").show();
				});					
				return false;
			} else {
				$(document).ready(function(){
					$("#pwdagainnullalert").hide();
				});	
			}
			//Checking if both passwords are the same
			if (pwd==pwdagain){
				$(document).ready(function(){
					$("#pwdagainalert").hide();
				});					
				return true;
			} else {
				$(document).ready(function(){
					$("#pwdagainalert").show();
				});					
				return false;
			}
		}
	</script>
</head>
<body>
	<!-- Navbar -->
	<div class="navbar-fixed">
		<nav class="default_color z-depth-0" role="navigation">
			<div class="container">
				<div class="nav-wrapper">
					<a href="index.php" class="brand-logo">Quiz App</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">About</a></li>
						<li><a href="badges.html">Categories</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	
	<form name="signupform" onsubmit="return validatesignup()" action="php/signupauthent.php" method="post">
		<div class="formcontainer">
			<div class="title">
				<h1>Sign Up</h1>
				<p>Please fill in this form to create an account.</p>
			</div><br>

			<label for="email"><b>Email:</b></label><br>
			<input type="text" name="email" placeholder="Enter email address">
			<br>
			<div class="alert" id="emailnullalert">
				<p>Email cannot be blank</p>
			</div>
			<div class="alert" id="emailcheckalert">
				<p>Please enter a valid e-mail address e.g. example@gmail.com</p>
			</div>

			<label for="username"><b>Username:</b></label><br>
			<input type="text" name="username" placeholder="Enter username">
			<br>
			<div class="alert" id="namelengthalert">
				<p>Username is too short. 8 characters minimum</p>
			</div>
			<div class="alert" id="namenullalert">
				<p>Username cannot be blank</p>
			</div>
			<div class="alert" id="signupalert">
				<p>The username already exists</p>
			</div>

			<label for="pwd"><b>Password:</b></label><br>
			<input type="password" name="pwd" placeholder="Enter Password">
			<br>
			<div class="alert" id="pwdnullalert">
				<p>Password cannot be blank</p>
			</div>
			<div class="alert" id="pwdlengthalert">
				<p>Password must be at least 8 characters long<br>and must contain numbers and symbols</p>
			</div>

			<label for="pwdagain"><b>Repeat Password:</b></label><br>
			<input type="password" name="pwdagain" placeholder="Enter Password again">
			<br>
			<div class="alert" id="pwdagainnullalert">
				<p>Please re-enter password</p>
			</div>
			<div class="alert" id="pwdagainalert">
				<p>Passwords do not match</p>
			</div>

			<label>
				<input type="checkbox" name="remember">Remember me
			</label>

			<p>By creating an account, you agree to our <a href="#">Terms & Privacy</a>.</p>

			<p>Already have an account? <a href="loginpage.php">Log In</a></p>

			<div class="buttons-class">
				<button type="submit" class="btnsignup">Sign Up</button>
				<button type="button" class="btncancel">Cancel</button>
			</div>
		</div>
	</form>
	<footer>
		<p>Quiz site @2018</p>
	</footer>
	<script src="js/jquery.js"></script>
</body>
</html>