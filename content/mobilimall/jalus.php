<div id="footer">
    <?php
    $autor = file_get_contents('autor.txt');
    echo nl2br($autor);
    ?>
</div>
</body>
</html>