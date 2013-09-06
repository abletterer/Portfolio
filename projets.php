<?php 
require_once("./identifiants.php");
try {
    $pdo = new PDO($stringConn, $userConn, $mdpConn, $argsConn);
}
catch (Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

$stmt = $pdo->query("SELECT * FROM projet");

$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once("header.php"); ?>

    <span class="title-h1">
        <h1>Projets</h1>
    </span>
    <div class="row">
          
<?php 
foreach($projets as $projet) { ?>
          
        <div class="col-xs-6" style="text-align:center;">
            <h2><?php echo $projet["nomProjet"];?></h2>
            <div class=well><img src="img/Projets/<?php echo $projet["imageProjet"]; ?>" alt="<?php echo $projet["nomProjet"]; ?>" width="100%" class="img-thumbnail"/></div>
            <p><a class="btn btn-primary" href="#">En savoir plus &raquo;</a></p>
        </div>

<?php }

?>
    </div><!-- /row-->
    
<?php require_once("footer.php"); ?>    