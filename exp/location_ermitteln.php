<!DOCTYPE html>
<?php
	session_start();
?>
<html>
	<head>
		<title>location</title>
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
						<button id="los">Start</button>
						<p id="ausgabe"></p>
					</div>
				<article>
					
				</article>
			</div>
		</main>
		<script>
			 var button =document.getElementById('los'); 
			  button.addEventListener ('click', ermittlePosition);
			  var ausgabe = document.getElementById('ausgabe');

			function ermittlePosition() {
				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(zeigePosition, zeigeFehler);
				} else { 
					ausgabe.innerHTML = 'Ihr Browser unterstützt keine Geolocation.';
				}
			}

			function zeigePosition(position) {
				ausgabe.innerHTML = "Ihre Koordinaten sind:<br> Breite: " + position.coords.latitude + 
				"<br>Länge: " + position.coords.longitude + "<br>Genaugikeit: " + position.coords.accuracy +  
				"<br>Zeit: " + position.timestamp;
				
				var b1 = position.coords.latitude;
				var l1 = position.coords.longitude;
				
				/*Geolocation des Brandenburgertors*/
				var b2=52.399552;
				var l2=13.048008;
				var radius=6378.16;

				function FOrthodrome(b1,l1,b2,l2,radius)
				{
					return Math.acos(Math.sin(b1*2*Math.PI/360)*Math.sin(b2*2*Math.PI/360)+Math.cos(b1*2*Math.PI/360)*Math.cos(b2*2*Math.PI/360)*Math.cos((l2-l1)*2*Math.PI/360))*radius;
				}
				alert(FOrthodrome(b1,l1,b2,l2,radius));
				
			}
			
			function zeigeFehler(error) {
				switch(error.code) {
					case error.PERMISSION_DENIED:
						ausgabe.innerHTML = "Benutzer lehnte Standortabfrage ab."
						break;
					case error.POSITION_UNAVAILABLE:
						ausgabe.innerHTML = "Standortdaten sind nicht verfügbar."
						break;
					case error.TIMEOUT:
						ausgabe.innerHTML = "Die Standortabfrage dauerte zu lange (Time-out)."
						break;
					case error.UNKNOWN_ERROR:
						ausgabe.innerHTML = "unbekannter Fehler."
						break;
				}
			}

			
			</script>
			<noscript>
				JavaScript ist deaktiviert!
			</noscript>
	</body>
</html>