<?php 
try {
    $pdo = new PDO('mysql:host=localhost;dbname=Portfolio', 'root', 'tarask', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

$stmt = $pdo->query("SELECT * FROM Projet");

$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Arnaud Bletterer">
    <link rel="shortcut icon" href="img/abletterer-logo-mini.png">

    <title>Projets - ABletterer</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

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

<?php require_once("header.php"); ?>

    <!-- Example row of columns -->
      <div class="row">
          
          
<?php 
foreach($projets as $projet) { ?>
          
    <div class="col-xs-6 col-sm-4 col-lg-4">
    <h2><?php echo $projet["nomProjet"]; ?></h2>
      <p><?php echo $projet["descriptionProjet"]; ?></p>
      <p><a class="btn btn-primary" href="#">En savoir plus... &raquo;</a></p>
    </div>

<?php }

?>
      </div><!-- /row-->
    
    <?php require_once("footer.php"); ?>    
    
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap-transition.js"></script>
<script src="../assets/js/bootstrap-alert.js"></script>
<script src="../assets/js/bootstrap-modal.js"></script>
<script src="../assets/js/bootstrap-dropdown.js"></script>
<script src="../assets/js/bootstrap-scrollspy.js"></script>
<script src="../assets/js/bootstrap-tab.js"></script>
<script src="../assets/js/bootstrap-tooltip.js"></script>
<script src="../assets/js/bootstrap-popover.js"></script>
<script src="../assets/js/bootstrap-button.js"></script>
<script src="../assets/js/bootstrap-collapse.js"></script>
<script src="../assets/js/bootstrap-carousel.js"></script>
<script src="../assets/js/bootstrap-typeahead.js"></script>



</body></html>