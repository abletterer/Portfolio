<?php 
require_once("./identifiants.php");

try {
    $pdo = new PDO($stringConn, $userConn, $mdpConn, $argsConn);
}
catch (Exception $e) {
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

require_once("header.php");
	$stmt = $pdo->query("SELECT * FROM projet");
	
	$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>
	
		<h1  class="title-h1">
			Projets
		</h1>
		
		<div class="row">
			  
	<?php 
	foreach($projets as $projet) { ?>
			  
			<div class="col-xs-6 projet" style="text-align:center;">
				<h2><?php echo $projet["nomProjet"];?></h2>
                <a href="<?php echo updateURL('./Projets/').$projet['urlProjet']; ?>" hidden="true">Télécharger les sources</a>
				<div class="well"><img class="img-thumbnail" src="<?php echo updateURL('img/Projets/'); echo $projet['imageProjet']; ?>" alt="<?php echo $projet["nomProjet"]; ?>" style="width:417px; height:212px;" /></div>
			
				<!-- Bouton de déclencement -->
				<div><a data-toggle="modal" href="#myModal<?php echo $projet["idProjet"]; ?>" class="btn btn-primary btn-lg">En savoir plus &raquo;</a></div>
				
				<!-- Page de présentation du projet -->
				<div class="modal fade" id="myModal<?php echo $projet["idProjet"]; ?>" role="dialog" aria-hidden="true" style="width:100%;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h2 class="modal-title"><?php echo $projet["nomProjet"]; ?></h2>
							</div>
							<div class="modal-body">
								<p style="text-indent:0;"><?php echo $projet["descriptionProjet"];?></p>
								<div class="well"><img src="<?php echo updateURL('img/Projets/'); echo $projet['imageProjet']; ?>" alt="<?php echo $projet["nomProjet"]; ?>" class="img-thumbnail" style="width:417px; height:212px;" /></div>
							</div>
							<div class="modal-footer rows" style="text-align:left;">
								<div class="col-xs-6">
									<h4>Réalisé par :</h4>
								    <ul style="list-style-type: none; font-family:TraditionellSans; font-size:20px;">
                                        <li><?php echo $projet["auteurProjet"]?></li>
                                    </ul>
                                </div>
								<div class="col-xs-6"><p><a class="btn btn-lg btn-success" href="./Projets/<?php echo $projet["urlProjet"]?>">Télécharger les sources</a></p></div>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
	
	<?php }
	
	?>
		</div><!-- /row-->
    
<?php require_once("footer.php"); ?>   
