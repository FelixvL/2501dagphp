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
	echo "<h1>Huis</h1>";
	$x = 8;
	echo "<br>";
	echo $x * $x;
	echo "<input type=button value=schrijfin>";
}

voerdituit();
voerdituit();
voerdituit();
voerdituit();
voerdituit();
voerdituit();
voerdituit();
voerdituit();


						// parameter
function steliemandvoor($naam, $leeftijd){
	echo "<hr>";
	echo "Hoi, ik ben ";
	echo $naam;
	echo "en mijn leeftijd is: ".$leeftijd;
}
steliemandvoor("Johan", 35); // argument
steliemandvoor("Karin", 61);
$persoon1 = "Kees";
steliemandvoor($persoon1, 44);
echo "<hr>";
function tel_twee_getallen_op($getal1, $getal2){
	//echo $getal1 + $getal2;
	return $getal1 + $getal2;
}
$resultaat = tel_twee_getallen_op(14, 34);
echo $resultaat;
$resultaat2 = tel_twee_getallen_op($resultaat, 92);
echo $resultaat2;

// maak een array met 4 getallen
// zorg dat je met een for loop alle getallen bij elkaar optelt mbv deze functie.
// print alleen het eindgetal (UITEINDELIJK)
echo "<hr>";
$getallen = [4,5,6,7];




$totaal = 0;

//$totaal = $totaal + 5;
//$totaal += 5;



for($x = 0; $x < count($getallen); $x++){
	//echo "<br>".$getallen[$x];
	$totaal += $getallen[$x];
	
}
echo "<hr>";
echo $totaal;

function allegetallenoptellen($rijmetgetallen){
	$t = 0;
	for($x = 0; $x < count($rijmetgetallen); $x++){
		//echo "<br>".$rijmetgetallen[$x];
		$t += $rijmetgetallen[$x];
		
	}
	echo "<hr>";
	echo $t;
}

allegetallenoptellen(  $getallen  );

allegetallenoptellen(  [34,3,344,3]  );



?>