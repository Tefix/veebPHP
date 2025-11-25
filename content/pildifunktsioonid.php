<h2>Pildifunktsioonid</h2>

<?php

$pildid = [
    "Meme Joker" => "../veebPHP/image/meme1.jpg",
    "Meme Grape" => "../veebPHP/image/meme2.jpg",
    "Meme Crocodil" => "../veebPHP/image/meme3.jpg",
    "Meme Cat" => "../veebPHP/image/meme4.jpg",
    "Meme Mark" => "../veebPHP/image/meme5.jpg"
];
?>

<form method="post" action="">
    <select name="image">
        <option value="">Vali pilt</option>

        <?php
        foreach ($pildid as $key => $fail) {
            echo "<option value='$key'>$key</option>";
        }
        ?>
    </select>

    <br><br>
    <input type="submit" value="Vaata">
</form>

<?php

if (!empty($_POST['image'])) {

    $valik = $_POST['image'];


    if (isset($pildid[$valik])) {

        $pildi_aadress = $pildid[$valik];


        if (file_exists($pildi_aadress)) {

            $pildi_andmed = getimagesize($pildi_aadress);

            if ($pildi_andmed !== false) {
                $laius = $pildi_andmed[0];
                $korgus = $pildi_andmed[1];
                $formaat = $pildi_andmed[2];
            } else {
                echo "<p style='color: red;'>Viga pildi lugemisel!</p>";
                exit;
            }
        } else {
            echo "<p style='color: red;'>Pilt ei leitud: $pildi_aadress</p>";
            exit;
        }

        echo "<h3>Originaal pildi andmed</h3>";
        echo "Laius: $laius px<br>";
        echo "Kõrgus: $korgus px<br>";
        echo "Formaat: $formaat (2 = JPG)<br>";

       -

        $max_laius = 120;
        $max_korgus = 90;


        if ($laius <= $max_laius && $korgus <= $max_korgus) {
            $ratio = 1;
        } elseif ($laius > $korgus) {
            $ratio = $max_laius / $laius;
        } else {
            $ratio = $max_korgus / $korgus;
        }


        $pisi_laius = round($laius * $ratio);
        $pisi_korgus = round($korgus * $ratio);

        echo "<h3>Uue pildi andmed</h3>";
        echo "Arvutatud suhe: $ratio<br>";
        echo "Laius: $pisi_laius px<br>";
        echo "Kõrgus: $pisi_korgus px<br>";

        // pisipildi kuvamine
        echo "<img src='$pildi_aadress' width='$pisi_laius' height='$pisi_korgus'>";
    }
}
?>
