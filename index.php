<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	require './connection.php';

	if(isset($_POST['name'])){
		$people->insert(array("name"=>$_POST['name'],"job"=>$_POST['job']));
	}

	$cursor = $people->find();
?>

<form method="post">
	<p>Name : <input type="text" name="name" placeholder="name"></p>
	<p>Job : <input type="text" name="job" placeholder="job"></p>
	<button>Add</button>
</form>
<?php  
	if($cursor->count()>0){
?>
<ul>
	<?php foreach ($cursor as $doc) { ?>
	<li>
		<h2><?php echo $doc['name']; ?>(<?php echo $doc['job']; ?>)</h2>
		<a href="update.php?id=<?php echo $doc['_id'] ?>">Update</a>
		<a href="delete.php?id=<?php echo $doc['_id'] ?>">Delete</a>
	</li>
	<?php } ?>
</ul>
<?php } else {
?>
	<p>No People</p>
<?php } ?>
</body>
</html>