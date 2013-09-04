<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Arnaud Bletterer">
    <link rel="shortcut icon" href="img/abletterer-logo-mini.png">

    <title>Contact - ABletterer</title>

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
    
    <h1>Contact</h1>
    
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