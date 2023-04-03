<!-- En-tête avec barre de navigation -->
<header class="container">
	<div class="d-flex flex-wrap justify-content-center px-4 py-3 mb-4 border-bottom">

		<!-- Partie de gauche (Nom du site) -->
		<a id="lien-en-tete" href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-secondary text-decoration-none">
			<span class="fs-4 fw-bold">Vercors Music Festival 2022</span>
		</a>

		<!-- Partie de droite (Menu de navigation) -->
		<ul class="nav nav-pills">
			<li id="nav-accueil" class="nav-item mx-2">
				<a href="index.php" class="<?= ($GLOBALS["id-page"] === "nav-accueil") ? "nav-link active" : "nav-link"; ?>">
					Accueil
				</a>
			</li>

			<li id="nav-liste-artistes" class="nav-item mx-2">
				<a href="liste-artistes.php" class="<?= ($GLOBALS["id-page"] === "nav-liste-artistes") ? "nav-link active" : "nav-link"; ?>">
					Liste des artistes
				</a>
			</li>

			<li id="nav-prog-par-jour" class="nav-item mx-2">
				<a href="prog-par-jour.php" class="<?= ($GLOBALS["id-page"] === "nav-prog-par-jour") ? "nav-link active" : "nav-link"; ?>">
					Programmation par jour
				</a>
			</li>
		</ul>

	</div>
</header>