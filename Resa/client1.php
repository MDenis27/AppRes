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
<div style="
    position absolute;
    top 10em;
">
<?php
if ($_SESSION['numb'] > 1) {

    <form action="client2.php" method="get">

?>
    <form action="client2.php" method="get">
        <div style ="
            position: absolute;
        ">
            Name:
            <br>
            Firstname:
            <br>
            Age:
        </div>

        <div style="
            position: absolute;
            left: 15em;
        ">
        <br>
        <input type="text" name="name">
        <br>
        <input type="text" name="firstname">
        <br>
        <input type="text" name="age">
        <br>
        </div>
        <div style="
            position: absolute;
            top: 15em;
        ">
        <input type="submit" value="Next step">
        </div>
    </form>
</div>

