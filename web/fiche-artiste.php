<!DOCTYPE html>
<html lang="fr">

<?php
// Définition des variables globales
$GLOBALS["title-page"] = "Fiche artiste";
$GLOBALS["id-page"] = null;
$GLOBALS["bdd-lecture-PDO"] = null;

// Inclusion du script permettant de se connecter à la BDD
// (et stockage de l'objet dans $GLOBALS["bdd-lecture-PDO"])
require("inclusions/connexion-bdd-lecture.php");

// Inclusion du script fournissant des fonctions permettant d'exécuter
// des requêtes SQL sur la BDD
require("inclusions/fonctions-bdd.php");

// Inclusion des méta-données de la page (<head>)
require("inclusions/head.php");
?>

<body>

	<?php
	// Inclusion de l'en-tête de la page (<header>)
	require("inclusions/header.php");
	?>

  <!-- Contenu principal de la page -->
	<main class="container px-5 mb-5">
		<h1>Fiche artiste</h1>

		<h2 class="display-4 text-center fw-bolder">Ben Mazué</h2>

		<img class="rounded-pill mx-auto d-block my-4" src="https://www.vercorsmusicfestival.com/media/cache/program_artist_large/uploads/artist_image/large/da8f87ecab95b2bc9a5aa536082386e5cbbab405.jpeg" alt="Illustration de l'artiste Ben Mazué">

		<hr>
		<h3>Vidéo(s) de l'artiste</h3>
		<article class="card m-4">
			<div class="card-body">
				<h4>Ben Mazué - Quand je marche</h4>
				<div class="ratio ratio-16x9 mt-3">
					<iframe src="https://www.youtube.com/embed/29gOHmidswU" title="Vidéo YouTube Ben Mazué - Quand je marche" allowfullscreen></iframe>
				</div>
			</div>
		</article>
		<article class="card m-4">
			<div class="card-body">
				<h4>Ben Mazué - Les jours heureux</h4>
				<div class="ratio ratio-16x9 mt-3">
					<iframe src="https://www.youtube.com/embed/tpoxa-J7etk" title="Vidéo YouTube Ben Mazué - Les jours heureux" allowfullscreen></iframe>
				</div>
			</div>
		</article>

		<hr>
		<p class="fst-italic">Pour plus d'informations, vous pouvez aller voir <a href="https://www.vercorsmusicfestival.com/artiste/ben-mazue/" target="_blank">la page de l'artiste sur le site officiel du festival</a>.</p>
	</main>

	<!-- Inclusion du JS de Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>