<link rel="stylesheet" href="style/konspekt.css">

<div class="konspekt">
<h1>Konspekt: Mobilimall projekt</h1>


    <h2>1. Kratek sissejuhatus</h2>
    
    <h3>Ülesanne</h3>
    <p>Luua mobiilisõbralik ja adaptiivne veebisait anekdootide teemadel. Sait pidi olema kasutatav nii arvutis kui ka mobiilseadmetes, omama kaasaegset disaini ja head kasutajakogemust.</p>
    
    <h3>Kasutatud tehnoloogiad</h3>

        <strong>PHP</strong> - serveri poolne programmeerimine, failide lugemine ja dünaamiline sisu kuvamine<br>
        <li><strong>HTML</strong> - veebilehe struktuur</li>
        <li><strong>CSS</strong> - kaasaegne kujundus gradientide, animatsioonide ja responsiivse disainiga</li>



<div class="section">
    <h2>2. Koodifragmendid</h2>

    <h3>PHP faili lugemine</h3>
    <p>See kood loeb teksti failist ja kuvab selle veebilehel. Kasutatakse dünaamilise sisu kuvamiseks.</p>
    <pre>&lt;?php
$autor = file_get_contents('autor.txt');
echo nl2br($autor);
?&gt;</pre>

    <h3>Responsiivne navigatsioon</h3>
    <p>CSS kood, mis muudab menüü mobiilseadmetes vertikaalseks ja suurendab nuppude suurust puutetundlikkuse parandamiseks.</p>
    <pre>@media screen and (max-width: 768px) {
    .nav ul {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }
    
    .nav ul li a {
        display: block;
        padding: 12px 15px;
        text-align: center;
    }
}</pre>

    <h3>Kaasaegne gradientne taust</h3>
    <p>Loob visuaalselt atraktiivse tausta lineaarse gradiendiga, mis muudab saidi välimuse kaasaegsemaks.</p>
    <pre>body {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
}</pre>

    <h3>Klaasefekt (Glass morphism)</h3>
    <p>Kaasaegne disainitrend, mis loob poolläbipaistva "klaasi" efekti taustahägunemisega.</p>
    <pre>#header {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
}</pre>

    <h3>Animatsioonid</h3>
    <p>Sujuv sisu ilmumine lehele laadimise ajal, mis parandab kasutajakogemust.</p>
    <pre>@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

#content {
    animation: fadeInUp 0.8s ease;
}</pre>

    <h3>Hover efektid</h3>
    <p>Interaktiivsed efektid, mis reageerivad hiire liikumisele ja parandavad kasutajaliidest.</p>
    <pre>.nav ul li a:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}</pre>

    <h3>Mobiilne optimiseerimine</h3>
    <p>Väikeste ekraanide jaoks kohandatud stiilid, mis tagavad hea kasutatavuse nutitelefonides.</p>
    <pre>@media screen and (max-width: 480px) {
    #content {
        margin: 10px 3px;
        padding: 15px 10px;
    }
    
    .teade {
        font-size: 14px;
        padding: 15px 10px;
    }
}</pre>
</div>

<div class="section">
    <h2>3. Projekti struktuur</h2>
    <ul>
        <li><strong>p2is.php</strong> - päise ja navigatsiooni fail</li>
        <li><strong>jalus.php</strong> - jaluse fail</li>
        <li><strong>index.php</strong> - pealeht</li>
        <li><strong>kujundus.css</strong> - kõik stiilid</li>
        <li><strong>*.php</strong> - erinevate kategooriate lehed</li>
    </ul>
    <img src="content/jokes/kon.png" alt="Projekti struktuur">
</div>
</div>