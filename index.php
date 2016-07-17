<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<meta name="author" content="Yoanns CHARPENTIER">
	<title>Pergola Clubs Multiplex</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
	<link rel="shortcut icon" href="pictures/divers/favPergo.ico" />
	<link rel="shortcut icon" href="pictures/divers/favPergo.png" />
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.lightbox_me.js" type="text/javascript"></script>
	<script src="js/ossature_site.js" type="text/javascript"></script>
	<script src="js/carrousel_cabaret.js" type="text/javascript"></script>
	<script src="js/formulaire_cabaret.js" type="text/javascript"></script>
	<script src="js/formulaire_newsletter.js" type="text/javascript"></script>
	<script src="js/ossature_agenda.js" type="text/javascript"></script>

	<!-- Google Analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26960409-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	<!-- Bouton Google  +1 -->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'fr'}
</script>

</head>
<body>

<!-- Debut Script Bouton J'aime -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Fin du Script -->

<div id="titre">
<div class="centrage">
	<div id="menu">

	<div id="logo_1">
	<img src="pictures/divers/logo_pergo.jpg" />
	<br />

	<!-- lecteur mp3 dewplayer flash-->
	<object type="application/x-shockwave-flash" data="dewplayer-vol.swf" width="237" height="20" id="dewplayer" name="dewplayer">
		<param name="movie" value="dewplayer-vol.swf" />
		<param name="flashvars" value="mp3=sound/HedKandi_The C90s.mp3&amp;autostart=1&autoreplay=1" />
		<param name="wmode" value="transparent" />
	</object>
	</div>
		<?php 
			include('googlemap.php');
		?>
		<a href="#" onclick="AfficheTexte('accueil'); return false;" class="onglet">Accueil</a>
		<a href="#" onclick="AfficheTexte('agenda'); return false;" class="onglet">Agenda</a>
		<a href="#" onclick="AfficheTexte('galerie'); return false;" class="onglet">Galerie</a>
		<a href="#" onclick="AfficheTexte('bon_plans'); return false;" class="onglet">Bon Plans</a>
		<a href="#" onclick="AfficheTexte('cabaret'); return false;" class="onglet">Cabaret</a>

		&nbsp;<g:plusone size="small"></g:plusone>
		<div class="fb-like" data-href="https://www.facebook.com/pages/La-Pergola/38060113702"
		data-send="true" data-layout="button_count" data-width="340" data-show-faces="true"></div>

		<div style="clear: both;"></div>
	</div>
</div>
</div>

<div id="page">
<div class="centrage">
	<div id="contenu">

		<div id="bloc_accueil" class="bloctexte" style="display: block;">
			<h3>Bienvenue au Pergola Clubs Multiplex</h3>
				<?php
					include('accueil.php');
				?>
		</div>
		<div id="bloc_agenda" class="bloctexte" style="display: none;">
			<h3>L'agenda</h3>
				<?php
					include('agenda.php');
				?>
		</div>
		<div id="bloc_galerie" class="bloctexte" style="display: none;">
			<h3>Les photos de soiree</h3>
				<?php
					include('gallerie.php');
				?>
		</div>
		<div id="bloc_bon_plans" class="bloctexte" style="display: none;">
			<h3> Les Bons Plans Promo</h3>
				<?php
					include('bon_plan.php');
				?>
		</div>
		<div id="bloc_generalites" class="bloctexte" style="display: none;">
			<h3>Infos diverses</h3>
				<?php
					include('generalite.php');
				?>
		</div>
		<div id="bloc_cabaret" class="bloctexte" style="display: none;">
			<h3>Pergo Folies</h3>
				<?php
					include('cabaret.php');
				?>
		</div>
	</div>
<!--	
<div id="footer">
<a class="footer1" href="#" target="_blank" title="Les tarifs de La Pergola">Tarifs</a>
&nbsp;|&nbsp;
<a href="#" class="footer1" target="_blank" title="Recrutement">Recrutement</a>
&nbsp;|&nbsp;
<a href="#" class="footer1" target="_blank" title="les mentions legales">Mentions legales</a>
</div>
-->
</div>
</div>

</body>
</html>