<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
include "includes/header-fix.php"
?>    

<div class="contact-title" id="contact-title">
    <div class="page-wrapper">
        <div class="contact-title-content">
            <h1>Kapcsolat</h1>
        </div>
    </div>
</div>

<div class="contact">
    <div class="page-wrapper">
        <form class="contact--form">
            <h1>Kérje ingyenes árajánlatunkat!</h1>
            <div class="contact--form__container">
                <input type="text" id="name" name="name" placeholder="Az Ön neve">
                <input type="text" id="email" name="email" placeholder="Az Ön E-mail címe">
                <textarea name="" id="" cols="30" rows="10" id="message" name="message" placeholder="Az üzenet tartalma..."></textarea>
                <button>Küldés</button>
            </div>
        </form>
        <div class="contact--text">
        <h1>Elérhetőségek</h1>
            <div class="contact--text__container">
                <h4>Székhely</h4>
                <ul>
                    <li><ion-icon name="location-outline"></ion-icon> 9200 Mosonmagyaróvár </li>
                    <li><ion-icon name="mail-outline"></ion-icon> info@lacikovacs.hu</li>
                    <li><ion-icon name="time-outline"></ion-icon> Hétfő - Péntek 8:00-16:00</li>
                </ul>

                <h4>Webfejlesztés</h4>
                <p>Kovács László</p>
                <ul>
                    <li><ion-icon name="location-outline"></ion-icon>lacikovacs330@gmail.com</li>
                    <li><ion-icon name="call-outline"></ion-icon> +36-20-579-4154</li>
                </ul>

                
                <h4>Pályázat</h4>
                <p>Kovács László</p>
                <ul>
                    <li><ion-icon name="location-outline"></ion-icon> lacikovacs330@gmail.com</li>
                    <li><ion-icon name="call-outline"></ion-icon> +36-20-579-4154</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    

<?php 
include "copy-right.php";
include "includes/footer.php";
?>

</body>
</html>