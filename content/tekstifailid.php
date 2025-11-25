<?php
echo "<h2>Tekstifailide näited</h2>";

// 1. Faili avamine ja sulgemine
$allikas = 'lipsum.txt';
echo "<h3>fopen()</h3>";
echo "Avab faili '$allikas' kirjutamiseks (mode 'w')<br>";
$minu_fail = fopen($allikas, 'w');

echo "<h3>fwrite()</h3>";
echo "Kirjutab faili '$allikas' teksti 'Lorem ipsum'<br>";
fwrite($minu_fail, "Lorem ipsum\n");

echo "<h3>fclose()</h3>";
echo "Sulgeb faili '$allikas'<br>";
fclose($minu_fail);

echo "Fail '$allikas' on loodud ja kirjutatud.<br>";

// 2. Teksti lisamine lühema funktsiooniga
echo "<h3>file_put_contents()</h3>";
echo "Lisab faili '$allikas' teksti 'Dolor sit amet' ja sulgeb faili automaatselt<br>";
file_put_contents($allikas, "Dolor sit amet\n", FILE_APPEND);

echo "Fail '$allikas' on uuendatud.<br>";

// 3. Faili lugemine kogu sisu
echo "<h3>file_get_contents() + nl2br()</h3>";
echo "Loeb faili '$allikas' kogu sisu ja teisendab reavahetused HTML <br> siltideks<br>";
$faili_sisu = file_get_contents($allikas);
echo nl2br($faili_sisu);

// 4. Faili lugemine ridade kaupa
echo "<h3>fopen(), fgets(), feof()</h3>";
echo "Avab faili '$allikas' lugemiseks ja loeb read tsükli abil kuni faili lõpuni:<br>";
$minu_fail = fopen($allikas, 'r');
while(!feof($minu_fail)){
    $rida = fgets($minu_fail);
    echo nl2br($rida);
}
fclose($minu_fail);
echo "Faili '$allikas' on suletud.<br>";

// 5. Faili info
echo "<h3>filesize(), filemtime()</h3>";
echo "Faili nimi: $allikas<br>";
echo "Faili suurus: " . filesize($allikas) . " baiti<br>";
echo "Viimati muudetud: " . date('d.m.Y G:i', filemtime($allikas)) . "<br>";

// 6. Faili ümbernimetamine ja kustutamine
echo "<h3>rename()</h3>";
$new_name = 'lipsum_uus.txt';
rename($allikas, $new_name);
echo "Fail '$allikas' on ümber nimetatud -> '$new_name'<br>";

echo "<h3>unlink()</h3>";
unlink($new_name);
echo "Fail '$new_name' on kustutatud.<br>";

// 7. Faili sisu lugemine massiivi
file_put_contents('numbrid.txt', "12\n13\n3\n54\n6\n34\n3\n23\n23\n44\n");
echo "<h3>file() + FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES</h3>";
$nums = file('numbrid.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
echo "Loeb faili 'numbrid.txt' read massiivi ja ignoreerib tühjad read:<br>";
echo "<pre>";
print_r($nums);
echo "</pre>";

// Lõpuks kustutame testfaili
unlink('numbrid.txt');
echo "Fail 'numbrid.txt' on kustutatud.<br>";
?>
