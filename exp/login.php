<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="stylesheet.css" media="screen" type="text/css">
		<style type="text/css" media="screen">
			
		</style>
	</head>
	<body>
		<header>
			<a href="index.php"><h1 class="header_uberschrift">&Uuml;berschrift</h1></a>
		</header>
		<main>
			<div class="nav">
				<div class="nav_empty">
					
				</div>
				<div class="nav_navigation">
					<input type="checkbox" id="hamburg">
					<label for="hamburg" class="hamburg">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</label>
					
					<nav class="topmenu">
					  <ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="taktiks.php">Taktik</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="registration.php">Registrieren</a></li>
					  </ul>
					</nav>
				</div>
			</div>
			<div class="content">
				<article>
					
				</article>
				<div class="content_main">
					<h1>Einloggen</h1>
					<form action="login_inc.php" method="POST">
					   <input type="text" name="nickname" placeholder="Benutzername"><br>
					   <input type="password" name="password" placeholder="Passwort"><br>
					   <button type="submit" name="submit">Login</button>
					</form>
					<a href="registration.php">Registrieren</a>
					<a href="logout.php">logout</a>
				</div>
				<article>

				</article>
			</main>
		</div>
	</body>
</html>