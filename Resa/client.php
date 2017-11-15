<?php
$destination = unserialize($_SESSION['infodest']);
$count = unserialize($_SESSION['count']);
$_SESSION['infodest'] = serialize($destination);
$_SESSION['count'] = serialize($count);
?>

<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Passenger</title>
    <h1> Passenger <?php echo($count) ?> </h1>
</head>

<br>
<form action="index.php" method="get">
	<br>
	<input type="text" name="name">
	<br>
	<input type="text" name="firstname">
	<br>
	<input type="text" name="age">
	<br>
	<input type="submit" value="Next step">
	<br>
	<?php
	if ($count < $destination->getNumbPass()){
		?> <input type="hidden" name="page" value="client"> <?php
	}
	else {
		?> <input type="hidden" name="page" value="confirmation"> <?php
	}
	?>
</form>



<a href="controler_client.php">
	<button>Next step****</button>
</a>