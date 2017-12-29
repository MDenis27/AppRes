<?php
$destination = unserialize($_SESSION['infodest']);
$error = unserialize($_SESSION['error']);
if (isset($error)){
    echo $error;
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Reservation</title>
    <h1> Reservation </h1>
</head>

<h2>
    Please fill in the form below
</h2>

The price is 10€ until 12 years and then 15€.
<br>
The price of the cancellation insurance is 20€ regardless of the number of passengers.
<br>
<br>
    <form action="index.php" method="get">
        <div style ="
            position: absolute;
        ">
            Destination:
            <br>
            <br>
            Number of passengers:
            <br>
            <br>
            Cancellation insurance:
        </div>
        <div style="
            position: absolute;
            left: 15em;
        ">
            <select name="destination"
            <?php  if (null !== $destination->getDestName()){
                ?> value=<?php echo("\"".$destination->getDestName()."\"")?>
            <?php;}?>>
                <option value="EHAM">Amsterdam</option>
                <option value="LEBL">Barcelone</option>
                <option value="EDDB">Berlin</option>
                <option value="LFPG">Paris Charles De Gaulle</option>
            </select>
            <br>
            <br>
            <input type="text" name="number" value=<?php echo("\"".$destination->getNumbPass()."\"")?> >
            <br>
            <br>
            <input id="checkBox" type="checkbox" name="insurance"
            <?php if ($destination->getInsurance() == true){
                ?> checked<?php;
            }?>>
        </div>
        <div style="
            position: absolute;
            top: 25em;
        ">
        <input type="submit" value="Next step">
        </div>
        <input type="hidden" name="page" value="client">
    </form>
    <a href="index.php" class="cancel" style="
        position: absolute;
        top: 25em;
        left: 15em;
    " >
        <button>Cancel reservation</button>
    </a>

<?php
$_SESSION['infodest'] = serialize($destination);
?>

