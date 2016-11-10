<?php  
	$connection = new MongoClient();
	
	$db = $connection->learnMongo;
	//Create
	// $people = $db->createCollection("people");

	//Connect
	$people = $db->people;
?>