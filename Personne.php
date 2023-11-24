<?php

class Personne
{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected DateTime $_dateNaissance;

    // camelCase : nomDeLUtilisateur, meteoDuMoment
    // PascalCase : Personne, ChoseAFaire, TrucDuMachin

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissanceString)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissanceString); // "2023-11-23"
    }

    // Getters
    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getSexe()
    {
        return $this->_sexe;
    }

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function getNomComplet()
    {
        return $this->_prenom . ' ' . $this->_nom;
    }

    // Setters
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function setSexe(string $sexe)
    {
        $this->_sexe = $sexe;
    }

    public function setDateNaissance(string $datenaissanceString)
    {
        $this->_dateNaissance = new DateTime($datenaissanceString);
    }
}
?>
