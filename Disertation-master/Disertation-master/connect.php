<?php

// connects to the database
function connect()
{		
    $host = 'localhost';
    $dbname = 'Photo_Editor';
    $user = 'root';
    $pwd = '';
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            if ($conn) {
                return $conn;
            } else {
                echo 'Failed to connect';
            }	
        } catch (PDOException $e) {
            echo "PDOException: ".$e->getMessage();
        }	
}

connect();

?>