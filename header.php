<?php 
    session_start();
    $nom_page = substr(strrchr($_SERVER["PHP_SELF"],'/'),1); 
    require_once("utils.php");
?>

<!DOCTYPE html>

<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="author" content="Arnaud Bletterer">
    <link rel="shortcut icon" href="<?php echo updateURL('img/abletterer-logo-mini.png'); ?>">
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
    <link href="<?php echo updateURL('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo updateURL('css/justified-nav.css'); ?>" rel="stylesheet">
    <link href="<?php echo updateURL('css/main.css'); ?>" rel="stylesheet">

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
            <a href="index.php">
                <img class="hover" src="<?php echo updateURL('img/abletterer-logo-hover.png'); ?>" alt="Logo ABletterer" style="position: absolute; opacity: 0;">
                <img class="normal" src="<?php echo updateURL('img/abletterer-logo.png'); ?>" alt="Logo ABletterer">
            </a>
            <span class="social">
            	<span>
                    <a href="https://github.com/abletterer" target="_blank">
                        <img class="hover" src="<?php echo updateURL('img/github-logo-hover.png'); ?>" alt="Logo GitHub" style="position:absolute; height:48px; opacity:0;">
                        <img class="normal" src="<?php echo updateURL('img/github-logo-hover.png'); ?>" alt="Logo GitHub" style="height:48px;">
                    </a>
                </span>
                <span>
                    <a href="https://www.facebook.com/abletterer" target="_blank">
                        <img class="hover" src="<?php echo updateURL('img/facebook-logo-hover.png'); ?>" alt="Logo Facebook" style="position:absolute; height:48px; opacity:0;">
                        <img class="normal" src="<?php echo updateURL('img/facebook-logo.png'); ?>" alt="Logo Facebook" style="height:48px;">
                    </a>
                </span>
                <span>
                    <a href="https://www.twitter.com/abletterer" target="_blank">
                        <img class="hover" src="<?php echo updateURL('img/twitter-logo-hover.png'); ?>" alt="Logo Twitter" style="position:absolute; height:48px; opacity:0;">
                        <img class="normal" src="<?php echo updateURL('img/twitter-logo.png'); ?>" alt="Logo Twitter" style="height:48px;">
                    </a>
                </span>
                <span>
                    <a href="https://plus.google.com/115104367788742954625/about" target="_blank">
                        <img class="hover" src="<?php echo updateURL('img/googleplus-logo-hover.png'); ?>" alt="Logo Google Plus" style="position:absolute; height:48px; opacity:0;">
                        <img class="normal" src="<?php echo updateURL('img/googleplus-logo.png'); ?>" alt="Logo Google Plus" style="height:48px;">
                    </a>
                </span>
            </span>
        </span>
        <ul class="nav nav-justified" style="max-width: 970px;">
            <li <?php echo $nom_page=="index.php"?" class='active'":""; ?>
            ><a href=<?php echo updateURL('./index.php'); ?>>Accueil</a></li>
            <li <?php echo $nom_page=="projets.php"?" class='active'":""; ?>
            ><a href=<?php echo updateURL('./projets.php'); ?>>Projets</a></li>
            <li <?php echo $nom_page=="cv.php"?" class='active'":""; ?>
            ><a href=<?php echo updateURL('./cv.php'); ?>>CV</a></li>
            <li <?php echo $nom_page=="about.php"?" class='active'":""; ?>
            ><a href=<?php echo updateURL('./about.php'); ?>>A propos</a></li>
            <li <?php echo $nom_page=="contact.php"?" class='active'":""; ?>
            ><a href=<?php echo updateURL('./contact.php'); ?>>Contact</a></li>
        </ul>
    </div><!-- /.masthead -->
