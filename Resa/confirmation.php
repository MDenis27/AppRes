<?php
$mysqli = new mysqli("localhost", "root", "root", "applires");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$destination = unserialize($_SESSION['infodest']);
$array = unserialize($_SESSION['array']);

?>


<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Validation</title>
    <h1> Confirmation of reservations </h1>
</head>

Your demand has been registered.
<br>
<br>
Please pay the 
<?php
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

<?php


$size = count($array);
$str = "";

for ($i = 0; $i < $size; $i++){
	$str.=$array[$i]->getString()." - ";
}
$ins = "No";

if ($destination->getInsurance() != false){
	$ins = "Yes";
}
$sqli = "INSERT INTO resa (destination, insurance, Total, Client) VALUES ('".$destination->getDestName()."','".$ins."','".$sum."', '".$str."')";

if ($mysqli->query($sqli) === FALSE) {
	echo "Error: " . $sqli . "<br>" . $mysqli->error;
} 
$mysqli->close();

?>

<a href="index.php" style="
        position: absolute;
    " >
        <button>Back to home page</button>
</a>