derdeles

functie ()   groepering aan statement die met een naam zijn aan te roepen
// definitie   1 x
// aanroep call invoke   zo vaak als wilt

let a = 3; // statement

if(true){
	echo "go";
}

functie
parameter   -   argument
return type  - return statement
<?php
function voerdituit(){
	echo "<hr>";
	echo "<h1>Dit is een kopje</h1>";
	$x = 8;
	echo "<br>";
	echo $x * $x;
	echo "<input type=button value=schrijfin>";
}

voerdituit();


						// parameter
function steliemandvoor($naam, $leeftijd){
	echo "<hr>";
	echo "Hallo, ik ben ";
	echo $naam;
	echo "en mijn leeftijd is: ".$leeftijd;
}
steliemandvoor("Johan", 35); // argument
steliemandvoor("Karin", 61);
$persoon1 = "Kees";
steliemandvoor($persoon1, 44);
echo "<hr>";
function tel_twee_getallen_op($getal1, $getal2){
	return $getal1 + $getal2;
}
$resultaat = tel_twee_getallen_op(14, 34);
echo ($resultaat);
?>