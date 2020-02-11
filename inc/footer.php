<?php if($pageTitle != '404'){ ?>
   
    <footer class="footer footer--<?php if($pageTitle == "Startseite"){echo 'home';}else{echo 'alt';} ?>">

        <img src="<?php echo BASEURL; ?>/img/<?php echo $footerImg; ?>" alt="background">

        <div class="footer__content grid-1280 d-flex d-jcsb">
            <div class="footer__menu meta-nav">
                <ul class="d-flex d-jcsb">
                    <li><a href="<?php echo BASEURL; ?>/impressum.php" title="Impressum">Impressum</a></li>
                    <li><a href="<?php echo BASEURL; ?>/datenschutz.php" title="Datenschutz">Datenschutz</a></li>
                    <li><a href="<?php echo BASEURL; ?>/agb.php" title="AGB">AGB</a></li>
                </ul>
            </div>

            <div class="footer__copyrights">
                <p>Copyright <?php echo date('Y');?> @ All rights reserved</p>
            </div>
        </div>
    </footer>

<?php } ?>


<!-- Scripts / Libraries
    ####################################################### -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo BASEURL; ?>/assets/js/app.js"></script>

<!-- Cookie Law -->
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
    window.cookieconsent.initialise({
    "palette": {
        "popup": {
        "background": "#326590",
        "text": "#ffffff"
        },
        "button": {
        "background": "#98cb55",
        "text": "#ffffff"
        }
    },
    "theme": "classic",
    "content": {
        "message": "Wir verwenden Cookies auf unserer Webseite, damit Sie alle vorgesehenen Funktionen gut und benutzerfreundlich nutzen können. Wenn Sie auf dieser Seite weitersurfen, stimmen Sie der Cookienutzung zu.",
        "dismiss": "Fortfahren",
        "link": "Weitere Informationen",
        "href": "https://www.frische-tonne.de/datenschutz.php"
    }
    });
</script>

</body>
</html>