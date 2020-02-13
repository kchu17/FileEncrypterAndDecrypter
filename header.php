<?php
	session_start();
?>
<!DOCTYPE html>
<html>

	<title>HOMEWORK</title>

<body>

	<header>
		<nav>
			<a href="#">
			</a>
			<ul>
				<li><a href="#">Home</a></li>	

			</ul>
			<div>
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<form action = "includes/logout.inc.php" method="post">
						<button type="submit" name="logout-submit">Logout</button>
						<form action="upload.inc.php" method="POST" enctype="multipart/form-data" >
						<input type="file" name="file">
						<button type="submit" name="submit">UPLOAD</button>
					</form>';

					} else {
						echo '<form action = "includes/login.inc.php" method="post">
					<input type="text" name="mailuid" placeholder="Username/E-mail...">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="login-submit"> Login </button>
				</form>
				<a href="signup.php">Signup</a>';

					}
		?>
					
			</div>
		</nav>
	</header>

</body>
</html>