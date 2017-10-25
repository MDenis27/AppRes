<?php
$destination = unserialize($_SESSION['infodest']);
?>

<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Reservation</title>
    <h1> Reservation </h1>
</head>

<h3>
    Please fill in the form below
</h3>

The price is 10€ until 12 years and then 15€.
<br>
The price of the cancellation insurance is 20€ regardless of the number of passengers.
<br>
<br>
    <form action="controler_client.php" method="get">
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
            <select name="destination">
                <option value="EHAM">Amsterdam</option>
                <option value="LEBL">Barcelone</option>
                <option value="EDDB">Berlin</option>
                <option value="LFPG">Paris Charles De Gaulle</option>
            </select>
            <br>
            <br>
            <input type="text" name="number" value="<?php echo($destination.getNumbPass())?>">
            <br>
            <br>
            <input id="checkBox" type="checkbox" name="insurance">
        </div>
        <div style="
            position: absolute;
            top: 17em;
        ">
        <input type="submit" value="Next step">
        </div>
    </form>
    <a href="index.php">
        <button>Cancel reservation</button>
    </a>

