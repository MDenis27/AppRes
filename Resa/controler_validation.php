<?php
include 'destinationClass.php';
include 'personClass.php';
$array = unserialize($_SESSION['array']);

//Register the last passenger
if(isset($_GET['name']) && isset($_GET['firstname']) && isset($_GET['age'])){
	$pass = new person;
	$pass->setPerson($_GET['name'], $_GET['firstname'], $_GET['age']);
	array_push($array, $pass);
}
$_SESSION['array'] = serialize($array);
include 'validation.php';
?>