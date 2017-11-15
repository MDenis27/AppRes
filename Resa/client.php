<?php
$destination = unserialize($_SESSION['infodest']);
$count = unserialize($_SESSION['count']);
echo($destination->getDestName());
echo($count);
$_SESSION['infodest'] = serialize($destination)
?>

<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Pasenger</title>
    <h1> Pasenger <?php echo($count) ?> </h1>
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
	<input type="hidden" name="page" value="client">
</form>



<a href="controler_client.php">
	<button>Next step****</button>
</a>