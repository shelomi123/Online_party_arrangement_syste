<?php include('functions.php') ?>
<html>
<head>
	<title>Lets Register..!</title>
	<link rel="stylesheet" href="../css/register.css">
</head>

<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	<form method="post" action="register.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="uname" value="<?php ECHO $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="../html/login.html">Sign in</a>
		</p>
	</form>
</body>

</html>