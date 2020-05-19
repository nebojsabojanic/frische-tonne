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

            </div><!-- End: swiper-wrapper -->

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div><!-- End: home-slider -->

    </header>