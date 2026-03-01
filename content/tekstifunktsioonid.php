<?php
echo "<h2>Tekstifunktsioonid</h2>";

$tekst = 'PHP on skriptikeel serveripoolne';
echo $tekst . "<br>";
echo "teksti pikkus - strlen() = " . strlen($tekst) . " tähemärgi<br>";
echo "Esimesed 6 tähte - substr() = " . substr($tekst, 0, 6) . "<br>";
echo "Sõnade arv lauses - str_word_count() = " . str_word_count($tekst) . "<br>";
echo "ÜLA REGISTER - " . strtoupper($tekst) . "<br>";
echo "Iga sõna algab suure tähega - " . ucwords($tekst) . "<br>";

$tekst2 = '         PHP on skriptikeel serveripoolne         ';
echo "<br>|" . $tekst2 . "|<br>";
echo "trim() – eemaldab tühikud: " . trim($tekst2) . "<br>";

echo "<h3>Tekst kui massiiv</h3>";
echo "1. täht massiivist – " . $tekst[0] . "<br>";
$syna = str_word_count($tekst, 1);
echo "massiivist 3. sõna – " . $syna[2] . "<br>";

echo "<h2>Teksti asendamine - replace</h2>";
$asendus = 'Javascript';
echo "Esimesed 3 tähte asendatud: " . substr_replace($tekst, $asendus, 0, 3) . "<br>";

$otsi = array('PHP', 'serveripoolne');
$asendav = array('JavaScript', 'kliendipoolne');
echo "Teksti täielik asendus: " . str_replace($otsi, $asendav, $tekst) . "<br>";

// Твои пункты списка из оригинала
echo "<ol>";
echo "<li>" . $tekst[0] . "</li>";
echo "<li>" . $tekst[1] . "</li>";
echo "<li>" . $tekst[2] . "</li>";
echo "<li>" . $tekst[3] . "</li>";
echo "</ol>";

// ОБЯЗАТЕЛЬНАЯ ЗАГАДКА (Пункт 3 задания)
echo "<h2>MÕISTATUS – ARVA ÄRA EESTI LINNANIMI</h2>";
$linn = "Võru"; 
echo "<ul>";
echo "<li>Linn algab tähega: " . substr($linn, 0, 1) . "</li>";
echo "<li>Linna pikkus: " . strlen($linn) . " tähte</li>";
echo "<li>Segatud tähed: " . str_shuffle($linn) . "</li>";
echo "</ul>";
?>

<form method="post">
    <label for="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>

<?php
if (isset($_POST["linn"])) {
    if (ucfirst(strtolower($_POST["linn"])) == $linn) {
        echo "<strong>" . $_POST["linn"] . " on õige!</strong>";
    } else {
        echo "<strong>" . $_POST["linn"] . " on vale!</strong>";
    }
}
?>
