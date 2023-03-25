<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_chambres;
    private array $_reservation;

                //Constructeur pour définir un hotel//
    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambres = [];
        $this->_reservation = [];
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

                //Méthode pour ajouter une reservation à un Hotel//
    public function addReservation(Reservation $reservation)
    {
        $this->_reservation[] = $reservation;
    }
    
                //Méthode pour afficher les chambres d'un Hotel//
    public function afficherChambres()
    {
        $result = "<p> Statuts des chambres de <b>" . $this->_nom . "</b> : </p>";
        $result .=   "<table>
                        <tr>
                        <th> CHAMBRE </th>
                        <th> PRIX </th>
                        <th> WIFI </th>
                        <th> ETAT </th>
                        </tr>";
        foreach($this->_chambres as $chambre)
        {
            $color = "#EFEFEF";
            
            $result .= "<tr> 
                        <td> Chambre " . $chambre->getNumero() . "</td>
                        <td>"   . $chambre->getPrix() . " €</td>
                        <td>"   . $chambre->getWifi() . "</td>
                        <td>"   .$chambre->getEstDispo() . "</td>
                        </tr>";
        }
        $result .= "</table><br><br>";
        return $result;
    }
}