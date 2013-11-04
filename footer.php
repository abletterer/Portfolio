<!-- Site footer -->
<div class="footer">
	<a href="#">
		<img class="hover" src="<?php echo updateURL('img/html5-logo-hover.png'); ?>" alt="HTML5" title="HTML5" style="position:absolute; height:48px; opacity:0;">
	   	<img class="normal" src="<?php echo updateURL('img/html5-logo.png'); ?>" alt="HTML5" title="HTML5" style="height:48px;">
    </a>
    <a href="#">
        <img class="hover" src="<?php echo updateURL('img/css3-logo-hover.png'); ?>"alt="CSS3" title="CSS3" style="position:absolute; height:48px; opacity:0;">
        <img class="normal" src="<?php echo updateURL('img/css3-logo.png'); ?>"alt="CSS3" title="CSS3" style="height:48px;">
    </a>
    <p style="padding-top:10px; float:right;">&copy; Arnaud Bletterer 2013 - Powered by <a href="http://getbootstrap.com/" target="_blank">Twitter Bootstrap</a>
    </p>
   
<?php
	Locale::setDefault("fr-FR");
	echo "<p style='padding-top:10px; float:left;'>Page modifiée le " . date("d/m/Y.", getlastmod())."</p>";
?>

</div>
    
</div> <!-- /container -->

<!-- JavaScript-->
<script type="application/javascript" src="<?php echo updateURL('js/jquery-1.9.1.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo updateURL('bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo updateURL('js/main.js'); ?>"></script>
<script type="application/javascript" src="<?php echo updateURL('js/jquery.transit.min.js'); ?>"></script>

<!-- Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23336044-1']);
  _gaq.push(['_setDomainName', 'abletterer.fr']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body></html>
