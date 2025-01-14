hoi

<?php
class Fiets{
    public $aantalbanden;
    public $kleur;
    function remmen(){
        echo "ik ga remmen";
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
    $qqlq = new Fiets();
    $letsgo = new Fiets();
    $letsgo->kleur = "blauw";  // foutmelding
    echo $letsgo->kleur;
    $fiets1->remmen();
    $fiets1->remmen();
    $fiets1->remmen();
    $fiets1->remmen();
    $fiets1->remmen();

?>