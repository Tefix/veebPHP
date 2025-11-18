<?php
echo "<h2> GIT käsud </h2>";
echo "<ol>";
echo "<li>Repo loomine";
echo "<pre>git init</pre>";
echo "</li>";
?>
<li>Konfigureerimine
<pre>
    git config --global user.name "Tefix"
    git config --global user.email "ihavearm0@gmail.com"
    git config --global --list
</pre>
</li>
<li>
    Ssh võti loomine
    <pre>
         ssh-keygen -o -t rsa -C "ihavearm0@gmail.com"
    </pre>
    id_rsa.pub võti kopeeritakse githubi nagu deploy key
</li>
<li>
    Jälgimise lisamine ja commit tegemine
    <pre>
        git status
        git add .
        git commit -a -m "tekst"
    </pre>
</li>
<?php
echo "</li>GITHUB projektiga sidumine";
echo "<pre>";
echo "git remote add origin https://github.com/Tefix/veebPHP

git branch -M main
    
git pish -u origin main";
echo "</pre>";
echo "</li>";

echo "<li> Projekti kloonime desktopi. <br>
* Kontrolli, et id_rsa võti on olemas .ssh kaustas
* GIT CMD on lahti ja <br>";
echo "<pre>";
echo "git clone git@github.com:Tefix/veebPHP.git";
echo "</pre>";
echo "</li>";
echo "</ol>";