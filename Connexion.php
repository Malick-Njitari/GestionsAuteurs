<?php		
	try {
	    $con = new PDO("mysql:host=localhost;dbname=auteurbd",
	        "root", "");
		
	}catch (Exception $e){
		die('Erreur : ' . $e->getMessage());	
	}	
?>