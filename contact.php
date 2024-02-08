<?php 
include "includes/header-fix.php"
?>

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
                    <li><ion-icon name="location-outline"></ion-icon> 6723 Szeged Szent László utca 20. 1.em. 2.ajtó</li>
                    <li><ion-icon name="mail-outline"></ion-icon> info@tenderteam.hu</li>
                    <li><ion-icon name="time-outline"></ion-icon> Hétfő - Péntek 8:00-16:00</li>
                </ul>

                <h4>Webfejlesztés</h4>
                <p>Petrov Adrián</p>
                <ul>
                    <li><ion-icon name="location-outline"></ion-icon> petrov.adrian@tenderteam.hu</li>
                    <li><ion-icon name="call-outline"></ion-icon> +36-20-441-6198</li>
                </ul>

                
                <h4>Pályázat</h4>
                <p>Kovács Flóra</p>
                <ul>
                    <li><ion-icon name="location-outline"></ion-icon> kovacs.flora@tenderteam.hu</li>
                    <li><ion-icon name="call-outline"></ion-icon> +36-30-208-3982</li>
                </ul>
            </div>
        </div>
    </div>
</div>

    
</body>
</html>

<?php 
include "copy-right.php";
include "includes/footer.php";
?>