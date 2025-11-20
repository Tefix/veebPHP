<div class="content">
    <link rel="stylesheet" href="style/style.css">
    <div class="block">
        <h2>Ajafunktsioon</h2>
        <?php
        date_default_timezone_set('Europe/Tallinn');
        echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezone list </a><br>";
        echo "time() - aeg sekundides - " . time() . "<br>";
        echo "date() – " . date("d-m-Y H:i:s", time()) . "<br>";
        echo "date(d-m-Y H:i:s, time())<br>";
        ?>
        <pre>
d - päev 01...31
m - kuu 01...12
Y - aasta - nelja kohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
        </pre>
    </div>

    <div class="block">
        <strong>Tehtud kuupäevaga</strong><br>
        <?php
        echo "+1 min = time()+60 : " . date("d-m-Y H:i:s", time() + 60) . "<br>";
        echo "+1 tund = time()+60*60 : " . date("d-m-Y H:i:s", time() + 3600) . "<br>";
        echo "+1 päev = time()+60*60*24 : " . date("d-m-Y H:i:s", time() + 86400) . "<br>";
        ?>
    </div>

    <div class="block">
        <strong>Kuupäeva genereerimine</strong><br>
        <?php
        echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta)<br>";
        $synd = mktime(5, 12, 5, 3, 17, 2007);
        echo "minu sünnipäev: " . date("d-m-Y G:i:s", $synd) . "<br>";
        ?>
    </div>

    <div class="block">
        <strong>Kuu nimega kuupäev</strong><br>
        <?php
        $kuud = array(
            1 => 'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni',
            'juuli', 'august', 'september', 'oktoober', 'november', 'detsember'
        );

        $aasta = date("Y");
        $paev = date("d");
        $kuu = $kuud[(int)date("m")];

        echo "täna on: $paev $kuu $aasta";
        ?>
    </div>

</div>
