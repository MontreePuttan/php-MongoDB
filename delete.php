<?php
require './connection.php';

if(isset($_GET['id'])){
	$people->remove(array("_id"=>new MongoId($_GET['id'])));
	header("location:/mongodb/index.php");
}
?>