<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Alpha - Registration</title>
	<link rel="stylesheet" type="text/css" href="./s6css.css">
	<link rel="stylesheet" type="text/css" href="./main.css">
</head>

<body class="s6-center s6-margin-top s6-displaycontainer">
	<div class=" s6-cyan s6-center s6-display-middle main s6-round-large">
		<p class="s6-xlarge">Sign Up </p>
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<input type="text" required class="input" autocomplete="off" placeholder="username" name="username"
					onkeyup="return loww(this);" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<input type="email" required class="input" autocomplete="off" placeholder="email" name="email"
					onkeyup="return loww(this);" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<input type="password" required class="input" autocomplete="off" placeholder="password"
					name="password_1">
			</div>
			<div class="input-group">
				<input type="password" required class="input" autocomplete="off" placeholder="confirm password"
					name="password_2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
					title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
					bv>
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
	<script>
		function loww(strInput) {
			strInput.value = strInput.value.toLowerCase();
		}
	</script>
</body>

</html>