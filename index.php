<!DOCTYPE html>
<html>

<head>
	<title> Login </title>
	<link rel="stylesheet" type="text/css" href="./assets/css/stylecobalogin.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
	<center>
		<h1 class="text-h1">Log In</h1>
	</center>

	<div class="bodyy">
		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<th> <span><i class="fas fa-user"></i></span></th>
					<th><input type="text" name="username" class="input" placeholder="Username" required> </th>
				</tr>

				<tr>
					<th> <span><i class="fas fa-lock"></i></span></th>
					<th><input type="password" name="password" class="input" placeholder="Password" required> </th>
				</tr>
			</table>
			<input type="submit" value="Log In">
			<br><br>

			<span>Don't have an account?</span>
			<a href="register.html">Sign Up!</a>
		</form>
	</div>

</body>

</html>