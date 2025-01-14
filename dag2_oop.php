hoi

<?php


function optellen(){
    echo "8 plus 8 = 16";
}
function optellen2(){
    echo "8 plus 9 = 17";
}

function optellenadvanced($getal){
    echo "8 plus $getal = ".(8+$getal);
}

function echtoptellen($getal1, $getal2){
    echo "$getal1 plus $getal2 = ".($getal1+$getal2);
}
optellen();
echo "<hr>";
optellen2();
echo "<hr>";
optellenadvanced(5);
echo "<hr>";
optellenadvanced(14);
echo "<hr>";
echtoptellen(45,55);
echo "<hr>";
echo "<hr>";








class Fiets{
    public $aantalbanden;
    public $kleur;
    function remmen(){
        echo "<br><br>ik ga remmen met de kleur ".$this->kleur;
    }
    function sturen($richting){
        echo "<br><br>ik ga sturen in de richting: ".$richting;
    }
}
// class Fiets{   // KAN NIET
// }
new Fiets();
new Fiets();

    $fiets1 = new Fiets();
    $fiets1->kleur = "rood";
    $fiets1->aantalbanden = 4;
    echo $fiets1->kleur;



    echo "<hr>";
    $fiets1->sturen("ZW");
    echo "<hr>";
    $qqlq = new Fiets();
    $letsgo = new Fiets();
    $letsgo->kleur = "blauw";  // foutmelding
    echo $letsgo->kleur;
    echo "<br>";
    $fiets1->remmen();
    $fiets1->remmen();
    $letsgo->remmen();
    $fiets1->remmen();
    echo $letsgo->remmen();

?>


