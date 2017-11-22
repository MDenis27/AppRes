<?php
$destination = unserialize($_SESSION['infodest']);
$array = unserialize($_SESSION['array']);
var_dump($destination);
echo("<br>");
var_dump($array);
?>

 <head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Validation</title>
    <h1> Validation of reservations </h1>
</head>

<div style ="
    position: absolute;
">
Destination
<br>
number of passenger
<br>
<?php
for ($i = 1; $i <= $destination->GetNumbPass(); $i++){
    ?> 
    Nom
    <br>
    Age
    <br>
    <?php
}
?>
Cancellation insurance
<br>
</div>

<div style ="
	position: absolute;
	left: 5em;
">

<?php 
echo($destination->GetDestName + "<br>" + $destination->GetNumbPass + "<br>");
for ($i = 1; $i <= $destination->GetNumbPass(); $i++){
	echo($array[($i-1)]->GetName()+ " " +$array[($i-1)]->GetFirstname());
	echo("<br>");
	echo($array[($i-1)]->GetAge());
	echo("<br>");
}
if ($destination->getInsurance() == True){
	echo("Yes");
}
else{
	echo("No");
}
?>

</div>