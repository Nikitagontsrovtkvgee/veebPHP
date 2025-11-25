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
printf($format, $perenimi, $nimi, $x);
echo "<br>";




echo "<h3>Esimene Mõeldud arv</h3>";
$arv3 = 42;

echo "Mõeldud arv * 2: " . ($arv3 * 2) . "<br>";
echo "Seda arv /4: " . (84 / 4) . "<br>";
echo "Sellest arv -7: " . (21 - 7) . "<br>";
echo "Seda arv /2: " . (14 / 2) . "<br>";
echo "Seda arv * 6: " . (7 * 6) . "<br>";
$arv3 = 7*6;

$hint1 = "Näpunäide: viimane arv3 = " . $arv3;

echo '<button onclick="document.getElementById(\'hint1\').style.display=\'block\'">Näita nippi</button>';
echo '<div id="hint1" style="display:none;">' . $hint1 . '</div>';



echo "<h3>Teine Mõeldud arv</h3>";
$arv4 = 322;

echo "Mõeldud arv / 8: " . ($arv4 / 8) . "<br>";
echo "Seda arv * 4: " . (40.25 * 4) . "<br>";
echo "Sellest arv - (22+81): " . (161 - (22+81)) . "<br>";
echo "Selle arv +52: " . (58 + 52) . "<br>";
echo "Seda arv * 3 - 8: " . (110 * 3 - 8) . "<br>";
$arv4 = 40.25*8;

$hint2 = "Näpunäide: viimane arv4 = " . $arv4;

echo '<button onclick="document.getElementById(\'hint2\').style.display=\'block\'">Näita nippi</button>';
echo '<div id="hint2" style="display:none;">' . $hint2 . '</div>';