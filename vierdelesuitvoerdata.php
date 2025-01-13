<?php
	echo "tweede stap";
	echo $_GET["ffkijken"];
	if(isset($_GET["ffkijken"])){

	}

?>

<?php

echo "<hr>";
$conn = mysqli_connect("localhost", "root", "", "phpfundag12501");

$result = mysqli_query($conn, "SELECT * FROM schip");

// SELECT * FROM `schip` WHERE lengte > 20
// SELECT * FROM `schip` WHERE naam like '%g%'

while ($row = mysqli_fetch_assoc($result)) {
	echo "Te water datum: " . $row['tewaterdatum'] . ", Kapiteinaam: " . $row['kapitein'] . "<br>";
}

mysqli_close($conn);
?>
