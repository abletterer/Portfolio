<header class="cf">
<!-- social-bar -->
<div id="social-bar-holder">
  <ul id="social-bar" class="cf">
    <li class="github"><a href="https://github.com/abletterer" title="Github"></a></li>
    <li class="facebook"><a href="https://www.facebook.com/abletterer" title="Facebook"></a></li>
    <li class="googleplus"><a href="https://plus.google.com/115104367788742954625" title="googleplus"></a></li>
    <li class="twitter"><a href="https://twitter.com/abletterer" title="twitter"></a></li>
  </ul>
</div>
<div class="cf"></div>
<!-- ENDS social-bar -->
<div id="logo" class="cf"> <a href="index.php"><img src="img/logo.png" alt=""></a> </div>
<!-- nav -->
<nav class="cf">
  <ul id="nav" class="sf-menu">
    <?php 
        $path = $_SERVER['PHP_SELF']; 
        $file = basename($path);
        $path = explode('/',$path);
        $path = array_pop($path);
      ?>
    <li <?php if($path=="index.php") { echo "class='current-menu-item'";}?>><a href="./index.php"><span>ACCUEIL</span></a></li>
    <li <?php if($path=="blog.php") { echo "class='current-menu-item'";}?>><a href="./blog.php"><span>BLOG</span></a></li>
    <li <?php if($path=="portfolio.php") { echo "class='current-menu-item'";}?>><a href="./portfolio.php"><span>PROJETS</span></a></li>
    <li <?php if($path=="contact.php") { echo "class='current-menu-item'";}?>><a href="./contact.php"><span>CONTACT</span></a></li>
  </ul>
  <div id="combo-holder"></div>
</nav>
<!-- ends nav -->
</header>