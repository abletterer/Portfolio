<?php require_once("header.php"); ?>
    
    <span class="title-h1"><h1>Contact</h1></span>
    
    <form role="form" style="letter-spacing:2px; font-size:18px;" action="POST">
    <div class="form-group">
        <label for="exampleInputNom1">Votre nom</label>
        <input type="email" class="form-control" id="exampleInputNom1" placeholder="EX : Jean Dupont / Société Machin">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Adresse courriel</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="jeandupont@exemple.fr">
    </div>
    <div class="form-group">
        <label for="exampleInputmessage1">Message</label>
        <textarea class="form-control" rows="3" placeholder="Votre message"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Envoyer</button>
    </form>
    
    <address style="letter-spacing:1spx; font-size:18px; font">
      <strong>Arnaud Bletterer</strong><br>
      2 Route de Forstheim<br>
      67500 HAGUENAU, FRANCE<br>
      <a href="mailto:arnaud.bletterer@gmail.com">arnaud.bletterer@gmail.com</a>
    </address>
    
<?php require_once("footer.php"); ?>