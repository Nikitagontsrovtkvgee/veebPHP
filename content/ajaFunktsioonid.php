<?php
echo "<h2>Ajafunktsioonid</h2>";
// Только логика и вывод контента, без <html>, <head>, <body>
echo "<div class='block block1'>";
date_default_timezone_set("Europe/Tallinn");
echo "Täna on: " . date('d.m.Y H:i:s');
echo "</div>";
?>
