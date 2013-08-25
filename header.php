<?php $nom_page = substr(strrchr($_SERVER["PHP_SELF"],'/'),1); ?>
<div class="masthead">
    <span class="logo-title">
        <a href="index.php"><img src="img/abletterer-logo.png" onmouseover="this.src='img/abletterer-logo-hover.png'" onmouseout="this.src='img/abletterer-logo.png';"></a>
        <span class="social">
            <a href="https://www.facebook.com/abletterer" target="_blank"><img src="img/facebook-logo.gif" onmouseover="this.src='img/facebook-logo-hover.gif'" onmouseout="this.src='img/facebook-logo.gif';"></a>
            <a href="https://www.twitter.com/abletterer" target="_blank"><img src="img/twitter-logo.gif" onmouseover="this.src='img/twitter-logo-hover.gif'" onmouseout="this.src='img/twitter-logo.gif';"></a>
            <a href="https://plus.google.com/115104367788742954625/about" target="_blank"><img src="img/googleplus-logo.gif" onmouseover="this.src='img/googleplus-logo-hover.gif'" onmouseout="this.src='img/googleplus-logo.gif';"></a>
        </span>
    </span>
    <ul class="nav nav-justified">
        <li <?php echo $nom_page=="index.php"?" class='active'":""; ?>
        ><a href="./index.php">Accueil</a></li>
        <li <?php echo $nom_page=="projets.php"?" class='active'":""; ?>
        ><a href="./projets.php">Projets</a></li>
        <li <?php echo $nom_page=="cv.php"?" class='active'":""; ?>
        ><a href="./cv.php">CV</a></li>
        <li <?php echo $nom_page=="about.php"?" class='active'":""; ?>
        ><a href="./about.php">A propos</a></li>
        <li <?php echo $nom_page=="contact.php"?" class='active'":""; ?>
        ><a href="./contact.php">Contact</a></li>
    </ul>
</div><!-- /.masthead -->