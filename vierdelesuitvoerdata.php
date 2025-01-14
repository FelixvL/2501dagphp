<?php
	echo "tweede stap";
	$bootlengte = $_GET["bootlengte"];

?>

<?php

// echo "<hr>";
$conn = mysqli_connect("localhost", "root", "", "phpfundag12501");

$sql = "SELECT * FROM schip WHERE lengte > ".$bootlengte.";";
echo "<hr>";
echo $sql;
echo "<hr>";


$result = mysqli_query($conn, $sql);

// SELECT * FROM `schip` WHERE lengte > 20
// SELECT * FROM `schip` WHERE naam like '%g%'

while ($row = mysqli_fetch_assoc($result)) {																			// debootdetails.php?bootid=4												
	echo "Te water datum: " . $row['tewaterdatum'] . ", Kapiteinaam: " . $row['kapitein'] . "(".$row['id'].") - <a href=debootdetails.php?bootid=".$row['id']." >bekijk details</a><br>";
}

mysqli_close($conn);
?>

<a href="debootdetails.php?bootid=3" >tekst</a>


$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "INSERT INTO mijn_tabel (kolom1, kolom2, kolom3) VALUES ('waarde1', 'waarde2', 'waarde3')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>
