<?php include('p2is.php'); ?>

<div id="content">
    <h1>Värske teade</h1>
    <div class="teade">
        <?php
        $teade = file_get_contents('teade.txt');
        echo nl2br($teade);
        ?>
    </div>
</div>

<?php include('jalus.php'); ?>