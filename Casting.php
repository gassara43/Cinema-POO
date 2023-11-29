<?php

class Casting {
    private Film $film;
    private Acteur $acteur;
    private Role $role;

    public function __construct(Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;

        $film->ajouterCasting($this);
        $acteur->ajouterCasting($this);
        // $role->ajouterCasting($this);
    }

    public function getFilm() {
        return $this->film;
    }
}