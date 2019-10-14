<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="home.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="text" name="passkey">
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn login">Login</button> 
			<button type="reset" name="cancel" class="btn space">Reset</button>
		</div>
		
	</form>

</body>
</html> 