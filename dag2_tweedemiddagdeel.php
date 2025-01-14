<?php
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
fwrite($file, "Dit is een testbestand.");
fclose($file);
echo "<hr><hr><hr>";
print_r($_SERVER);
//var_dump($_SERVER);
//echo phpinfo();
?>