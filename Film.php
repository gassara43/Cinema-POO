<?php

class Film
{
    private string $_titre;
    private DateTime $_dateSortie; 
    private int $_duree;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private Genre $_genre;
    private array $_castings = [];

    public function __construct(string $titre, DateTime $dateSortie, int $duree, Realisateur $realisateur, Genre $genre, string $synopsis = '')
    {
        $this->_titre = $titre;
        $this->_dateSortie = $dateSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_synopsis = $synopsis;

        // Ajouter automatiquement ce film à la liste de films du genre
        $genre->ajouterFilm($this);
        // Associer automatiquement ce film au réalisateur
        $realisateur->ajouterFilm($this);

    }

    public function ajouterActeur(Acteur $acteur, string $role)
    {
        $acteur->ajouterFilm($this);
        
    }

    // Getters et Setters pour les propriétés 

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre(string $titre)
    {
        $this->_titre = $titre;
    }

    public function getDateSortie()
    {
        return $this->_dateSortie;
    }

    public function setDateSortie(DateTime $dateSortie)
    {
        $this->_dateSortie = $dateSortie;
    }

    public function getDuree()
    {
        return $this->_duree;
    }

    public function setDuree(int $duree)
    {
        $this->_duree = $duree;
    }

    public function getRealisateur()
    {
        return $this->_realisateur;
    }

    public function setRealisateur(Realisateur $realisateur)
    {
        $this->_realisateur = $realisateur;
    }

    public function getSynopsis()
    {
        return $this->_synopsis;
    }

    public function setSynopsis(string $synopsis)
    {
        $this->_synopsis = $synopsis;
    }

    public function getGenre()
    {
        return $this->_genre;
    }

    public function setGenre(Genre $genre)
    {
        $this->_genre = $genre;
    }

    public function getCastings()
    {
        return $this->_castings;
    }

    public function setCastings(array $castings)
    {
        $this->_castings = $castings;
    }

    

   
    public function afficherInfoFilm()
    {
        echo "<h2>Informations sur le film</h2>";
        echo "<strong>Titre:</strong> " . $this->_titre . "<br>";
        echo "<strong>Date de sortie:</strong> " . $this->_dateSortie->format('Y-m-d') . "<br>";
        echo "<strong>Durée:</strong> " . $this->_duree . " minutes<br>";

        echo "<strong>Réalisateur:</strong> " . $this->_realisateur->getNomComplet() . "<br>";
        echo "<strong>Genre:</strong> " . $this->_genre->getNom() . "<br>";

        echo "<strong>Synopsis:</strong> " . $this->_synopsis . "<br>";

       
    }
}

?>

