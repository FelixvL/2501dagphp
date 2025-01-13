<a href="tweedeles.php">tweedeles</a><br><br>
<a href="derdeles.php">derde les</a>
<a href="vierdelesinvoerdata.php">vierde les</a>
<a href="vijfdeles.php">vijfde les schip toevoegen</a>

<?php
	$persoon = "Felix";
	$wens = "goedemorgen";
	$voornaam = "fred";
	echo $wens." ".$voornaam;

	echo 8 === "8";
	echo "<h1> Hallo ".$persoon."</h1>";
	//SELECT * FROM fiets WHERE merk = 'batavus';
	$subcategorie = "fiets";
	$merk = "batavus";
	$sql = "SELECT * FROM ".$subcategorie." WHERE merk = '".$merk."';";
	echo $sql;

?>