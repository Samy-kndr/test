<!DOCTYPE html>
<html>
	<head>
		<title>registration</title>
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
					<form action="registration_inc.php" method="post" >
						<fieldset>
						<legend>Registrieren</legend>
							<p>
								<label>Vorname</label>
							</p>
							<p>
								<input type="text" name="firstname" placeholder="Vorname" required>*
							</p>
							<p>
								<label>Nachname</label>
							</p>
							<p>
								<input type="text" name="surename" placeholder="Nachname" required>*
							</p>
							<p>
								<label>Nickname</label>
							</p>
							<p>
								<input type="text" name="nickname" placeholder="Nickname" required>*
							</p>
							<p>
								<label>Alter</label>
							</p>
							<p>
								<input type="number" name="age">
							</p>
							<p>
								<label>Email</label>
							</p>
							<p>
								<input type="email" name="email" placeholder="Email" required>*
							</p>
							<p>
								<label>Email bestätigen</label>
							</p>
							<p>
								<input type="email" name="emailbe" placeholder="Email bestätigen" required>*
							</p>
							<p>
								<label>Passwort</label>
							</p>
							<p>
								<input type="password" name="password" placeholder="Passwort" required>*
							</p>
							<p>
								<label>Passwort bestätigen</label>
							</p>
							<p>
								<input type="password" name="pwordbe" placeholder="Passwort bestätigen" required>*
							</p>
						</fieldset>
						<button class="button_registrieren" name="submit" type="submit">Registrieren</button>
						<button class="button_reset" type="reset">Abbrechen</button>
						<p style="font-size: 0.7rem; margin-top: 0.5rem;">
							Mit einem * Gekennzeichnete Felder sind Pflichtfelder
						</p>
					</form>
				</div>
				<article>
				</article>
			</main>
		</div>
	</body>
</html>