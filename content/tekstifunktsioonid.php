<?php
function clearVarsExcept($url, $varname){
    $url = basename($url);

    $value = $_REQUEST[$varname] ?? "";

    if (str_starts_with($url, "?")) {
        return "?varname=" . $_REQUEST[$varname];
    }

    return strtok($url, "?") . "?" . $varname . "=" . ($_REQUEST[$varname] ?? "");
}

echo "<h2>Tekstifunktsioonid</h2>";

$tekst = 'PHP on skriptikeel serveripoolne';
echo $tekst;
echo "<br>";
echo "teksti pikkus - strlen() = " . strlen($tekst) . " tähemärgi";
echo "<br>";
echo "Esimesed 6 tähte - substr() = " . substr($tekst, 0, 6);
echo "<br>";
echo "Alates 6 tähtest = " . substr($tekst, 6);
echo "<br>";
echo "Sõnade arv lauses - str_word_count() = " . str_word_count($tekst);
echo "<br>";
echo "ÜLA REGISTER - " . strtoupper($tekst);
echo "<br>";
echo "alla register - " . strtolower($tekst);
echo "<br>";
echo "Iga sõna algab suure tähega - " . ucwords($tekst);
echo "<br>";
echo "iga sõna algab väikse tähega - " . ucwords(strtolower($tekst));
echo "<br>";

$tekst2 = '         PHP on skriptikeel serveripoolne         ';
echo "<br>";
echo "|" . $tekst2 . "|";
echo "<br>";
echo "trim() – eemaldab tühikud mõlemalt poolt: " . trim($tekst2);
echo "<br>";
echo "ltrim() – eemaldab tühikud vasakult: " . ltrim($tekst2);
echo "<br>";
echo "rtrim() – eemaldab tühikud paremalt: " . rtrim($tekst2);
echo "<br>";

echo "<h3>Tekst kui massiiv</h3>";
echo "1. täht massiivist – " . $tekst[0];
echo "<br>";
echo "5. täht massiivist – " . $tekst[4];
echo "<br>";

print_r(str_word_count($tekst, 1));
$syna = str_word_count($tekst, 1);
echo "<br>";
echo "massiivist 3. sõna – " . $syna[2];
echo "<br>";

print_r(str_word_count($tekst, 2));
echo "<br>";

echo "<h2>Teksti asendamine - replace</h2>";
$asendus = 'Javascript';

echo "Esimesed 3 tähte asendatud: " . substr_replace($tekst, $asendus, 0, 3);
echo "<br>";

//
// ВАЖНО: substr_replace не используется для массивов! → заменено на str_replace
//
$otsi = array('PHP', 'serveripoolne');
$asendav = array('JavaScript', 'kliendipoolne');

echo "Teksti täielik asendus: " . str_replace($otsi, $asendav, $tekst);
echo "<br>";

echo "<ol>";
echo "<li>" . $tekst[0] . "</li>";
echo "<li>" . $tekst[1] . "</li>";
echo "<li>" . $tekst[2] . "</li>";
echo "<li>" . $tekst[3] . "</li>";
echo "</ol>";
?>

<!-- ФОРМА -->
<form name="testkontroll"
      action="<?= clearVarsExcept($_SERVER['REQUEST_URI'], "link") ?>"
      method="post">
    <label for="linn">Sisesta linnanimi:</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>

<?php
// ОБРАБОТКА ФОРМЫ
if (isset($_POST["linn"])) {
    if ($_POST["linn"] == "Võru") {
        echo $_POST["linn"] . " on õige";
    } else {
        echo $_POST["linn"] . " on vale!";
    }
}
?>
