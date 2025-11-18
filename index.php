<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Nikita Gontsarov veebirakenduste tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/muusikaKysitlus.js"></script>
</head>
<body>

<?php include("header.php"); ?>
<?php include("nav.php"); ?>

<div class="flex container">
    <div>
        <section>
            <?php
            if(isset($_GET['link'])){
                include('content/'.$_GET['link']);
            } else {
                include('content/avaleht.php');
            }
            ?>
        </section>
    </div>

    <div>
        <img src="image/pilt.png" alt="pilt vabal valikul">
    </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>
