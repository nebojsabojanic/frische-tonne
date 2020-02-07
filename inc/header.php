<!--
 **********************************************
 * Project: Frishe Tonne, Germany
 **********************************************
 * Developed by: Mediavuk Team
   + web: mediavuk.com
   + e-mail: <tg@mediavuk.com>
   + html, css, jquery, vanilla & php
   + responsive page
 *********************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle . ' - ' . $siteName; ?></title>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1ade7395c8.js" crossorigin="anonymous"></script>

    <!-- Google Fonts - Montserrat (400-700) and Open Sans (400) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Open+Sans&display=swap&subset=latin-ext" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASEURL; ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASEURL; ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASEURL; ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASEURL; ?>/img/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>
<body>

    <header class="header">

        <div class="header__hamburger">

            <div class="menu-btn">
                <span class="menu-btn__burger"></span>
            </div>

        </div> <!-- End: header__hamburger -->


        <?php include "inc/menu.php"; ?>


        <figure class="header__cover">
            <img src="<?php echo BASEURL; ?>/img/frische-tonne-header-img.jpg" alt="Frische Tonne" title="Frische Tonne GmbH">
        </figure>
    </header>