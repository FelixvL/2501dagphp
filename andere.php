Andere.php

<?php

$snaam = $_GET["naam"];
$skapitein = $_GET["kapitein"];
$stwdatum = $_GET["twdatum"];
$slengte = $_GET["lengte"];

$conn = mysqli_connect("localhost", "root", "", "phpfundag12501");
$sql = "INSERT INTO schip(`naam`, `kapitein`, `lengte`, `tewaterdatum`) VALUES ('$snaam', '$skapitein', $slengte, '$stwdatum') ";
echo $sql;
mysqli_query($conn, $sql);
?>