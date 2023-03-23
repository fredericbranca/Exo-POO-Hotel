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

                //Méthode pour afficher les chambres d'un Hotel//
    public function afficherChambres()
    {
        $result = "<p> Liste des chambres de <b>" . $this->_nom . "</b> : </p>";
        $result .=   "<table border='1' width='20%'>
                        <tr align='center'> 
                            <td> Chambre </td>
                            <td> Prix </td>
                            <td> Wifi </td>
                            <td> Disponibilité </td>
                        </tr>";
        
        foreach($this->_chambres as $chambre)
        {
        $result .= "    <tr align='center'> 
                            <td> n°" . $chambre->getNumero() . "</td>
                            <td>" . $chambre->getPrix() . " €</td>
                            <td>" . $chambre->getWifi() . "</td>
                            <td> " . $chambre->getEstDispo() . "</td>
                        </tr>";
        }
        $result .= "</table>";
        return $result;
    }
}