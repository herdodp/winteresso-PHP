<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta tag -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Register</title>

    <!-- icon tag -->
    <link rel="icon" type="image/x-icon" href="/img/your_icon.ico">

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>


	<!-- open pack -->
	<?php 
	include_once "../winteresso/winteresso.php";

	// delete it if you don't need it
	//WIN_CONNECT_DB("servername", "username", "password", "database");

	 ?>
	<!-- close pack -->


<body>

	<div class="container">
		<div class="login-header">
			<div>
			<form method="POST" action="../enginee/register_enginee.php">
				<table>
					<tr>
						<td><label>Username</label></td>
						<td><input type="text" name="username" autofocus></td>
					</tr>

					<tr>
						<td><label>Password</label></td>
						<td><input type="password" name="password"></td>
					</tr>

					<tr>
						<td><input type="submit" name="submit" value="Register"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>





</body>
	<?php 
	WIN_HIDE_STATE();
	 ?>
</html>