<!-- index.php -->
 <!DOCTYPE html>
 <html lang="fr">

 <head>
 	<meta charset="UTF-8">
 	<title>Didier Motte - Antiquités, Décorations, Belgique — meubles industriels</title>
 	<meta name="HandheldFriendly" content="true">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Antiquités, Décorations, Belgique on Didier Motte &#8211; Antiquités, Décoration" />
	<link rel="stylesheet" type="text/css" href="public/css/stock.css" media="screen">
 </head>

	 <body>

	 	<nav id="blackbar">
	 		<p id="tagline">Antiquités • Décoration • Aménagements d'intérieur</p>
	 	</nav>

	 	<header>
		 	<div id="branding">
		 		<a href="#"><img id="didier-motte-logo" src="public/img/didiermotte_blanc.png" alt="Didier Motte logo" title="Didier Motte logo"></a>
		 		
		 		<p id="contact-info">☎ <a href="#">+32 495/20.59.34</a></p>
		 		<ul id="menu-menu-principal" class="flex">
		 			<li><a href="#">Présentation</a></li>
		 			<li><a href="#">Le stock</a></li>
		 			<li><a href="#" id="menu3">Contact</a></li>
		 		</ul>
		 	</div>
	 	</header>

	 	<section class="stock">
	 		<h1>Stock</h1>
	 		<form class="stockform" action="">
	 			<label id="fouille">Fouiller le stock</label>
	 			<input class="search-input" type="text" name="fouille" placeholder="Exemple: table">
	 			<input type="button" name="submit_fouille" value="recherche">
	 		</form>
			<ul class="stockwrapper">
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"></div><p>image description</p></li>
			</ul>
			<hr>
	 	</section>
	<!-- footer -->
	<?php include('view/footer.view.php'); ?>
	 </body>
 </html>