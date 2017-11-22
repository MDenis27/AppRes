<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Validation</title>
    <h1> Confirmation of reservations </h1>
</head>

Your demand has been registered.
<br>
<br>
Please pay the 
<?php
$destination = unserialize($_SESSION['infodest']);
$array = unserialize($_SESSION['array']);
$ins = $destination->getInsurance();
$sum = 0;
for ($i = 0; $i < $destination->getNumbPass(); $i++){
	if ($array[$i]->getAge() > 12){
		$sum += 15;
	}
	else {
		$sum += 10;
	}
}
if ($ins == True) {
	$sum += 20;
}
echo($sum);
?> 
 € sum on the bank account: 000-000000-00.
<br>
<br>
<a href="index.php" style="
        position: absolute;
    " >
        <button>Back to home page</button>
</a>