<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Roman Zaitsev PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
include("header.php");
?>
<?php
include("nav.php");
?>
<div class="flex-container">
    <div>
        <?php
        if(isset($_GET["link"])){
            include('content/'.$_GET["link"]);
        } else {
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/tysm.jpg" alt="pit tysm">
    </div>
</div>
<?php
include("footer.php");
?>
</body>