<?php include "head.php"; ?>

<body class="agb alt-page">

    <div class="message">
        <p class="message__paragraph">So sauber wie neu! - umweltschonende Mülltonnen-Reinigung - ab 5,00 €</p>
    </div>

    <header class="header header--alt grid-1280">

        <?php include "inc/menu.php"; ?>

        <div class="header__content d-flex d-jcsb d-aic">

            <figure class="logo">
                <a href="<?php echo BASEURL; ?>">
                    <img src="<?php echo BASEURL . $logo; ?>" alt="Frische Tonne Logo">
                </a>
            </figure>

            <div class="button button--green button--header-phone">
                <a href="tel:015220730706"><i class="fas fa-phone"></i> 0152 20730706</a>
            </div>

        </div>

        <div class="breadcrumbs">
            <a href="<?php echo BASEURL; ?>">Startseite</a><p><?php echo $pageTitleLong; ?></p>
        </div>

    </header>