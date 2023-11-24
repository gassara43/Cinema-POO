<?php

// Utilisez ici les classes pour créer des objets, appeler des méthodes, etc.
require_once 'Personne.php';
require_once 'Acteur.php';
require_once 'Realisateur.php';
require_once 'Genre.php';
require_once 'Film.php';
require_once 'Role.php';

/*
il pratique d'utiliser l'objet DateTime si on veut les minupler ,ça devient facile.
ici acteur prend la personne incarné et le nom prenom sexe et date de naissance de la personne qui joue ce role
on peut pas afficher un objet avec echo sans utiliser __tosting() pour le faire simplement avec echo ,si non on est obligé d'utiliser
les methodes avec (->) cette flèche pour accèder un element de la classe.
 */
 $acteur1 = new Acteur('Batman','Michael', 'Keaton', 'Homme', '1951-09-05'); 
 $acteur2 = new Acteur('Batman','Val', 'Kilmer', 'Homme', '1959-12-31');
 $acteur3 = new Acteur('Batman','George', 'Cloony', 'Homme', '1961-05-06');
 echo "les acteurs ayant joué le role de ".$acteur1->getNomPersonnage()."<br>";
 echo $acteur1->getNom()." ".$acteur1->getPrenom()."<br>";
 echo $acteur2->getNom()." ".$acteur2->getPrenom()."<br>";
 echo $acteur3->getNom()." ".$acteur3->getPrenom()."<br>";
/********************************************************************************************************************** */

 $realisateur = new Realisateur('George', 'Cloony', 'Homme', '1961-05-06');
 $genre = new Genre('Action');
$film = new Film('Star Wars Episode IV', new DateTime('1977-05-25'), 121, $realisateur, $genre);
$acteurIncarne1 = new Acteur('Han Solo','Harrison', 'Ford', 'Homme', '1945-07-13');
$acteurIncarne2 = new Acteur('Luke Skywalker','Mark', 'Hamill', 'Homme', '1951-09-25');

echo "dans le film ".$film->getTitre().", ";//je récupère le titre du film déclarer ci dessus.
//ici je récupère le nom de personnage incarné ,le nom et le prenom de l'acteur qui joue ce role.
echo $acteurIncarne1->getNomPersonnage()." a été incarné par ".$acteurIncarne1->getNomComplet()."<br>";
echo $acteurIncarne2->getNomPersonnage()." a été incarné par ".$acteurIncarne2->getNomComplet()."<br>";

/*************************************************************************************************************** */
// Exemple d'utilisation pour lister les films par genre
$scienceFiction = new Genre('Science-Fiction');
$starWars = new Film('Star Wars', new DateTime('1977-05-25'), 121, $realisateur, $scienceFiction);
$bladeRunner = new Film('Blade Runner', new DateTime('1982-06-25'), 117, $realisateur, $scienceFiction);

// Afficher les films par genre
$scienceFiction->afficherFilmsParGenre();

/****************************************************************************************************** */



// Créez des instances de films, acteurs, réalisateurs, genres, etc.

// Créer un genre
$actionGenre = new Genre('Action');

// Créer des réalisateurs
$realisateurBatman = new Realisateur('Tim', 'Burton', 'Homme', '1958-08-25');
$realisateurSpiderman = new Realisateur('Jon', 'Watts', 'Homme', '1981-06-28');

// Créer un acteur
$acteurPrincipal = new Acteur('Michael Keaton', 'Keaton', 'Michael', 'Homme', '1951-09-05');

// Créer des films avec ces acteurs, réalisateurs, genres, etc.
$batmanFilm = new Film('Batman', new DateTime('1989-06-23'), 126, $realisateurBatman, $actionGenre);
$spidermanFilm = new Film('Spider-Man: Homecoming', new DateTime('2017-07-07'), 133, $realisateurSpiderman, $actionGenre);

// Associer l'acteur aux films
$batmanFilm->ajouterActeur($acteurPrincipal, 'Batman');
$spidermanFilm->ajouterActeur($acteurPrincipal, 'Vulture');

// Liste de la filmographie de l'acteur
$filmographieActeur = $acteurPrincipal->listerFilmographie();

// Affichage des films dans lesquels l'acteur a joué
echo 'La filmographie de ' . $acteurPrincipal->getNomComplet() . ' :<br>';
foreach ($filmographieActeur as $titreFilm) {
    echo $titreFilm . '<br>';
}
/********************************************************************************************************** */


// Créer un genre "Aventure"
$aventureGenre = new Genre('Aventure');

// Créer un réalisateur
$georgeLucas = new Realisateur('Lucas', 'George', 'Homme', '1944-05-14');

// Créer des films réalisés par ce réalisateur
$starWars = new Film('Star Wars', new DateTime('1977-05-25'), 121, $georgeLucas, $aventureGenre);
$indianaJones = new Film('Indiana Jones', new DateTime('1981-06-12'), 115, $georgeLucas, $aventureGenre);

// Affichage des films réalisés par le réalisateur
$filmographieRealisateur = $georgeLucas->afficherFilmographie();
/*********************************************************************************************************** */

// Créez des instances de films, acteurs, réalisateurs, genres, etc.

// Créer un réalisateur
$georgeLucas = new Realisateur('Lucas', 'George', 'Homme', '1944-05-14');

// Créer un genre "Science-Fiction"
$scienceFiction = new Genre('Science-Fiction');

// Créer un film
$starWars = new Film('Star Wars', new DateTime('1977-05-25'), 121, $georgeLucas, $scienceFiction, 'Une galaxie lointaine, très lointaine...');


// Afficher les informations sur le film
$starWars->afficherInfoFilm();

/**********************************************************************************************************/
//Créez un genre "Aventure"
$aventureGenre = new Genre('Aventure');

// Créez des films associés à ce genre
$starWars = new Film('Star Wars', new DateTime('1977-05-25'), 121, $realisateur, $aventureGenre);
$indianaJones = new Film('Indiana Jones', new DateTime('1981-06-12'), 115, $realisateur, $aventureGenre);

// Affichage des films associés à ce genre
$aventureGenre->afficherFilmsParGenre();
?>






