<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Roman Zaitsev PHP ajafunktsioonid</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<h3>PHP Ajafunktsioonid</h3>

<div class="content">
    <?php
    echo "<h2> Ajafunktsioon </h2>";
    date_default_timezone_set('Europe/Tallinn');
    echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list </a><br>";
    echo "time() -aeg sekundides -" .time();
    echo "<br>";
    echo "date()-". date("d-m-Y H:i:s", time());
    echo "<br>";
    echo "date(d-m-Y H:i:s, time())";
    echo "<br>";
    echo "<pre> 
d - päev 01...31
m - kuu 01...12
Y - aasta - nelja kohane arv
G - 24h formaat
i - minutid 0...59
s * sekundid 0...59
</pre>";

    echo "<strong> Tehtud kuupäevaga</strong>";
    echo "<br>";
    echo "+1 min=time()+60  : ".date("d-m-Y H:i:s", time()+60);
    echo "<br>";
    echo "+1 tund=time()+60*60  : ".date("d-m-Y H:i:s", time()+60*60);
    echo "<br>";
    echo "+1 paev=time()+60*60*24  : ".date("d-m-Y H:i:s", time()+60*60*24);

    echo "<br><br><strong> Kuupäev genireerimine </strong>";
    echo "<br>";
    echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)";
    $synd=mktime(5,12,5, 3, 17 ,2007);
    echo "<br> minu sünnipäev:".date("d-m-Y G:i:s", $synd);
    echo "<br>";
    echo "Massiivi abil näidata kuunimega";
    echo "<br>";
    $kuud=array(1=>'jaanuar', 'veebruar', 'mart','april', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'december' );
    $aasta=date("y");
    $paev=date("d");
    $kuu=$kuud[date("m")];
    echo "täna on :".$paev." ".$kuu." ".$aasta." a";
    ?>
</div>

</body>
</html>
