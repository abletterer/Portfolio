<?php 
    include_once("header.php"); 
?>

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
        $erreurs["nomContact"] = "Veuillez renseigner votre nom!";
    }
    
    if(!empty($_POST["emailContact"])) {
        //Si l'email du contact a été renseigné
        $emailContact = htmlspecialchars($_POST["emailContact"]);
    }
    else {
        $succes = false;
        $erreurs["emailContact"] = "Veuillez renseigner votre email!";
    }
    
    if(!empty($_POST["messageContact"])) {
        //Si le message du contact a été renseigné
        $messageContact = htmlspecialchars($_POST["messageContact"]);
    }
    else {
        $succes = false;
        $erreurs["messageContact"] = "Veuillez composer votre message!";
    }
                
    if(!empty($_POST["captchaContact"])) {
        //Si le captcha du contact a été renseigné
        if(strtoupper($_POST["captchaContact"]) == strtoupper($_SESSION["captchaContact"])) {
            //Le catcha correspond à celui affiché la page précédente
            $_SESSION["captchaContact"] = "";
            session_destroy();
        }
        else {
            $succes = false;
            $erreurs["captchaContact"]  = "Vous n'avez pas correctement recopié le captcha!";
        }
    }
    else {
        $succes = false;
        $erreurs["captchaContact"]  = "Veuillez recopier le captcha, ou ... n'êtes vous pas humain?";
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
    if(!$succes && !isset($erreurs["captchaContact"])) {
        
?>

    <div class='alert alert-warning'>
        <p style ='text-indent:0;'>Veuillez remplir les champs indiqués</p>
    </div>

<?php    
    
    }
    else if(isset($erreurs["captchaContact"])) {
?>

    <div class='alert alert-warning'>
        <p style ='text-indent:0;'><?php echo $erreurs["captchaContact"]; ?></p>
    </div>

<?php 
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
            <input type="text" class="form-control" id="nomContact" name="nomContact" placeholder="Ex : Jean Dupont / Société Machin"
                   <?php echo (isset($succes) && !$succes && isset($erreurs["nomContact"]))?"style='border:1px solid red'":""; ?> >
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Adresse courriel</h2>
            <input type="email" class="form-control" id="emailContact" name="emailContact" placeholder="Ex : jeandupont@exemple.fr"
                   <?php echo (isset($succes) && !$succes && isset($erreurs["emailContact"]))?"style='border:1px solid red'":""; ?> >
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Message</h2>
            <textarea class="form-control" rows="3" id="messageContact" name="messageContact" placeholder="Ex : Votre message"
                   <?php echo (isset($succes) && !$succes && isset($erreurs["messageContact"]))?"style='border:1px solid red'":""; ?> >
            </textarea>
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Vérification d'humanité</h2>
            <div>
                <label for="image_captcha" style="letter-spacing:0px; font-weight:normal">Recopiez ce captcha : </label>
                <img id="image_captcha" src="<?php echo 'quickcaptcha/imagebuilder.php?rand='.rand(0,999999);?>" 
                     style="display:inline-block; height:33px;" data-content="Le respect de la casse n'est pas obligatoire"
                     data-placement="right">
                <input type="text" class="form-control" id="captchaContact" name="captchaContact"
                   style='<?php echo (isset($succes) && !$succes && isset($erreurs["captchaContact"]))?"border:1px solid red;":""; ?> margin-top:4px;' >
            </div>
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