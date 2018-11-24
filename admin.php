<html lang="en">
	<head>
		<title>
			Admin Login
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-size=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="adminstyle.css" type="text/css" rel="stylesheet">
		<link rel="icon" href="logo01.png" />
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php"><b>Arch Platform:</b> Gaming Center</a>
				</div>
			</div>
		</nav>
		<div id="divfrm" class="container">
			<form action="#" method="post">
				<div><h3><img src="idcard.png">  Admin Login</h3></div>
				<label for="user">Username</label>
				<input id="user" type="text" name="user" placeholder="Enter Username" required><br>
				<label for="pass">Password</label>
				<input id="pass" type="password" name="pass" placeholder="Enter Password" required><br>
				<input class="btncls" id="btn" type="submit" value="Log In"></input>
			</form>
		</div>
	</body>

</html>