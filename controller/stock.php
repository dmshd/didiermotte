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
		<?php
		include('view/nav.view.php');
		include('view/header.view.php');
		?>
		<section class="stock">
			<h1>Stock</h1>
			<form class="stockform" action="">
				<label id="fouille">Fouiller le stock</label>
				<input class="search-input" type="text" name="fouille" placeholder="Exemple: table">
				<input type="button" name="submit_fouille" value="recherche">
			</form>
			<ul class="stockwrapper">
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto hover" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto hover" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto hover" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto hover" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto hover" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto hover" src="public/img/chapelier.jpg"></div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"> <img src="public/img/vendu2.png" class="vendu" alt="article vendu" title="article vendu"> </div><p>image description</p></li>
				<li class="stockitem"><div class="ofhidden roundcorner"><img class="stockphoto" src="public/img/chapelier.jpg"> <img src="public/img/vendu2.png" class="vendu" alt="article vendu" title="article vendu"> </div><p>image description</p></li>
			</ul>
			<div class="pnmenu-container">
				<ul class="pnmenu">
					<li><a href="#" class="button pnmenu-active">1</a></li>
					<li><a href="#" class="button ul-none">2</a></li>
					<li><a href="#" class="button ul-none">3</a></li>
					<li><a href="#" class="button ul-none">4</a></li>
					<li><a href="#" class="button ul-none">Suivant</a>
				</li>
			</ul>
		</div>
		<hr>
		<article class="catalogue">
			<h2>Catalogue</h2>
			<ul class="cat-wrapper">
			<?php
			$cat = array(
				"Acajou (1)",
				"Agencement de bar (1)",
				"Art déco (1)",
				"Balance (1)",
				"Barbier (2)",
				"Bibliothèque (3)",
				"Bibliothèque de notaire (1)",
				"Bois (1)",
				"Bois recyclé (1)",
				"Boucherie ancienne (1)",
				"Bureau (1)",
				"Canapé (1)",
				"Canpé (1)",
				"Chaise bistrot (3)",
				"Chaise de bistrot (1)",
				"Chapeler (1)",
				"Chevalet (1)",
				"Coffre-fort (3)",
				"Coiffeur (2)",
				"Comptoir (12)",
				"Comptoir ancien (4)",
				"Comptoir de bar (5)",
				"Comptoir de bar en formica (1)",
				"comptoir de bistrot (3)",
				"Comptoir de boucherie (1)",
				"comptoir de boulanger (3)",
				"Comptoir de boulangerie (2)",
				"comptoir de café (3)",
				"Comptoir de drapier (2)",
				"Comptoir de magasin (2)",
				"Comptoir de mercerie (3)",
				"Comptoir de métier (4)",
				"Comptoir en marbre (5)",
				"comptoir galbé (1)",
				"comptoir vitré (5)",
				"Comptoir-caisse (1)",
				"Confessionnal (1)",
				"Console (2)",
				"Décoration de jardin (1)",
				"Double-corps (1)",
				"Element architectural (1)",
				"Esaclier industriel (1)",
				"Escabeau métallique (1)",
				"Escalier colimaÃ§on (1)",
				"Escalier en fonte (1)",
				"Étagère (1)",
				"Formica (1)",
				"Frigo en bois (2)",
				"Herboristerie (1)",
				"Industriel (1)",
				"Intérieur de bistrot (2)",
				"Intérieur de pharmacie (4)",
				"Laiton (2)",
				"Lambris (1)",
				"Lavabo en marbre (1)",
				"Lion couché (1)",
				"Magasin (1)",
				"Maroquinier (1)",
				"Mercerie (3)",
				"Métal (1)",
				"Meuble (1)",
				"Meuble Ã  casiers (1)",
				"Meuble Ã  tiroirs (3)",
				"Meuble Ã  volet (1)",
				"Meuble d'administration (1)",
				"Meuble d'atelier (2)",
				"Meuble d'école (4)",
				"Meuble d'église (2)",
				"Meuble d'épicerie (1)",
				"Meuble d'herboristerie (1)",
				"Meuble de barbier (8)",
				"Meuble de bijoutier (2)",
				"Meuble de boucher (2)",
				"Meuble de boucherie (2)",
				"Meuble de charcuterie (1)",
				"Meuble de chocolatier (1)",
				"Meuble de coiffeur (8)",
				"Meuble de la Banque de France (1)",
				"Meuble de magasin (1)",
				"Meuble de mercerie (4)",
				"Meuble de métier (10)",
				"Meuble de musée (1)",
				"Meuble de notaire (1)",
				"Meuble de parfumerie (1)",
				"Meuble de pâtisserie (1)",
				"Meuble de pharmacie (5)",
				"Meuble de quincaillerie (2)",
				"Meuble de restaurant (1)",
				"Meuble en marbre (3)",
				"Meuble industriel (1)",
				"Miroir (4)",
				"Mobilier (1)",
				"Néogothique (1)",
				"paire de fauteuils (1)",
				"patine ancienne (1)",
				"Pharmacie ancienne (2)",
				"pieds en fonte (1)",
				"Pierre bleue (1)",
				"Pigeonnier (1)",
				"Placard (1)",
				"Porte (2)",
				"porte métallique (1)",
				"portes coulissantes (2)",
				"radiateur en fonte (1)",
				"Radiateur fleuri (1)",
				"recyclé (1)",
				"sculpture (1)",
				"skaÃ¯ (1)",
				"statue de jardin (1)",
				"table (1)",
				"Table bistrot (1)",
				"Table d'architecte (1)",
				"table de bistrot (2)",
				"Table de boucher (1)",
				"Table de café (1)",
				"Table de conférence (1)",
				"Table de coupe (1)",
				"Table de couvent (1)",
				"Table de drapier (2)",
				"Table de réunion (1)",
				"Table double-plateaux (1)",
				"Table en formica (1)",
				"Table industrielle (3)",
				"Verrier (1)",
				"vitres galbées (2)",
				"Vitrine (5)",
				"Vitrine de magasin (4)",
				"Vitrine de musée (2)",
				"Vitrine de pharmacie (1)",
				"Vitrine-comptoir (2)",
				"Zinc (2)"
			);
				foreach ($cat as $key => $value) {
						echo '<li class="cat-item"><a class="cat-item-a" href="#" alt="" title="">' . $value . '</a></li>';
			}

			?>
			</ul>
			<hr>
		</article>
	</section>
	<!-- footer -->
	<?php include('view/footer.view.php'); ?>
</body>
</html>