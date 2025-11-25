<?php
echo "<h2>Matemaatilised tehted</h2>";
$arv = 1.45;
$arv2 = 2;
echo "Esimine arv on .$arv, teine arv on .$arv2";
echo "<br>";
echo "+ Liitmine tulemus: ".($arv+$arv2);
echo "<br>";
echo "- Lahutamine tulemus: ".($arv-$arv2);
echo "<br>";
echo "* Korrutise tulemus:  ".($arv*$arv2);
echo "<br>";
echo "/ Jagamise tulemus: ".($arv/$arv2);
echo "<br>";
echo "<h3>Matemaatilised funktsioonid</h3>>";
echo "Vaiksem arv: ".min($arv,$arv);
echo "<br>";
echo "Suurem arv: ".max($arv,$arv);
echo "<br>";
echo "Umerdamine tulemus - round(arv): ".round($arv);
echo "<br>";
echo "ceil(arv) - Ümardab jargmise arvuni: ".ceil($arv);
echo "<br>";
echo "floor(arv) - Ümardab alla poole täisarvuni: ".floor($arv);
echo "<br>";
echo "round (arv, 1) - Ümardab ühe kmomma kohtani ".round($arv, 1);
echo "<br>";
echo "rand(1, 100) - Ühuslik arv: ".rand(1, 100);
echo "<br>";
echo "pow(arv, 2) - astendamine: ".pow($arv, 2);
echo "<br>";
echo "sqrt - ruutjuur: ".sqrt($arv);
echo "<br>";
echo pi();
echo "<br>";
echo "<h2>Omistamise operaatorit</h2>";
echo"<br>";
$x = 10;
$y = 20;

echo"Suurendamine uhevirra:";
$x ++; // $x = $x + 1
echo"<br>";
echo $x;
echo"<br>";
echo"Vahendamine uhevirra:";
$x --; // $x = $x + 1
echo"<br>";
echo $x;
echo"<br>";
$x*=$y;
echo $x;
echo"<br>";

$x/=$y;
echo $x;
echo"<br>";
$nimi = "Roman";
$perenimi = " Zaitsev";
//$nimi .= $perenimi; // $nimi = $nimi . $perenimi
$format = 'Tere %s %s, arv x: %d';
echo $nimi;
echo"<br>";
//printf($format, $perenimi, $nimi);

echo "<br>";
echo "<h2>Arv Moistatud. Arva ara kaks arvu (1,10)</h2>";
echo"<br>";
$arv5 = 5;
$arv6 = 7;
echo "1. Nende summa: ".($arv5+$arv6);
echo "<br>";
echo "2. Nende vahe: ".($arv5-$arv6);
echo "<br>";
echo "3. Nende korrutis: ".($arv5*$arv6);
echo "<br>";
echo "4. Esimene arv on paaritu, teine on paarisarv";
echo "<br>";
echo "5. Mõlemad arvud on väiksemad kui 10";
echo "<br>";


if (isset($_POST['arv1']) && isset($_POST['arv2'])) {
    $guess1 = (int)$_POST['arv1'];
    $guess2 = (int)$_POST['arv2'];

    if (($guess1 == $arv5 && $guess2 == $arv6) || ($guess1 == $arv6 && $guess2 == $arv5)) {
        echo "<h3 style='color: green;'>Õige! Arvud olid $arv5 ja $arv6</h3>";
    } else {
        echo "<h3 style='color: red;'>Vale! Proovi uuesti😡.</h3>";
    }
}

echo "<form method='post'>";
echo "Esimene arv: <input type='number' name='arv1' min='1' max='10' required><br><br>";
echo "Teine arv: <input type='number' name='arv2' min='1' max='10' required><br><br>";
echo "<input type='submit' value='Kontrolli'>";
echo "</form>";
echo "<br>";
