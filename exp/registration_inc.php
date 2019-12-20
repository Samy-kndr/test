<?php

session_start();
/*Nutzer die die URL erraten haben werden hier abgefangen*/
if (isset($_POST['submit'])) {

/*Verbindung zur Datenbank herstellen*/
  $connection = mysqli_connect('localhost', 'root', '', 'user_data');
  
 /*mysqli_real_escape_string filtert sonderzeichen, sodass nur text in die datenbank kommt*/
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
  $surename = mysqli_real_escape_string($connection, $_POST['surename']);
  $nickname = mysqli_real_escape_string($connection, $_POST['nickname']);
  $age = mysqli_real_escape_string($connection, $_POST['age']);
  $email =  $_POST['email'];
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  
/*Passwort verschlüsseln*/
  $Password_hashed = password_hash($password,PASSWORD_DEFAULT);
  
/*Daten an die Datenbank übertragen*/
	$sql = "INSERT INTO user_acc (user_firstname, user_surename, user_nickname, user_age, user_email, user_passwort) 
			VALUES ('$firstname', '$surename', '$nickname', '$age', '$email', '$Password_hashed');";
	$result = mysqli_query($connection, $sql);
	$_SESSION['session_user'] = $nickname;
	$_SESSION['session_id'] = $row['user_id'];
    $_SESSION['session_user'] = $row['user_nickname'];
    $_SESSION['session_firstname'] = $row['user_firstname'];
    $_SESSION['session_surename'] = $row['user_surename'];
/*Wenn die Registrierung erfolgreich war*/
  header("Location: taktiks.php");
  exit();
} else {
/*Die Nutzer mit der erratenen URL werden hier hin geschickt*/
    header("Location: registration.html");
    exit();
}
?>