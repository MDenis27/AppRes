<?php
$destination = unserialize($_SESSION['infodest']);
$count = unserialize($_SESSION['count']);
$_SESSION['infodest'] = serialize($destination);
$_SESSION['count'] = serialize($count);
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Passenger</title>
    <h1> Passenger <?php echo($count) ?> </h1>
</head>

<br>

<!-- Main form -->
<form action="index.php" method="get">
	<div style ="
            position: absolute;
        ">
            Name:
            <br>
            <br>
            Firstname:
            <br>
            <br>
            Age:
    </div>
    <div style="
        position: absolute;
        left: 15em;
    ">
	<input type="text" name="name">
	<br>
	<br>
	<input type="text" name="firstname">
	<br>
	<br>
	<input type="text" name="age">
	</div>
	<div style="
		position: absolute;
		top: 20em;
	">
	<input type="submit" value="Next step">
	</div>
	<?php
	if ($count < $destination->getNumbPass()){
		?> <input type="hidden" name="page" value="client"> <?php
	}
	else {
		?> <input type="hidden" name="page" value="validation"> <?php
	}
	?>
</form>

<!-- Buton to go to the previous page -->
<a href="controler_client.php" style="
        position: absolute;
        top: 20em;
        left: 5em;
    " >
        <button>Back to previous page</button>
    </a>

<!-- Go to the first page -->
<a href="index.php" style="
        position: absolute;
        top: 20em;
        left: 15em;
    " >
        <button>Cancel reservation</button>
</a>