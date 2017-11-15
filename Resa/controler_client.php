<?php
include 'destinationClass.php';
include 'personClass.php';
$count = 0;
$_SESSION['count'] = $count;
$array = [];
$destination = unserialize($_SESSION['infodest']);


if (isset($_GET['destination']) && isset($_GET['number']) && isset($_GET['insurance'])){
	$destination->setValues($_GET['destination'], isset($_GET['number']), true );
}
elseif (isset($_GET['destination']) && isset($_GET['number'])) {
	$destination->setValues($_GET['destination'], isset($_GET['number']), false );
}

$_SESSION['infodest'] = serialize($destination);

if ($count == 0){
	$count++;
	$_SESSION['count'] = serialize($count);
	$_SESSION['array'] = serialize($array);
	include'client.php';
}
if ($count < $destination->getNumbPass()){
	$array = unserialize($_SESSION['array']);
	$pass = new person;
	$pass->setPerson($_GET['name'], $_GET['firstname'], $_GET['age']);
	$count++;
	array_push($array, $pass);
	$_SESSION['count'] = serialize($count);
	$_SESSION['array'] = serialize($array);
	include 'client.php'
}

?>