<?php
function functieaanroep(){

    return "dit is mijn samengestelde zin";

}
echo $_SERVER["HTTP_HOST"];
echo "<hr>";
echo $_SERVER["PHP_SELF"];
echo "<hr>";
print_r($GLOBALS);
echo "<hr>";
echo `dir ..`;
echo "<hr>";
//$go = shell_exec('dir');
//echo $go;
$file = fopen("bestand.txt", "w");
fwrite($file, functieaanroep());
fclose($file);
echo "<hr>";

echo "Huidige directory: " . __FILE__;

echo "<hr>";
$filename = "example.txt";

if (file_exists($filename)) {
    unlink($filename);
    echo "Bestand $filename is verwijderd.";
} else {
    echo "Bestand bestaat niet.";
}
mkdir("nieuwe_map");
echo "<hr><hr><hr>";
print_r($_SERVER);

$start = microtime(true);
$directory = "bestanden";
mkdir($directory);

for ($i = 0; $i < 100; $i++) {
    file_put_contents("$directory/bestand_$i.txt", "Inhoud van bestand $i");
}

$eind = microtime(true);
echo "Batchverwerking voltooid in " . ($eind - $start) . " seconden.";

//var_dump($_SERVER);
//echo phpinfo();
?>