<? $nom_page = substr(strrchr($_SERVER["PHP_SELF"],'/'),1); ?>
<div class="masthead">
    <div class="logo-title"><img src="img/abletterer-logo.png"/></div>
    <ul class="nav nav-justified">
        <li <? echo $nom_page=="index.php"?" class='active'":""; ?>
        ><a href="./index.php">Accueil</a></li>
        <li <? echo $nom_page=="projets.php"?" class='active'":""; ?>
        ><a href="./projets.php">Projets</a></li>
        <li <? echo $nom_page=="cv.php"?" class='active'":""; ?>
        ><a href="./cv.php">CV</a></li>
        <li <? echo $nom_page=="about.php"?" class='active'":""; ?>
        ><a href="./about.php">A propos</a></li>
        <li <? echo $nom_page=="contact.php"?" class='active'":""; ?>
        ><a href="./contact.php">Contact</a></li>
    </ul>
</div><!-- /.masthead -->