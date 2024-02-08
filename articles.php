<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>

<style>

.header {
    background-color: transparent;
    background-image: none;
}

</style>

<body>
<?php 
include "includes/header-fix.php";
?>


<div class="articles-title" id="articles-title">
    <h1>Blog</h1>
</div>

<div class="js-card-container">
    <div class="page-wrapper">

        <article class="js-card-container__card" id="card">
            <div class="js-card-container__card__image">
                <img src="img/wordpress_2-2048x1367.jpg" alt="">
            </div>
            <div class="js-card-container__card__content">
                <h1><a href="#">Kritikus hibát rejt az egyik WordPress bővitmény</a></h1>
                <p class="content" id="content">A WordPress weboldalak üzemeltetőinek ismét résen kell lenniük egy súlyos sebezhetőség miatt - jelent meg a hír a biztonsagportal.hu oldalon. Mint írják, a WPScan szakemberei egy a</p>
                <a href="article.php" class="js-card-container__card__more">Bővebben</a>
            </div>
        </article>

    </div>
            
    <div class="pagination">
        <button class="js-prev-page" disabled>&lt;</button>
        <span class="page-count">1 / 5</span>
        <button class="js-next-page">&gt;</button>
    </div>
</div>

</body>
</html>

<?php 
include "copy-right.php";
include "includes/footer.php";
?>
