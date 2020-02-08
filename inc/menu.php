<div class="header__hamburger ">

	<div class="menu-btn menu-btn--<?php if($pageTitle == "front-page"){echo 'home';}else{echo 'alt';} ?>">
		<span class="menu-btn__burger"></span>
	</div>

</div> <!-- End: header__hamburger -->
		
<div class="nav">

	<nav class="menu-nav d-flex">
      
		<ul class="main-nav">
			<li class="menu-item">
				<a href="<?php echo BASEURL; ?>#uber-uns" onclick="closeMenu()">Über uns</a>
			</li>
			<li class="menu-item">
				<a href="<?php echo BASEURL; ?>#die-mulltonnenreinigung" onclick="closeMenu()">Die Mülltonnenreinigung</a>
			</li>
			<li class="menu-item">
				<a href="<?php echo BASEURL; ?>#immobilienverwaltungen" onclick="closeMenu()">Die Mülltonnenreinigung für Immobilienverwaltungen</a>
			</li>
			<li class="menu-item">
				<a href="<?php echo BASEURL; ?>#vorteile" onclick="closeMenu()">Vorteile der Mülltonnenreinigung</a>
			</li>
			<li class="menu-item">
				<a href="<?php echo BASEURL; ?>#preise" onclick="closeMenu()">Preise</a>
			</li>
		</ul>

		<div class="meta-nav">
			<ul class="d-flex d-jcsb">
				<li><a href="<?php echo BASEURL; ?>/impressum.php" title="Impressum">Impressum</a></li>
				<li><a href="<?php echo BASEURL; ?>/datenschutz.php" title="Datenschutz">Datenschutz</a></li>
				<li><a href="<?php echo BASEURL; ?>/agb.php" title="AGB">AGB</a></li>
			</ul>
		</div>

	</nav>

</div>

<div class="menu__overlay"></div>