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
else{
	include'index.php';
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