<?php
include 'destinationClass.php';
$destination = new infodestination();
$_SESSION['infodest'] = serialize($destination);


include'acceuil.php';

?>