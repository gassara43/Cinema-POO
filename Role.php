<?php
class Role
{
    private Acteur $_Acteurs;
    private string $_Peronnage_jouee;
    public function __construct(Acteur $_Acteurs,string $_Peronnage_jouee)
    {
        $this->_Acteurs = $_Acteurs;
        $this->_Personnage_jouee = $_Peronnage_jouee;
    }

    public function getActeur()
    {
        return $this->_Acteurs;
    }
    public function setActeur($acteur)
    {
        $this->_Acteurs = $acteurs;
    }


    public function getPersonne_jouee()
    {
        return $this->_Acteurs;
    }
    public function setActeurPersonne_jouee($acteur)
    {
        $this->_Acteurs = $acteurs;
    }


// Fonction pour ajouter un rôle à la liste des rôles de l'acteur
public function ajouterRole(Role $role)
{
    $this->_roles[] = $role;
}


// Fonction pour obtenir la liste des rôles de l'acteur
public function getRoles()
{
    return $this->_roles;
}
}
