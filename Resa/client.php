<?php
$destination = unserialize($_SESSION['infodest']);
$count = unserialize($_SESSION['count']);
echo($destination->getDestName());
echo($count);
?>
<a href="controler_client.php">
	<button>Cancel reservation</button>
</a>