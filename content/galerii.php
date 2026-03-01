<h2>Pildigalerii</h2>
<div class="gallery">
    <?php
    $pildid = array("pilt1.jpg", "pilt2.jpg", "pilt3.jpg"); // Имена файлов из папки images/
    foreach($pildid as $pilt) {
        echo "<img src='images/$pilt' class='gallery-img' alt='Galerii pilt'>";
    }
    ?>
</div>
