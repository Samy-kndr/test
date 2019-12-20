<?php
/*Verbindung zur Datenbank herstellen*/
  $connection = mysqli_connect('localhost', 'root', '', 'user_data');
  
  if ($connection->connect_error) {
		echo "Fehler bei der Verbindung: " . mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT guest_id FROM guests;";
    $result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_object($result);
				echo $row->guest_id;
			
	/*
	id = result + 1 
	name= 'guest_'.id 
	INSERT INTO guest_id and guest_name
	*/
?>