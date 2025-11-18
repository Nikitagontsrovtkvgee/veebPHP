<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ajafunktsioonid</title>
    <link rel="stylesheet" href="ajaFunktsioonid.css">
</head>
<body>

<?php
echo "<h2>Ajafunktsioonid</h2>";

// 1-й блок
echo "<div class='block block1'>";
echo "<strong>1. Aktuaalne aeg</strong><br>";
date_default_timezone_set("Europe/Moscow");
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list</a><br>";
echo "time() - aeg sekundides - ".time()."<br>";
echo "date() - ".date('d-m-Y G:i:s', time())."<br>";
echo "date('d-m-Y H:i:s', time())<br>";
echo "</div>";

// 2-й блок
echo "<div class='block block2'>";
echo "<strong>2. Kuupäeva formaadid</strong><br>";
echo "<pre>
d - päev 01...31
m - kuu 01...12
Y - aasta - nelja kohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
</pre>";
echo "</div>";

// 3-й блок
echo "<div class='block block3'>";
echo "<strong>3. Tehted kuupäevaga</strong><br>";
echo "+1 min = ".date('d-m-Y H:i:s', time()+60)."<br>";
echo "+1 tund = ".date('d-m-Y H:i:s', time()+60*60)."<br>";
echo "+1 päev = ".date('d-m-Y H:i:s', time()+60*60*24)."<br>";
echo "</div>";

// 4-й блок
echo "<div class='block block4'>";
echo "<strong>4. Kuupäeva genireerimine</strong><br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)<br>";
$synd = mktime(0, 25, 1, 5, 15, 2008);
echo "Minu sünnipäev: ".date("d-m-Y H:i:s", $synd)."<br>";
echo "Massiivi abil näidata kuu nimega<br>";
echo "</div>";

// 5-й блок
echo "<div class='block block5'>";
echo "<strong>5. Täna kuupäev</strong><br>";
$kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli');
$aasta = date("Y");
$paev = date("d");
$kuu = $kuud[date("n")];
echo "Täna on : ".$paev.".".$kuu.".".$aasta."a.<br>";
echo "</div>";
?>

</body>
</html>