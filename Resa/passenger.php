<?php
session_start();


// On teste si nos variables sont déclarées
if (isset($_GET['destination']) && isset($_GET['number']) && isset($_GET['insurance'])) {

	$_SESSION['dest'] = $_GET['destination'];
	$_SESSION['numb'] = $_GET['number'];
	$_SESSION['insu'] = $_GET['insurance'];

}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}

?>
<head>
    <link rel="stylesheet" type="text/css" href="test.css">
    <title>Passenger 1</title>
    <h1> Passenger 1 </h1>
</head>
<?php
if ($_SESSION['numb'] > 1) {
?>
    <form action="passenger2.php" method="get">
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

