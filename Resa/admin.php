

<link rel="stylesheet" type="text/css" href="style.css">

<?php
$mysqli = new mysqli("localhost", "root", "root", "applires");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$query = "SELECT * FROM resa";
$result = $mysqli->query($query) or die("Query failed");

if ($result->num_rows == 0){
	echo "No line found";
	exit;
}
else{
	echo "succeded";
}

/// Afficher des entêtes
echo "<table>\n<tr>";
while ($finfo = $result->fetch_field()){
	echo '<th>'. $finfo->name .'</th>'; 
}
echo "</tr>\n";

// Afficher des résultats en HTML
while ($line = $result->fetch_assoc()) {
	echo "\t<tr>\n";
	foreach ($line as $col_value) {
		echo "\t\t<td>$col_value</td>\n";
	}
	echo "\t</tr>\n";
}
echo "</table>\n";
?>