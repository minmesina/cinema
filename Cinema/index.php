<?php
session_start();
session_destroy();

?>
<!DOCTYPE html>

<html>
<head>
	<title>Walter Mart Cinema</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script/myjs.js"></script>
</head>
<body>
<div class="container">
	<form method="post" action="login.php"> 
		<label class="userlabel">Username:</label><input type="text" name="username"id="username" required/>&emsp;
		<label class="passwordlabel">Password:</label><input type="password" name="password" id="password" required/>&emsp;
		 <input type="submit" name="submit" value="Login" class="login"/>
	</form>
	<img class="logo" src="images/logo.png" />
	<h6 class="note">NOTE: Guest, use 'guest' as username and 'password' as your password.</h6>
</div>
</body>
</html>
