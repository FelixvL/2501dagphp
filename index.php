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