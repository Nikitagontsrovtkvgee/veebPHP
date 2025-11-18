<?php
echo "<h2>Git Käsud";
echo "</h2>";
?>
<li>Konfigureerimine
    <pre>
        git config --global user.name "nikitosgoldboss@gmail.com"
    </pre>
</li>
<li>
    Ssh võti loomine
    <pre>
        ssh-keygen -t rsa -b 4096 -C "nikitosgoldboss@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    jälgimise lisamine ja commit'i tegemine
    git
</li>
<?php
echo "<li>GITHUB projeektiga sidumine";