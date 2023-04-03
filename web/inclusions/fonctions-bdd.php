<?php

/**
 * Fonction qui exécute une requête SQL SELECT et qui retourne
 * un tableau de tableaux contenant tous les enregistrements
 * retournés par la requête.
 * @param PDO $objConnexionBDD : L'objet de connexion à la BDD
 * @param string $requeteSQL : La requête SQL SELECT à exécuter
 * @return array|null : Les résultats de la requête sous forme de tableau associatif (ou null si la requête a échoué)
 */
function executeRequeteSELECT($objConnexionBDD, $requeteSQL)
{
	// Vérification que la requête est bien une requête SELECT
	if (
		strlen(trim($requeteSQL)) === 0
		|| substr(trim($requeteSQL), 0, 6) !== 'SELECT'
	) {
		// => on affiche un message d'erreur
		echo '<p class="message-erreur">ERREUR : La requête SQL passée en paramètre n\'est pas une requête SELECT valide !</p>';
	}

	// Exécution de la requête SELECT
	$req = $objConnexionBDD->query($requeteSQL);
	if ($req !== false) {
		$resReq = $req->fetchAll(PDO::FETCH_ASSOC);
		return $resReq;
	} else {
		return null;
	}
}
