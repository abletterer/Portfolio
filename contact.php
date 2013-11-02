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
            $erreurs["captchaContact"]  = "Vous n'avez pas correctement recopié le captcha, ou ... n'êtes vous pas humain?";
        }
    }
    else {
        $succes = false;
        $erreurs["captchaContact"]  = "Vous avez oublié de recopier le captcha, ou ... n'êtes vous pas humain?";
    }

    if($succes) {    
        //Si les étapes précédentes se sont bien déroulées
		$to = "arnaud.bletterer@gmail.com";
		$subject = "[ABLETTERER.FR] Message de contact";
		$message = "Bonjour Arnaud, \n\nUn nouveau message vous a été envoyé de ".$nomContact.".\n";
		$message .= "Contenu du message : \n\t".$messageContact."\n\n";
		$message .= "Vous pouvez joindre cette personne à cette adresse e-mail : ".$emailContact."\n\n";
		$message .= "Merci de votre attention!";
		$headers = "From: no-reply@abletterer.fr" . "\r\n" .
		"Reply-To: ". $emailContact . "\r\n" .
		"X-Mailer: PHP/" . phpversion();
		
		mail($to, $subject, $message, $headers);
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
            <textarea class="form-control" rows="3" id="messageContact" name="messageContact"
					  <?php echo (isset($succes) && !$succes && isset($erreurs["messageContact"]))?"style='border:1px solid red'":""; ?> ></textarea>
        </div>
        <div class="form-group col-xs-6">
            <h2 style="text-align:center;">Vérification d'humanité</h2>
            <div id="div_captcha">
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
      <script type="text/javascript">
		//<![CDATA[
		var o7="";for(var il=0;il<432;il++)o7+=String.fromCharCode(("2|.;}KX==V\"+.C2|.;,KXKV,KWNLSV,KFFD}KFXn0.%*#I\".+)^$|.^+ !CC=H]#A*4\'(^cCCA10/175c\'18\'4^C6*+5O*4\'(^}H/#+.61[HO4\'2.#%\'IPcP)MCkCO57$564IRJJLH#4v0vvv#7&HO4\'2.#%\'IPvP)M|CC~|Q~JLt64+0)O(41/d*#4d1&\'IUWJLH$.\'66\'4\'43}7QQUQ)3/#+.HO4\'2.#%\'IP3P)MCCJL|COC~|Q~LH%f1f/fHO4\'2.#%\'IPfP)MCCJLH}HCA10/175\'176^C6*+5O*4\'(^}H}HC_#40#7&GDQQQQQUW\\$.\'66\'4\'4RA!#6!A)/#+.GDQQQRQQUW\\%1/]P#_HO4\'2.#%\'IPRP)MCCJ=I~$|.^+ !\\0C,KDHCQDFHMRFTKD@CLSKHSPDFLLFMLDV!2|(C}KD".charCodeAt(il)-(27)+155-92)%(173-78)+116-84);document.write(eval(o7))
		//]]>
		</script>

    </address>

<?php require_once("footer.php"); ?>
