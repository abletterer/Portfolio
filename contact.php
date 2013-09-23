<?php require_once("header.php"); ?>

<?php 

$erreurs = array();

if(!empty($_POST)) {
    //Si une demande de contact a été faite
    $succes = true;
    
    if(!empty($_POST["nomContact"])) {
        //Si le nom du contact a été renseigné
        $nomContact = htmlspecialchars($_POST["nomContact"]);
    }
    else {
        $succes = false;
        $erreurs[] = "Veuillez renseigner votre nom!";
    }
    
    if(!empty($_POST["emailContact"])) {
        //Si l'email du contact a été renseigné
        $emailContact = htmlspecialchars($_POST["emailContact"]);
    }
    else {
        $succes = false;
        $erreurs[] = "Veuillez renseigner votre email!";
    }
    
    if(!empty($_POST["messageContact"])) {
        //Si le message du contact a été renseigné
        $messageContact = htmlspecialchars($_POST["messageContact"]);
    }
    else {
        $succes = false;
        $erreurs[] = "Veuillez composer votre message!";
    }
                
    if(!empty($_POST["captchaContact"])) {
        //Si le captcha du contact a été renseigné
        
        /*
        *   Vérification du captcha
        *   Utilisationd de recaptcha (Google)
        */
        
        
    }
    else {
        $succes = false;
        $erreurs[]  = "Veuillez recopier le captcha que vous apercevez!";
    }

    if($succes) {    
        //Si les étapes précédentes se sont bien déroulées
        require_once("./identifiants.php");
        
        try {
            $pdo = new PDO($stringConn, $userConn, $mdpConn, $argsConn);
        
            $pdo->beginTransaction();
            
            $stmt = $pdo->prepare("INSERT INTO contact (nomContact, emailContact, messageContact) VALUES (?, ?, ?)");
            $stmt->execute(array($nomContact, $emailContact, $messageContact));
            
            $pdo->commit();
            
            $succes = true;
        }
        catch (Exception $e) {
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
            $succes = false;
            $erreur[] = "Une erreur a été rencontrée avec la base de données!";
        }
    }
}

?>
    
    <h1 class="title-h1">Contact</h1>

<?php 

if(isset($succes)) {
    if(!$succes) {
        echo "<div class='alert alert-warning'>";
        foreach($erreurs as $erreur) {
            echo "<p style ='text-indent:0;'>".$erreur."</p>";
        }
        echo "</div>";
    }
    else {
        echo "<div class='alert alert-success'>Le message a bien été envoyé. Merci!</div>";
    }
}

?>
    
    <form role="form" style="letter-spacing:2px; font-size:18px;" method="POST" action="<?php echo updateURL('./contact.php'); ?>">
    <div class="row">
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Votre nom</h2>
            <input type="text" class="form-control" id="nomContact" name="nomContact" placeholder="EX : Jean Dupont / Société Machin">
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Adresse courriel</h2>
            <input type="email" class="form-control" id="emailContact" name="emailContact" placeholder="jeandupont@exemple.fr">
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Message</h2>
            <textarea class="form-control" rows="3" id="messageContact" name="messageContact" placeholder="Votre message"></textarea>
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Verification d'humanite</h2>
            <!--<script type="text/javascript"
               src="https://www.google.com/recaptcha/api/challenge?k=6LcebecSAAAAAFFGJGTxgcqGejHgHdsCOwouf9zz">
            </script>
               
            <noscript>
                <iframe src="https://www.google.com/recaptcha/api/noscript?k=6LcebecSAAAAAFFGJGTxgcqGejHgHdsCOwouf9zz"
                    height="300" width="500" frameborder="0"></iframe><br>
                <textarea name="recaptcha_challenge_field" rows="3" cols="40">
                </textarea>
                <input type="hidden" name="recaptcha_response_field"
                    value="manual_challenge">
            </noscript>-->
        </div>
    </div>
    <button type="submit" class="btn btn-default">Envoyer</button> 
    </form>
    
    <address style="letter-spacing:1spx; font-size:18px; text-align:center;">
      <strong>Arnaud Bletterer</strong><br>
      2 Route de Forstheim<br>
      67500 HAGUENAU, FRANCE<br>
      <a href="mailto:arnaud.bletterer@gmail.com">arnaud.bletterer&nbsp;_at_&nbsp;gmail.com</a>
    </address>
    
<?php require_once("footer.php"); ?>
