
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


}

class DierenAsiel{
    public $dier1;
    function __construct(){
        echo "er wordt een dierenasiel gemaakt"; 
    }

}
echo "<hr><hr>";
new DierenAsiel();
echo "<hr><hr>";





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