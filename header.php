<?php $nom_page = substr(strrchr($_SERVER["PHP_SELF"],'/'),1); ?>

<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="Arnaud Bletterer">
    <link rel="shortcut icon" href="img/abletterer-logo-mini.png">
<?php 
    switch($nom_page) {
    case "index.php" : echo "<title>Accueil - ABletterer</title>";
    break;
    case "projets.php" : echo "<title>Projets - ABletterer</title>";
    break;
    case "cv.php" : echo "<title>CV - ABletterer</title>";
    break;
    case "about.php" : echo "<title>A propos - ABletterer</title>";
    break;
    case "contact.php" : echo "<title>Contact - ABletterer</title>";
    break;
    default:
    break;
    }
?>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="masthead">
        <span class="logo-title">
            <a href="index.php"><img src="img/abletterer-logo.png" alt="Logo ABletterer" onmouseover="this.src='img/abletterer-logo-hover.png'" onmouseout="this.src='img/abletterer-logo.png';"></a>
            <span class="social">
                <a href="https://www.facebook.com/abletterer" target="_blank"><img src="img/facebook-logo.gif" alt="Logo Facebook" onmouseover="this.src='img/facebook-logo-hover.gif'" onmouseout="this.src='img/facebook-logo.gif';"></a>
                <a href="https://www.twitter.com/abletterer" target="_blank"><img src="img/twitter-logo.gif" alt="Logo Twitter" onmouseover="this.src='img/twitter-logo-hover.gif'" onmouseout="this.src='img/twitter-logo.gif';"></a>
                <a href="https://plus.google.com/115104367788742954625/about" target="_blank"><img src="img/googleplus-logo.gif" alt"Logo Google Plus" onmouseover="this.src='img/googleplus-logo-hover.gif'" onmouseout="this.src='img/googleplus-logo.gif';"></a>
            </span>
        </span>
        <ul class="nav nav-justified" style="max-width: 970px;">
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
