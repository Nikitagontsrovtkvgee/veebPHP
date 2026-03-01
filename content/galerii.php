<h2>Pildigalerii</h2>
<div class="galerii-container">
    <?php
    // Предположим, у тебя в папке image/ лежат файлы pilt.png
    $pildid = array("pilt.png", "pilt.png", "pilt.png"); 
    foreach($pildid as $pilt) {
        echo "<img src='image/$pilt' class='galerii-pilt' alt='pilt'>";
    }
    ?>
</div>
