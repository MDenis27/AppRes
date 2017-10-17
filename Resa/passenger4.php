<?php
session_start();


// On teste si nos variables sont déclarées
if (isset($_GET['name']) && isset($_GET['firstname']) && isset($_GET['age'])) {

	$_SESSION['name3'] = $_GET['name'];
	$_SESSION['firstname3'] = $_GET['firstname'];
	$_SESSION['age3'] = $_GET['age'];

}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}

?>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Passenger 4</title>
    <h1> Passenger 4 </h1>
</head>
<?php
if ($_SESSION['numb'] > 4) {
?>
    <form action="passenger5.php" method="get">
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

