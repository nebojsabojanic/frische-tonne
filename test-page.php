<?php 
    include "inc/config.php";

    $pageTitle = "Startseite";

?>

<?php include "inc/head.php"; ?>

<body class="home-page <?php echo $pageTitleShort; ?>">

    <header class="header">

        <?php include "inc/menu.php"; ?>

        <div class="home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <figure class="header__cover-wrap">
                        <img class="header__cover header__cover--desktop" src="<?php echo BASEURL; ?>/img/frische-tonne-header-img_update_v2.jpg" alt="Frische Tonne" title="Frische Tonne GmbH">
                        <img class="header__cover header__cover--mobile" src="<?php echo BASEURL; ?>/img/frische-tonne-header-img-update-responsive.jpg" alt="Frische Tonne" title="Frische Tonne GmbH">
                    </figure>
                </div><!-- End: swiper-slide -->

                <div class="swiper-slide">
                    <figure class="header__cover-wrap">
                        <img class="header__cover header__cover--desktop" src="<?php echo BASEURL; ?>/img/frische-tonne-header-img-covid.jpg" alt="Frische Tonne" title="Frische Tonne GmbH">
                        <img class="header__cover header__cover--mobile" src="<?php echo BASEURL; ?>/img/frische-tonne-header-responsive-img-covid.jpg" alt="Frische Tonne" title="Frische Tonne GmbH">
                    </figure>
                </div><!-- End: swiper-slide -->

            </div><!-- End: swiper-wrapper -->
        </div><!-- End: home-slider -->

    </header>

    <main class="content">


        <?php include "inc/section-1.php"; ?>


        <?php include "inc/section-2.php"; ?>


        <?php include "inc/section-3.php"; ?>


        <?php include "inc/section-4.php"; ?>


        <?php include "inc/section-5.php"; ?>


        <?php include "inc/section-6.php"; ?>


        <?php include "inc/section-7.php"; ?>


    </main>


<?php include "inc/footer.php"; ?>
