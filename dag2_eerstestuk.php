<h1>dag 2</h1>
<div>extra</div>
tweede
derde
    vierde
<?php
/*
    echo "<h1>zomaar</h1>\n";
*/
    # echo "<div>eronder</div>";
    echo "\n\tvijfde ";
    // echo "zesde";
    $naam = "felix";
    echo "allebei $naam";
    echo 'mag $naam';
    echo '<a href="link.php">go</a>';
    echo "<a href=\"link.php\">go</a>";
    define("VASTEWAARDE", 65);

    echo "--".VASTEWAARDE;

    $lijst = [45,3,2,66];

    echo $lijst[1];
    $herinneringen = ["fiets.jpg","boot.jpg","bergen.jpg"];
    echo $herinneringen[1];
  //  echo "<img id=\"foto\" src=\"$herinneringen[1]\">";
            // <img id="foto" src="boot.jpg">
    echo "<hr>";
    $tweedearray = [ 
        [1,2,3] ,
           // 2
        [4,5,6] ,   // 1
        [7,8,9] ,
        [10,11,12] 
    ];
    $felix = ["felix", 45 , "eindhoven"];
    echo $tweedearray[1][2];
    echo $tweedearray[3][0];
    echo "<hr>";
    echo "<hr>";
    print_r($tweedearray[1]);
    
    echo "<hr>";
    $namenarray = ["hoi" => 5, "doei" => 7];
    echo $namenarray["hoi"];
    echo $namenarray["doei"];
?>

<!-- <img id="foto" src="boot.jpg"> -->
<a href="link.php">go</a>