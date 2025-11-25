<?php
echo "<h2>Matemaatilesed tehed</h2>";
$arv1=1;
$arv2=2;

echo "Esimene arv on .$arv1, teine arv on .$arv2";
echo "<br>";
echo "+ Liitmine: ".($arv1 + $arv2);
echo "<br>";
echo "- Lahutamine: ".($arv1 - $arv2);
echo "<br>";
echo "* Korrutise tulemus: ".($arv1 * $arv2);
echo "<br>";
echo "/ Korrutise tulemus: ".($arv1/$arv2);
echo "<br>";
echo "<h3>Matemaatilesed funktsioonid</h3>";
echo "Väiksem arv: ";
echo min($arv1, $arv2);
echo "<br>";
echo "Suurem arv: ";
echo max($arv1, $arv2);
echo "<br>";
echo "round(arv) - Ümardamine täisarvani: ";
echo round($arv1);
echo "<br>";
echo "ceil(arv) - Ümardab jargmise arvuni: ";
echo ceil($arv1);
echo "<br>";
echo "floor(arv) - Ümardab allapoole täisarvani: ";
echo floor($arv1);
echo "round(arv, 1) - Ümardab ühe komma kohtani";
echo round($arv1, 1);
echo "<br>";

echo rand(1, 100);
echo "Juhuslik arv";
echo "<br>";
echo "pow(arv,2) - asendamine";
echo pow($arv1, 2);
echo "<br>";
echo "sqrt - ruutjuur";
echo sqrt($arv2);
echo "<br>";
echo pi();
echo "<br>";

echo "<h2>Omistamine operaatorid</h2>";
$x = 10;
$y = 20;

echo "Suurendamine ühe võrra: ";
$x ++; //$x = $x+1
echo "<br>";
echo $x;
echo "<br>";

echo "Vahendamine ühe võrra: ";
$x --;
echo "<br>";
echo $x;
$x*=$y;// x= x*y
echo $x;
echo "<br>";

$x /= $y;
echo $x;
echo "<br>";

$nimi = "Nikita";
$perenimi = "Gontsarov";
//$nimi .=$perenimi;
echo $nimi;
echo "<br>";
$format = 'Tere, %s %s, arv x: %d';
printf($format, $perenimi, $nimi);
echo "<br>";

echo "<h3>Mõeldud arv</h3>";
$arv3 = 42;
$arv3