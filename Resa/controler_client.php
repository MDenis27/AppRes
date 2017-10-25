<?php
include 'destinationClass.php';
$cont = 0;
$_SESSION['cont'] = $cont;
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
if ($cont < $destination->getNumbPass()) {
	$cont ++;
	include'client.php';
}
else{
	echo ("c'est fini");
}

include'client.php';
?>