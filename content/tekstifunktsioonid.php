<?php
echo "<h2>Tekstifunktsioonid</h2>";
$tekst='PHP on skriptikeel serveripoolne';
echo $tekst;
echo "teksti pikkus -strlen() =".strlen($tekst). "tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte -subtr() =".substr($tekst, 0, 6);
echo "<br>";
echo "Alates 6 tähtest =".substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses -str_word_count() ".str_word_count($tekst);
echo "<br>";
echo "ÜLA REGISTER -".strtoupper($tekst);
echo "<br>";
echo "alla register -".strtolower($tekst);
echo "<br>";
echo "Iga Sõna Algab Suure Tähega -".ucwords($tekst);
echo "<br>";
echo "iga sõna algab väike tähega -".ucwords(strtolower($tekst));
$tekst2='         PHP on skriptikeel serveripoolne         ';
//trim, ltrim, rtrim
echo "<br>";
echo "|".$tekst2. "|";
echo "<br>";
echo "trim()- eemaldab tekstist tühikuid paremalt ja vasakult -".trim($tekst2);
echo "<br>";
echo "ltrim()- eemaldab tekstist tühikuid paremalt ja vasakult -".ltrim($tekst2);
echo "<br>";
echo "rtrim()- eemaldab tekstist tühikuid paremalt ja vasakult -".rtrim($tekst2);
echo "<br>";
echo "<h3>Tekst kui massiiv</h3>";
echo "$tekst[0]- 1.täht massiivist".$tekst[0];
echo "<br>";
echo "5.täht massiivist - ".$tekst[4];
echo "<br>";
//määrab isa sõna nagu eraldi element
print_r(str_word_count($tekst, 1)); //Array ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
$syna=str_word_count($tekst, 1);
echo "<br>";
echo "massiivist 2 sõna - ". $syna[2];
echo "<br>";
//määrab mis sümbool on iga sõna alguses
print_r(str_word_count($tekst, 2));
echo "<br>";
echo "<h2>Teksti asendamine -replace</h2>";
$asendus='Javascript';
echo substr_replace($tekst, $asendus, 0, 3);
echo "<br>";
//
$otsi=array('PHP', 'serveripoolne');
$asendav=array('JavaScript', 'kliendipoolne');

echo substr_replace($otsi, $asendav, $tekst);

echo "<ol>";
echo "<li>".$tekst[0]."</li>";
echo "<li>".$tekst[1]."</li>";
echo "<li>".$tekst[2]."</li>";
echo "<li>".$tekst[3]."</li>";
echo "</ol>";

?>
<form name="testkontroll" action="tekstifunktsioonid.php" method="post">
    <label for="linn">Sisesta linnanimi:</label>
      <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="Võru"){
        echo $_REQUEST["linn"]. "on õige";
    } else {
        echo $_REQUEST["linn"]. "on vale!";
    }
}