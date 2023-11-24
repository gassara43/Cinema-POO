<?php

class Acteur extends Personne
{
    private string $_NomPersonnageJouer;
    private array $_filmographie = [];

    public function __construct(string $nomPersonnage, string $nom, string $prenom, string $sexe, string $naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->_NomPersonnageJouer = $nomPersonnage;
    }

    public function ajouterFilm(Film $film)
    {
        $this->_filmographie[] = $film;
    }

    public function listerFilmographie()
    {
        $filmographie = [];
        foreach ($this->_filmographie as $film) {
            $filmographie[] = $film->getTitre();
        }
        return $filmographie;
    }

    // Getters et Setters spécifiques à Acteur
    public function getNomPersonnage()
    {
        return $this->_NomPersonnageJouer;
    }

    public function setNomPersonnage($personnage)
    {
        $this->_NomPersonnageJouer = $personnage;
    }
}

/*
    lister les infos d'un film (dont le réalisateur et le genre qui sont des objets)
    lister les films d'un réalisateur particulier
     lister les films d'un genre particulier
*/
?>
