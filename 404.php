<?php 
    include "inc/config.php";

    $pageTitle = "404";
    $pageTitleShort = "page-404";

?>

<?php include "inc/header-alt.php"; ?>


    <main class="content section--blue-gradient d-flex d-jcc d-aic">

        <div class="grid-960 d-flex d-jcc d-aic d-column ta-center">

            <figure class="logo logo--404">
                <a href="<?php echo BASEURL; ?>">
                    <img src="<?php echo BASEURL . $logo; ?>" alt="Frische Tonne Logo">
                </a>
            </figure>

            <div class="title">
                <h1 class="page-404__title title--white">404</h1>
                <span class="page-404__subtitle">SEITE NICHT GEFUNDEN</span>
            </div>

            <div class="page-404__description">
                <p class="paragraph">Leider konnte die angeforderte Seite nicht gefunden werden, scheinbar wurde eine nicht korrekte URL eingegeben. Vielleicht versuchen Sie auch eine Seite aus dem alten Shop aufzurufen. Das geht nicht mehr seitdem wir umgezogen sind. So ist der 404 Fehler entstanden. Bitte nutzen Sie unsere Suche oder wechseln Sie zu unserer Startseite um in unserem umfangreichen Sortiment zu stöbern. Bei Rückfragen können Sie sich auch gerne an uns wenden.</p>
            </div>

            <div class="button button--white">
                <a href="<?php echo BASEURL; ?>">Startseite</a>
            </div>

        </div>

    </main>


<?php include "inc/footer.php"; ?>
