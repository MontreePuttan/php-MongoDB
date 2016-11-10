<?php  
	require './connection.php';

	if(isset($_GET['id'])){
		$person = $people->findOne(array("_id"=>new MongoId($_GET['id'])));
	}

	if(isset($_POST['name'])){
		$people->update(array("_id"=>new MongoId($_POST['id'])),array("name"=>$_POST['name'],"job"=>$_POST['job']));
		header("location:/mongodb/index.php");
	}


?>
<form method="post" action="update.php">
	<input type="hidden" name="id" value="<?php echo $person['_id'] ?>">

	<p>Name : <input type="text" name="name" placeholder="name" value="<?php echo $person['name'] ?>"></p>

	<p>Job : <input type="text" name="job" placeholder="job" value="<?php echo $person['job'] ?>"></p>

	<button>Add</button>
</form>