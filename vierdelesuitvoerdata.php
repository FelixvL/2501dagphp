<?php
	echo "tweede stap";
	echo $_GET["ffkijken"];
	if(isset($_GET["ffkijken"])){

	}

?>

<?php
$conn = mysqli_connect("localhost", "root", "", "voorbeeld");

$result = mysqli_query($conn, "SELECT * FROM gebruikers");
while ($row = mysqli_fetch_assoc($result)) {
    echo "Naam: " . $row['naam'] . ", Email: " . $row['email'] . "<br>";
}

mysqli_close($conn);
?>
