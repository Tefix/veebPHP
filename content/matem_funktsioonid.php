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
printf($format, $perenimi, $nimi);