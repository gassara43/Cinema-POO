<?php

class Acteur extends Personne
{
    // private string $_NomPersonnageJouer;
    // private array $_filmographie = [];
    private array $castings;

    public function __construct(string $nomPersonnage, string $nom, string $prenom, string $sexe, string $naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $naissance);
         $this->_NomPersonnageJouer = $nomPersonnage;//modifier et remodifier

        $this->castings = [];
    }

    // public function ajouterFilm(Film $film)
    // {
    //     $this->_filmographie[] = $film;
    // }

    public function ajouterCasting(Casting $casting)
    {
        $this->castings[] = $casting;
    }

    public function listerFilmographie()
    {
        $filmographie = [];
        foreach ($this->castings as $casting) {
            $filmographie[] = $casting->getFilm()->getTitre();
        }
        return $filmographie;
    }

    // Getters et Setters spécifiques à Acteur

     public function getNomPersonnage()//la fonction getNompersonnage à modifier et à modifier
    {
        return $this->_NomPersonnageJouer;
     }

    // public function setNomPersonnage($personnage)
    // {
    //     $this->_NomPersonnageJouer = $personnage;
    // }
}

/*
    lister les infos d'un film (dont le réalisateur et le genre qui sont des objets)
    lister les films d'un réalisateur particulier
     lister les films d'un genre particulier
*/
?>
