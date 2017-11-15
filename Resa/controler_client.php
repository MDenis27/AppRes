<?php
include 'destinationClass.php';
include 'personClass.php';
$array = [];
$destination = unserialize($_SESSION['infodest']);

if (isset($_GET['destination']) && isset($_GET['number']) && isset($_GET['insurance'])){
	$destination->setValues($_GET['destination'], ($_GET['number']), true );
}
elseif (isset($_GET['destination']) && isset($_GET['number'])) {
	$destination->setValues($_GET['destination'], ($_GET['number']), false );
}
$_SESSION['infodest'] = serialize($destination);
if (!isset($_SESSION['count'])){
	$count = 1;
	$_SESSION['count'] = $count;
	$_SESSION['count'] = serialize($count);
	$_SESSION['array'] = serialize($array);
	include'client.php';
}

else{
	$count = unserialize($_SESSION['count']);
	$numbpass = $destination->getNumbPass();
	if ($count < $numbpass){
		$array = unserialize($_SESSION['array']);
		$pass = new person;
		$pass->setPerson($_GET['name'], $_GET['firstname'], $_GET['age']);
		$count++;
		array_push($array, $pass);
		$_SESSION['count'] = serialize($count);
		$_SESSION['array'] = serialize($array);
		include 'client.php';
	}
}

?>