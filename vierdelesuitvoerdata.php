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

while ($row = mysqli_fetch_assoc($result)) {
	echo "Te water datum: " . $row['tewaterdatum'] . ", Kapiteinaam: " . $row['kapitein'] . "<br>";
}

mysqli_close($conn);
?>



$conn = mysqli_connect($servername, $username, $password, $database);

// Controleren of de verbinding werkt
if (!$conn) {
    die("Verbinding mislukt: " . mysqli_connect_error());
}

// SQL-INSERT-query
$sql = "INSERT INTO mijn_tabel (kolom1, kolom2, kolom3) VALUES ('waarde1', 'waarde2', 'waarde3')";

// Voer de query uit
if (mysqli_query($conn, $sql)) {
    echo "Gegevens succesvol toegevoegd.";
} else {
    echo "Fout: " . $sql . "<br>" . mysqli_error($conn);
}

// Verbinding sluiten
mysqli_close($conn);
?>
