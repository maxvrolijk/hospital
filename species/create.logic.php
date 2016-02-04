<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$database = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $database->escape_string($_POST["name"]);
		$species = $database->escape_string($_POST["species"]);
		$illness = $database->escape_string($_POST["illness"]);

		// Prepare query and execute
		$query = "INSERT INTO species(name, species, illness) VALUES ('$name','$species','$illness')";
		$result = $database->query($query);
    // Tell the browser to go back to the index page

    header("Location: ./");	
    exit();
	endif;

?>
