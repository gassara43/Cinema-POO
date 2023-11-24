<?php

class Realisateur extends Personne
{
    private array $_filmographie = [];

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $naissance);
    }

    public function ajouterFilm(Film $film)
    {
        $this->_filmographie[] = $film;
    }

    public function getFilmographie()
    {
        $filmographie = [];
        foreach ($this->_filmographie as $film) {
            $filmographie[] = $film->getTitre();
        }
        return $filmographie;
    }

    public function afficherFilmographie() {
        echo 'La filmographie de ' . $this->getNomComplet() . ' :<br>';
        $filmographieRealisateur = $this->getFilmographie();
        foreach ($filmographieRealisateur as $titreFilm) {
            echo $titreFilm . '<br>';
        }
    }
}
?> 
