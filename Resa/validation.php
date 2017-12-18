<?php
$destination = unserialize($_SESSION['infodest']);
$array = unserialize($_SESSION['array']);
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Validation</title>
    <h1> Validation of reservations </h1>
</head>

<h3><div style="float: left;">
Destination
<br>
number of passenger
<br>
<?php
for ($i = 1; $i <= $destination->getNumbPass(); $i++){
    ?> 
    Nom
    <br>
    Age
    <br>
    <?php
}
?>
Cancellation insurance
<br>
</div>

<div style ="
	left: 15em;
">

<?php 
echo($destination->getDestName());
echo("<br>");
echo($destination->getNumbPass());
echo("<br>");
for ($i = 0; $i < $destination->getNumbPass(); $i++){
	echo($array[($i)]->getName()." ".$array[($i)]->getFirstname());
	echo("<br>");
	echo($array[($i)]->getAge());
	echo("<br>");
}
if ($destination->getInsurance() == True){
	echo("Yes");
}
else{
	echo("No");
}
?>
</div><h3>

<?php
$_SESSION['infodest'] = serialize($destination);
$_SESSION['array'] = serialize($array);
?>

<div style="float: left;">
<form method="get" action="index.php">
	<input type="submit" value="Confirm">
	<input type="hidden" name="page" value="confirmation">
</form>
</div>

<div style="float: left;">
<form method="get" action="index.php">
    <input type="submit" value="Back to previous page">
    <input type="hidden" name="page" value="client">
</form>
</div>

<a href="index.php" style="
        left: 12em;
    " >
        <button>Cancel reservation</button>
</a>
