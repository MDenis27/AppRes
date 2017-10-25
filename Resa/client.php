<?php
$destination = unserialize($_SESSION['infodest']);
echo($destination->getDestName());
?>