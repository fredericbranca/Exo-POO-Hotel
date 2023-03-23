<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_chambre;

                //Constructeur pour définir un hotel//
    public function __construct(string $nom, string $adresse, array $chambre)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambre = $chambre;
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

    public function getChambre(): string
    {
        $result = "Chambre : ";
        foreach($this->_chambre as $chambre)
        {
        $result .= $chambre ."/";
        }
        return $result;
    }
    public function setChambre(array $chambre)
    {
        $this->_chambre = $chambre;
    }

}