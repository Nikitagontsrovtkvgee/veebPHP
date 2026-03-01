<link rel="stylesheet" href="style/style.css">
<h2>Pildigalerii</h2>
<div class="galerii">
    <?php
    // Выводим твою картинку image/pilt.png несколько раз
    for($i=0; $i<4; $i++) {
        echo "<img src='image/pilt.png' class='pilt-ring' alt='pilt'>";
    }
    ?>
</div>
