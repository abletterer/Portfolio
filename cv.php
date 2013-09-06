<?php 
require_once("./identifiants.php");
try {
    $pdo = new PDO($stringConn, $userConn, $mdpConn, $argsConn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

$stmt = $pdo->query("SELECT * FROM competence ORDER BY categorieCompetence");
$competences = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->query("SELECT * FROM experience ORDER BY dateDebutExperience");
$experiences = $stmt->fetchAll(PDO::FETCH_BOTH);

$lastCategorie = "";
?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Arnaud Bletterer">
    <link rel="shortcut icon" href="img/abletterer-logo-mini.png">

    <title>CV - ABletterer</title>

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
    
<?php 
    /*
    *
    * Partie COMPETENCES
    *
    */
?>
    <span class="title-h1"><h1>Compétences</h1></span>
    <div class="row">

<?php foreach($competences as $competence) {
    if($lastCategorie=="") {
        //Première itération
        echo "<div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
    }
    
    if($competence["categorieCompetence"]!=$lastCategorie) { 
        //Changement de catégorie
        if($lastCategorie!="") echo "</div><div class='col-xs-6 col-sm-6 col-md-6 col-lg-6'>";
        $lastCategorie = $competence["categorieCompetence"];
        echo "<h2 style='text-align:center;'>".$lastCategorie."</h2>";
    }
    
    if($competence["noteCompetence"]>70) $typeBar = "progress-bar-success";
    elseif($competence["noteCompetence"]>40) $typeBar = "progress-bar-warning";
    else $typeBar = "progress-bar-danger";
?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <p style="margin:0px; letter-spacing:1px; font-size:18px"><?php echo $competence['nomCompetence']; ?></p>
            <div class="progress progress-striped" onmouseover="this.className='progress progress-striped active'" onmouseout="this.className='progress progress-striped'" style="height:10px;">
                <div class="progress-bar <?php echo $typeBar; ?>" role="progressbar" aria-valuenow="<?php echo $competence['noteCompetence']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $competence['noteCompetence']; ?>%; height:10px;">
                    <span class="sr-only"><?php echo $competence['noteCompetence']; ?>% Complete (success)</span>
                </div>
            </div>
        </div>
        
<?php }
    if($lastCategorie!="") echo "</div>";   //Si au moins un élément a été trouvé dans la table
;?>
    </div>
    
   <?php /*
    *
    * Partie EXPERIENCE PROFESSIONNELLE
    *
    */ ?>
    <span class="title-h1"><h1>Expérience professionnelle</h1></span>
    <!-- TABLEAU D'EXPERIENCE-->
    <table class="table table-hover">
        <thead>
<?
    $colonnes = array_keys($experiences[0]);
    $nbcolonnes = 0;
    foreach($colonnes as $colonne) {
        ++$nbcolonnes;
        if(!is_numeric($colonne) && $colonne!="idExperience") {
            switch($colonne) {
            case "nomExperience" : 
                echo "<th></th>";
            break;
            case "dateDebutExperience" : 
                echo "<th>Debut</th>";
            break;
            case "dateFinExperience" : 
                echo "<th>Fin</th>";
            break;
            case "employeurExperience" : 
                echo "<th>Employeur</th>";
            break;
            case "emplacementExperience" : 
                echo "<th>Emplacement</th>";
            break;
            }
        }
    }        
?>
        </thead>
        <tbody>
<?php
        foreach($experiences as $experience) {
            echo "<tr>";
            for($i=1;$i<$nbcolonnes/2;$i++)
                echo "<td>".$experience[$i]."</td>";
            echo "</tr>";
        }
?>
        </tbody>
    </table>
    
    
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