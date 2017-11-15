<?php
include 'destinationClass.php';
$count = 0;
$_SESSION['count'] = $count;
$destination = unserialize($_SESSION['infodest']);

if (isset($_GET['destination']) && isset($_GET['number']) && isset($_GET['insurance'])){
	$destination->setValues($_GET['destination'], isset($_GET['number']), true );
	$_SESSION['infodest'] = serialize($destination);
}
elseif (isset($_GET['destination']) && isset($_GET['number'])) {
	$destination->setValues($_GET['destination'], isset($_GET['number']), false );
	$_SESSION['infodest'] = serialize($destination);
}
if (isset($_GET['name']) && isset($_GET['firstname']) && isset($_GET['age'])) {
	//create a client -> liste de client pour checker si bien 5, crée un vide puis on initialise au fur et à mersure
}
if ($count < $destination->getNumbPass()) {
	$count ++;
	$_SESSION['count'] = serialize($count);
	include'client.php';
}
else{
	echo ("c'est fini");
}

include'client.php';
?>