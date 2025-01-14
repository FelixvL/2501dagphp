
Is-a relatie
--> richting

Konijn
Dier

konijn is Dier ja
konijn is Konijn ja
dier is Konijn hoeftnietaltijd misschien
konijn is Olietanker nee

Has-a relatie
-- geen richting
--> multipliciteit onetomany manytomany onetoone


<?php

class Dier{
    public $voornaam = "ntb";

}

class DierenAsiel{
    public $dier1;
    function __construct(){
        echo "er wordt een dierenasiel gemaakt"; 
        $this->dier1 = new Dier();
    }

}
echo "<hr><hr>";
$da = new DierenAsiel();
$da->dier1->voornaam = "piet";
echo $da->dier1->voornaam;

$zomaareendier = new Dier();
$zomaareendier->voornaam = "joost";
$da->dier1 = $zomaareendier;
echo $da->dier1->voornaam;
echo "<hr><hr>";

class Konijn extends Dier{
    public $knaagtanden = 25;
}
$konijn = new Konijn();
echo "<hr>";
echo $konijn->knaagtanden;
echo $konijn->voornaam;
echo "<hr>";



$teller = 24;
//$tellen = 5; // DIT MAG
function doen($hier){
    global $teller;
    $tellen = 0;    // locale variabele
    $teller++;
    $tellen++;
    echo "<hr>";
    echo "++".$tellen;
    echo "**".$hier;
    echo "--".$teller;
    echo "<hr>";


}
echo $teller;
//echo $hier;
//echo $tellen;
doen(2);
doen(3);
doen(4);
doen(2);
doen(3);
doen(4);
doen(5);
doen(1);
doen(2);


?>