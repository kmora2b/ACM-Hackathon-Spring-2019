<!DOCTYPE html>
<html>
<head>
	<title>Crawler Quality Inspections</title>

	<!---<link rel="stylesheet" href="styles/WebsiteTemplate.css">--->
	<link rel="stylesheet" type="text/css" href="LoginStyle.css">
	<script src="http://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="stylesheet.css">
	<script src="register.js"></script>
	

</head>
<body class="hg">
	<h1>Crawler Quality Inspections</h1>
	
	<form id="loginForm" action = "action.php" method = "POST" autocomplete="on">
		<div class="form-group">
			<label for="usernameInput">Username</label>
			<input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
		</div>
		<div class="form-group">
			<label for="passwordInput">Password</label>
			<input type="password" class="form-control" name="password" id="passwd" placeholder="Enter password" required>
		</div>

		<div>
			<a href="#" id="registerLink">Register New Account</a>
			<a href="#" id="forgotPwdLink">Forgot Password</a>
		</div>

		<button type="submit" name ="submit" value="Login">Log in</button>
	</form>
	
	
	<form id ='registerForm' action="register.php" method="POST" autocomplete="on">

		<div class="form-group">
			<label for="nameInput">Name</label>
			<input type="text" class="form-control" name="nameInput" id="nameInput" placeholder="Enter your name" required>
		</div>

		<div class="form-group">
			<label for="usernameInput">Username</label>
			<input type="text" class="form-control" name="usernameInput" id="usernameInput" placeholder="Enter username" required>
		</div>
		
		<div class="form-group">
			<label for="emailInput">Email</label>
			<input type="email" class="form-control" name="emailInput" id="emailInput" placeholder="Enter email" required>
		</div>
		
		<div class="form-group">
			<label for="passwordInput">Password</label>
			<input type="password" class="form-control" name="passwordInput"id="passwordInput" placeholder="Enter password" required>
		</div>
		
		<div class="form-group">
			<label for="rpasswordInput">Confirm Password</label>
			<input type="password" class="form-control" name="rpasswordInput" id="rpasswordInput" placeholder="Enter password" required>
		</div>

		<div>
			<a href="#" id="toLoginLink">Log In</a>
			<a href="#" id="forgotPwdLink">Forgot Password</a>
		</div>
		
		<button type="submit" name = "register"id="register">Register</button>
	</form>
	
	
	<form id="forgotPwdForm" action = "forgotPass.php" method="POST">
		<div class="form-group">
			<label for="emailInput">Email</label>
			<input type="email" class="form-control" name="emailInput" id="emailInput" placeholder="Enter email" required>
		</div>
		
		<div>
			<a href="#" id="toLoginLink">Log In</a>
		</div>
		
		<button type="submit" name = "forgotPwdEmail"id="forgotPwdEmail">Send Email</button>
	</form>
	
</body>
</html>
