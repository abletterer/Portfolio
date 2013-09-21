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

<?php require_once("header.php"); ?>
    
<?php 
    /*
    *
    * Partie COMPETENCES
    *
    */
?>
    <h1 class="title-h1-activable-first">Compétences<img class="fleche-bas-first" src="<?php echo updateURL('img/fleche-bas.gif'); ?>" alt="Fleche Bas"/><input type="hidden" value='active'/></h1>
    <div class="row">

<?php foreach($competences as $competence) {
    if($lastCategorie=="") {
        //Première itération
        echo "<div class='col-xs-6'>";
    }
    
    if($competence["categorieCompetence"]!=$lastCategorie) { 
        //Changement de catégorie
        if($lastCategorie!="") echo "</div><div class='col-xs-6'>";
        $lastCategorie = $competence["categorieCompetence"];
        echo "<h2 style='text-align:center;'>".$lastCategorie."</h2>";
    }
    
    if($competence["noteCompetence"]>70) $typeBar = "progress-bar-success";
    elseif($competence["noteCompetence"]>40) $typeBar = "progress-bar-warning";
    else $typeBar = "progress-bar-danger";
?>
        <div class="col-xs-6">
            <p style="margin:0px; letter-spacing:1px; font-size:18px; text-indent:0;"><?php echo $competence['nomCompetence']; ?></p>
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
    <h1  class="title-h1-activable">Expérience professionnelle<img class="fleche-bas" src="<?php echo updateURL('img/fleche-bas.gif'); ?>" alt="Fleche Bas"/><input type="hidden" value='inactive'/></h1>
    <!-- TABLEAU D'EXPERIENCE-->
    <table class="table table-hover">
        <thead>
        <tr>
        
<?php
    $colonnes = array_keys($experiences[0]);
    $nbcolonnes = 0;
    foreach($colonnes as $colonne) {
        ++$nbcolonnes;
        if(!is_numeric($colonne) && $colonne!="idExperience") {
            switch($colonne) {
            case "nomExperience" : 
                echo "<th>&nbsp;</th>";
            break;
            case "dateDebutExperience" : 
                echo "<th>Début</th>";
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

		</tr>
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
