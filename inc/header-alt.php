<?php include "head.php"; ?>

<body class="agb alt-page">

    <!-- <div class="message">
        <p class="message__paragraph">So sauber wie neu! - umweltschonende Mülltonnen-Reinigung - ab 5,00 €</p>
    </div> -->

    <header class="header header--alt">

        <?php include "inc/menu.php"; ?>

        <div class="header__content">

            <figure class="logo">
                <a href="<?php echo BASEURL; ?>">
                    <img src="<?php echo BASEURL . $logo; ?>" alt="Frische Tonne Logo">
                </a>
            </figure>

        </div>

        <div class="breadcrumbs grid-1280">
            <a href="<?php echo BASEURL; ?>">Startseite</a><p><?php echo $pageTitle; ?></p>
        </div>

    </header>