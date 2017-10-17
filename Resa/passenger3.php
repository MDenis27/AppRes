<?php
session_start();


// On teste si nos variables sont déclarées
if (isset($_GET['name']) && isset($_GET['firstname']) && isset($_GET['age'])) {

	$_SESSION['name2'] = $_GET['name'];
	$_SESSION['firstname2'] = $_GET['firstname'];
	$_SESSION['age2'] = $_GET['age'];

}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}

?>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Passenger 3</title>
    <h1> Passenger 3 </h1>
</head>
<?php
if ($_SESSION['numb'] > 3) {
?>
    <form action="passenger4.php" method="get">
<?php
}
else {
?>
    <form action="confirmation.php" method="get">
<?php
}
?>
        <div style ="
            position: absolute;
            top : 5em;
        ">
            Name:
            <br>
            <br>
            Firstname:
            <br>
            <br>
            Age:
        </div>

        <div style="
            position: absolute;
            top: 4em;
            left: 10em;
        ">
        <br>
        <input type="text" name="name">
        <br>
        <br>
        <input type="text" name="firstname">
        <br>
        <br>
        <input type="text" name="age">
        <br>
        </div>
        <div style="
            position: absolute;
            top: 12em;
        ">
        <input type="submit" value="Next step">
        </div>
    </form>

