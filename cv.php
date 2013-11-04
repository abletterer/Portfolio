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

$lastCategorie = "";
?>

<?php require_once("header.php"); ?>

<div class="row" style="margin-top:20px; margin-bottom:20px;">
	<div class="col-xs-12" style="text-align:center;">
		<a type="button" class="btn btn-primary btn-lg" href="<?php echo updateURL('Doc/cv.pdf'); ?>" target="_blank">Télécharger la version PDF</a>
	</div>
</div>

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
        echo "<div class='col-xs-12'>";
    }
    
    if($competence["categorieCompetence"]!=$lastCategorie) { 
        //Changement de catégorie
        if($lastCategorie!="") echo "</div><div class='col-xs-12'>";
        $lastCategorie = $competence["categorieCompetence"];
        echo "<p><strong>".$lastCategorie.":</strong> ".$competence['nomCompetence'];
    }
	else 
		echo ", ".$competence['nomCompetence'];
?>
        
<?php }
    if($lastCategorie!="") echo "</div>";   //Si au moins un élément a été trouvé dans la table
;?>
    </div>

<?php 
    /*
    *
    * Partie FORMATION
    *
    */
?>

    <h1 class="title-h1-activable">Formation<img class="fleche-bas" src="<?php echo updateURL('img/fleche-bas.gif'); ?>" alt="Fleche Bas"/><input type="hidden" value='inactive'/></h1>
    
    <!-- Tableau de formation-->
    <table class="table table-hover">  
        <tbody>
<?php 

$stmt = $pdo->query("SELECT DATE_FORMAT(dateReussiteFormation, '[%Y]') AS dateReussite, nomFormation, etablissementFormation FROM formation ORDER BY dateReussite DESC");
$formations = $stmt->fetchAll(PDO::FETCH_NUM);

        foreach($formations as $formation) {
			if($formation[0]>date("[Y]")) {
				//Si la date de reussite de formation est supérieure à la date courante
            	echo "<tr style='opacity:0.3; border:none;'>";
			}
			else
				echo "<tr>";
			echo "<td style='font-size:30px; color:#499ca4; vertical-align:middle; border:none;'>".$formation[0]."</td>";
            for($i=1;$i<$stmt->columnCount();++$i) {
				echo "<td style='vertical-align:middle;'>".$formation[$i]."</td>";
			}
            echo "</tr>";
        }

?>
        </tbody> 
    </table>
    
<?php 
	/*
	*
	* Partie EXPERIENCE
	*
	*/ 
?>
    <h1  class="title-h1-activable">Expérience<img class="fleche-bas" src="<?php echo updateURL('img/fleche-bas.gif'); ?>" alt="Fleche Bas"/><input type="hidden" value='inactive'/></h1>
    <!-- TABLEAU D'EXPERIENCE-->
    <table class="table table-hover">
        <tbody>
<?php

$stmt = $pdo->query("SELECT DATE_FORMAT(dateDebutExperience, '[%m/%Y]') AS dateDebut, DATE_FORMAT(dateFinExperience, '[%m/%Y]') AS dateFin, nomExperience, employeurExperience, emplacementExperience FROM experience ORDER BY dateDebutExperience DESC");
$experiences = $stmt->fetchAll(PDO::FETCH_NUM);

        foreach($experiences as $experience) {
            echo "<tr>";
			echo "<td style='font-size:30px; color:#499ca4; vertical-align:middle;'>".$experience[0]." ".$experience[1]."</td>";
            for($i=2;$i<$stmt->columnCount();$i++) {
                echo "<td style='vertical-align:middle;'>".$experience[$i]."</td>";
            }
            echo "</tr>";
        }
?>
        </tbody>
    </table>
    
    
<?php require_once("footer.php"); ?>
