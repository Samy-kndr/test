<!DOCTYPE html>
<?php
	session_start();
	$connection = mysqli_connect('localhost', 'root', '', 'user_data');
?>
<html>
	<head>
		<title>Main</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="stylesheet.css" media="screen" type="text/css">
		<style type="text/css" media="screen">

		</style>
	</head>
	<body>
	<?php
		/*Überprüfen ob Session aktiv ist*/
		if (isset($_SESSION['session_user'])) {
			$checked = 1;
		} else {
			header("Location: login.php");
            exit();
		};
		//Verbindungsüberprüfung
		$con = mysqli_connect('localhost', 'root', '', 'user_data');
		if ($con->connect_error) {
			echo "Fehler bei der Verbindung: " . mysqli_connect_error();
			exit();
		}
		echo "<p style='color: green; float: right;'>&bull;</p>";
	?>
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
						<li><a href="location_ermitteln.php">location</a></li>
						<li><a href="openstreetmap.html">location</a></li>
					  </ul>
					</nav>
				</div>
			</div>
			<div class="content">
				<article>
					<?php 
						echo $_SESSION['session_id'];
						echo '<br>';
						echo $_SESSION['session_user'];
						echo '<br>';
						echo $_SESSION['session_firstname'];
						echo '<br>';
						echo $_SESSION['session_surename'];
					?>
				</article>
					<div class="content_main">
						<?php 
							$sql = "SELECT * FROM user_acc WHERE 'nickname' = 'and9'";
							$result = mysqli_query($connection, $sql);
							$row = mysqli_fetch_assoc($result);
							echo $row;
						?>
					</div>
				<article>
					<?php
						if($checked == 1) {
							echo 'Verbindungskontrolle';
							echo "<p style='color: green; font-size: 4rem;'>&bull;</p>";
						}
					?>
				</article>
			</div>
		</main>
	</body>
</html>