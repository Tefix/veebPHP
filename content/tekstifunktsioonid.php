<?php
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url,"?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}

echo "<h2>Tekstifunktsioonid</h2>";
$tekst='PHP on skriptikeel serveripoolne';
echo $tekst;
echo "teksti pikkus -strlen() = ".strlen($tekst). "tähemärgi";
echo "<br>";
echo "esimesed 6 tähte -substr() = ".substr($tekst, 0, 6);
echo "<br>";
echo "alates 6 tähest=".substr($tekst, 6);
echo "<br>";
echo "sõnade arv lauses -str_word_count =".str_word_count($tekst). "sõna lauses";
echo "<br>";
echo "suurtähtedeks -strtoupper() = ".strtoupper($tekst);
echo "<br>";
echo "väiketähtedeks -strtolower() = ".strtolower($tekst);
echo "<br>";
echo "iga sõna esitäht suureks -ucwords() = ".ucwords($tekst);
echo "<br>";
echo "kõik väikeseks ja iga sõna esitäht suureks = ".ucwords(strtolower($tekst));

$tekst2='      PHP on skriptikeel serveripoolne     ';
// trim ltrim rtrim
echo "<br>";
echo "|". $tekst2."|";
echo "<br>";
echo "trim()eemaldab tekstist tühikuid paremalt ja vasakult -".trim($tekst2);
echo "<br>";
echo "|". $tekst2."|";
echo "<br>";
echo "ltrim()eemaldab tekstist tühikuid vasakult -".ltrim($tekst2);
echo "<br>";
echo "|". $tekst2."|";
echo "<br>";
echo "rtrim()eemaldab tekstist tühikuid paremalt -".ltrim($tekst2);
echo "<br>";
echo "<h3> Tekstkui massiv </h3>";
echo "£tekst[0]- 1.täht massivist".$tekst[0];
echo "<br>";
echo "£tekst[4]- 5.täht massivist".$tekst[4];
print_r(str_word_count($tekst, 1)); // ( [0] => PHP [1] => on [2] => skriptikeel [3] => serveripoolne )
$syna=str_word_count($tekst, 1);
echo "<br>";
echo "massivist 2 sõna - ".$syna[2];
echo "<br>";
//määrab mis sümbol on iga sõna alguses
print_r(str_word_count($tekst, 2));
echo "<br>";
echo "<h2> Teksti asendamine -replace </h2>";
$asendus= 'Javascript';
echo substr_replace($tekst, $asendus, 0, 3);
//ise vaheta serveripoolne - klendipooolne
echo "<br>";
$otsi=array('PHP','serveripoolne');
$asenda=array('Javascript', 'klendipooolne');

echo str_replace($otsi, $asenda, $tekst);

echo "<br>";
echo "<h2> Mõistatus. Arva ära eesti linnanimi</h2>";

$linnanimi = 'Tallinn';
echo"<ol><li>Linnanime pikkus: ".strlen($linnanimi)." tähemärki</li>";
echo"<li>Esimesed 3 tähte: ".substr($linnanimi, 0, 3)."</li>";
echo"<li>Viimased 2 tähte: ".substr($linnanimi, -2)."</li>";
echo"<li>Neljas täht: ".$linnanimi[3]."</li>";
echo"<li>Vies täht: ".$linnanimi[4]."</li>";
?>
<form name="tekstikontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
<input type="text" id="linn" name="linn">
<input type="submit" value="kontrolli">
</form>
<?php
if (isset($_REQUEST['linn'])) {
    if($_REQUEST['linn']=='Tallinn') {
        echo $_REQUEST["linn"]. " on õige";
    } else {
       echo $_REQUEST["linn"].  " on vale";
    }
}