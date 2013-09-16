<?php require_once("header.php"); ?>

<?php 

$erreurs = array();

if(!empty($_POST)) {
    if(!empty($_POST["nomContact"])) {
        $nomContact = htmlspecialchars($_POST["nomContact"]);
    }
    else {
        $succes = false;
        $erreurs[] = "Veuillez renseigner votre nom";
    }
    
    if(!empty($_POST["emailContact"])) {
        $emailContact = htmlspecialchars($_POST["emailContact"]);
    }
    else {
        $succes = false;
        $erreurs[] = "Veuillez renseigner votre email";
    }
    
    if(!empty($_POST["messageContact"])) {
        $messageContact = htmlspecialchars($_POST["messageContact"]);
    }
    else {
        $succes = false;
        $erreurs[] = "Veuillez composer votre message";
    }
                
    if(!empty($nomContact) && !empty($emailContact) && !empty($messageContact)) {    
    
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
            $erreur[] = "Une erreur a été rencontrée avec la base de donnée!";
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
    
    <form role="form" style="letter-spacing:2px; font-size:18px;" method="POST" action="./contact.php">
    <div class="form-group">
        <label for="nomContact">Votre nom</label>
        <input type="text" class="form-control" id="nomContact" name="nomContact" placeholder="EX : Jean Dupont / Société Machin">
    </div>
    <div class="form-group">
        <label for="emailContact">Adresse courriel</label>
        <input type="email" class="form-control" id="emailContact" name="emailContact" placeholder="jeandupont@exemple.fr">
    </div>
    <div class="form-group">
        <label for="messageContact">Message</label>
        <textarea class="form-control" rows="3" id="messageContact" name="messageContact" placeholder="Votre message"></textarea>
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
