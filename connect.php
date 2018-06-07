<?php
    session_start();
// connects to the database
function connect()
		{		
			$host = 'dragon.ukc.ac.uk';
			$dbname = 'id89';
			$user = 'id89';
			$pwd = 'ffeas1';
				try {
					$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					if ($conn) {
						return $conn;
					} else {
					echo 'Failed to connect';
					}	
				} catch (PDOException $e) {
				echo "PDOException: ".$e->getMessage();
		}
		
	
}