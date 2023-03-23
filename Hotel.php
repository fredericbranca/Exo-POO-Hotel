<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_chambres;

                //Constructeur pour définir un hotel//
    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambres = [];
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

    public function getAdresse(): string
    {
        return $this->_adresse;
    }
    public function setAdresse(string $adresse)
    {
        $this->_adresse = $adresse;
    }

                //Méthode pour ajouter une Chambre à un Hotel//
    public function addChambre(Chambre $chambre)
    {
        $this->_chambres[] = $chambre;
    }

}