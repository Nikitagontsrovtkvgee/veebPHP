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
echo "<pre>";
echo "git remote add origin git@github.com:Nikitagontsrovtkvgee/veebPHP.git

git branch -M main

git push -u origin main";
echo "</pre>";
echo "</li>";

echo "<li>Projekti kloonimine desktopi.<br>
 * Kontrolli et id_rsa võti on olemas .ssh kaustas<br>
* GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone git@github.com:Nikitagontsrovtkvgee/veebPHP.git";
echo "</pre>";
echo "</li>";
echo "</ol>";