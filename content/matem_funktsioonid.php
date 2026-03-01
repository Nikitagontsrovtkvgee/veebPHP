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
echo "/ Jagamine: ".($arv1/$arv2);
echo "<br>";

echo "<h3>Matemaatilesed funktsioonid</h3>";
echo "Väiksem arv: " . min($arv1, $arv2) . "<br>";
echo "Suurem arv: " . max($arv1, $arv2) . "<br>";
echo "round(arv) - Ümardamine: " . round($arv1) . "<br>";
echo "ceil(arv) - Üles: " . ceil($arv1) . "<br>";
echo "floor(arv) - Alla: " . floor($arv1) . "<br>";
echo "Juhuslik arv: " . rand(1, 100) . "<br>";
echo "pow(arv,2) - Ruut: " . pow($arv1, 2) . "<br>";
echo "sqrt - Ruutjuur: " . sqrt($arv2) . "<br>";

echo "<h2>Omistamine operaatorid</h2>";
$x = 10; $y = 20;
echo "Suurendamine ühe võrra: ";
$x ++; echo $x . "<br>";
$x*=$y; echo "Korrutisega omistamine: " . $x . "<br>";

$nimi = "Nikita";
$perenimi = "Gontsarov";
$format = 'Tere, %s %s, arv x: %d';
printf($format, $perenimi, $nimi, $x);
echo "<br>";

echo "<h3>Mõeldud arv</h3>";
$arv3 = 42;
echo "Minu mõeldud arv on: " . $arv3;
?>
