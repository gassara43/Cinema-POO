<?php
class Genre
{
    private string $_nom;
    private array $_films = [];

    public function __construct(string $nom)
    {
        $this->_nom = $nom;
    }

    public function ajouterFilm(Film $film)
    {
        $this->_films[] = $film;
    }

    public function getFilmsParGenre()
    {
        $filmsParGenre = [];
        foreach ($this->_films as $film) {
            $filmsParGenre[] = $film->getTitre();
        }
        return $filmsParGenre;
    }

    // Autre méthode ajoutée pour afficher les films associés à ce genre
    public function afficherFilmsParGenre()
    {
        echo "<h2>Films du genre " . $this->_nom . "</h2>";
        echo "<ul>";
        $titreFilms = $this->getFilmsParGenre();
        foreach ($titreFilms as $titreFilm) {
            echo "<li>" . $titreFilm . "</li>";
        }
        echo "</ul>";
    }

    // Getters et Setters pour le nom du genre
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
}