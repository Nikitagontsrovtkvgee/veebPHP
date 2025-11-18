<?php
echo "<h2>Git Käsud";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
    <pre>
        git config --global user.name "nikitosgoldboss@gmail.com"
        git config --global user.email "Nikita Gontsarov"
        git config --global --list
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
    <pre>
        git status
        git add .
        git commit -a -m "commit'i tegemine
    </pre>

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