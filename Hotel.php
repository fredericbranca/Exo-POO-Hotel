<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_chambres;
    private int $_nbResa;
    private array $_reservations;
    private int $_nbChambre;

    //Constructeur pour définir un hotel//
    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambres = [];
        $this->_nbResa = 0;
        $this->_reservations= [];
        $this->_nbChambre = 0;
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
        $this->_nbChambre ++;
    }

    //Méthode pour ajouter une reservation à un Hotel//
    public function addReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;
        $this->_nbResa ++;
    }

    //Méthode pour afficher les chambres d'un Hotel//
    public function afficherChambres()
    {
        $result = "<br><br><div class='titre1'> Statuts des chambres de <b>" . $this->_nom . "</b> : </div>";
        $result .=   "<table>
                        <tr>
                        <th> CHAMBRE </th>
                        <th> PRIX </th>
                        <th> WIFI </th>
                        <th> ETAT </th>
                        </tr>";
        foreach ($this->_chambres as $chambre) {
            $color = "#EFEFEF";

            $result .= "<tr> 
                        <td> Chambre " . $chambre->getNumero() . "</td>
                        <td>"   . $chambre->getPrix() . " €</td>
                        <td>"   . $chambre->wifiImg() . "</td>
                        <td>"   . $chambre->EstDispoTextuel() . "</td>
                        </tr>";
        }
        $result .= "</table>";
        return $result;
    }

    //Méthode pour afficher les réservations d'un Hotel//
    public function afficherReservation()
    {
        $result = "<div class='titre2'> Reservations de l'" . $this->_nom . "</div>";
        if(empty($this->_reservations)){
            $result .= "<p> Aucune réservation ! <p>";
        }
        else
        {
            $result .= "<span class='badge-resa'>" . $this->_nbResa . " RESERVATION(S)</span>";
            foreach ($this->_reservations as $reservation) {
                $result .= "<p>" . $reservation->getClient() . " - Chambre " . $reservation->getChambre()->getNumero() . "" . $reservation . "<p>";
            }
        }
        $result .= "<br>";
        return $result;
    }

    //Méthode pour afficher les infos d'un Hotel//
    function infosHotel()
    {
        $result = "<div class='titre2'>" . $this->_nom . "</div>";
        $result .= "<p>" . $this->_adresse . "</p>";
        $result .= "<p> Nombre de chambre : " . $this->_nbChambre . "</p>";
        $result .= "<p> Nombre de chambre réservées : " . $this->_nbResa . "</p>";
        $result .= "<p> Nombre de chambre dispo : " . $this->_nbChambre - $this->_nbResa . "</p>";
        $result .= "<br>";
        return $result;
    }

    //Méthode toString//
}
