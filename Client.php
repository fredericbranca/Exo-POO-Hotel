<?php

class Client
{
    private string $_nom;
    private string $_prenom;

                //Constructeur pour définir un client//
    public function __construct(string $nom, string $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

                //Getter et Setter//
    public function getNom(): string
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom(): string
    {
        return $this->_prenom;
    }
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

                //Méthode pour afficher le nom et prenom du client//
    function __toString()
    {
        return $this->_nom . " " . $this->_prenom;
    }
}